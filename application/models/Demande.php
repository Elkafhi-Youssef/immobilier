<?php


class Demande{
     
    private $db;
    public function __construct(){
        $this->db = new Db();
    }

    // add book
    public function addDemande($params){

        // $data li jaya mn form 
        // insert data 
        if ($this->db->insert('book',['isbn','title','edition_year'],["$params[0]","$params[1]","$params[2]"])){
            if ($this->addCopy([$params[5],$params[0]])) return true;
        }
        return false;
    }

    // add copy
    public function addCopy($val){
        // counter : counts numbre of inserted books
        $inserted = 0;
        for ($i = 0 ;$i < $val[0];$i++) { 
           if ($this->db->insert('copy',['copy_id','isbn'],["null","$val[1]"]))
            $inserted++;
        }
        return ($inserted == $val[0]);
    }

    // add author
    public function addAuthor($authorname,$isbn){
        
        if (!$this->rowExist('author','fullname',$authorname)) {
            if($this->db->insert('author',['author_id','fullname'],[null,$authorname])){
                $authorId = $this->db->select('author',['fullname'],[$authorname],false)['author_id'];
                return $this->db->insert('ecrire',['isbn','author_id'],[$isbn,$authorId]);
            }
        }else{
            $authorId = $this->db->select('author',['fullname'],[$authorname],false)['author_id'];
            return $this->db->insert('ecrire',['isbn','author_id'],[$isbn,$authorId]);
        }
        return false;
    }

    // add category
    public function addCattegory($catName,$isbn){

        if (!$this->rowExist('category','cat_name',$catName)) {
            if($this->db->insert('category',['cat_id','cat_name'],[null,$catName])){
                $catId = $this->db->select('category',['cat_name'],[$catName],false)['cat_id'];
                return $this->db->insert('existe',['isbn','cat_id'],[$isbn,$catId]);
            }
        }else{
            $catId = $this->db->select('category',['cat_name'],[$catName],false)['cat_id'];
            return $this->db->insert('existe',['isbn','cat_id'],[$isbn,$catId]);
        }
        return false;   
    }

    /**
     * Chek if row exists
     * @param string $table 
     * @param string $attr 
     * @param string $attrValue
     * @return true|false
     */

     public function rowExist($table,$attr,$attrValue){
        $this->db->prepareQuery("SELECT * FROM $table WHERE $attr like ?");
        $this->db->execute([$attrValue]);
        return ($this->db->getNumRows() == 1);
     }

    /**
     * Get all books
     * @param void
     * @return array
     */

    public function getBooks(){
        
        $this->db->prepareQuery(
            'SELECT b.isbn, b.title, a.fullname, c.cat_name
            FROM book as b  INNER JOIN existe as e ON b.ISBN = e.ISBN 
            INNER JOIN category as c ON e.cat_id = c.cat_id 
            INNER JOIN ecrire as ec ON b.ISBN = ec.ISBN INNER JOIN author as a ON a.author_id = ec.author_id'
        );
        
        $this->db->execute();
         return $this->db->getResult();
       

    }

    /**
     * Get books with specified filter
     * @param string $filter isbn|category|title|author
     * @param array $values 
     * @return array
     * 
     */

    public function filterBooks($filter,$values){
        $isbn_filter = $category_filter = $title_filter = $author_filter = ''; 
        switch ($filter) {
            case 'isbn':
                $isbn_filter = "AND b.$filter LIKE ?";
                break;
            case 'cat_name':
                $category_filter = "AND c.$filter LIKE ?";
                break;
            case 'title':
                $title_filter = "AND b.$filter LIKE ?";
                break;
            case 'fullname':
                $author_filter = "AND a.$filter LIKE ?";
                break;
            
            default:
                $isbn_filter = $category_filter = $title_filter = $author_filter = ''; 
                break;
        }

        $this->db->prepareQuery(
        "SELECT b.isbn, b.title, a.fullname, c.cat_name
        FROM book as b  INNER JOIN existe as e ON b.ISBN = e.ISBN  $isbn_filter
        INNER JOIN category as c ON e.cat_id = c.cat_id $category_filter
        INNER JOIN ecrire as ec ON b.ISBN = ec.ISBN 
        INNER JOIN author as a ON a.author_id = ec.author_id $title_filter $author_filter"
        );
        $this->db->execute(["%$values[0]%"]);
        return $this->db->getResult();
    }

    /**
     * Get ordred books
     * @param string $userTable 
     * @param string $userOrderTable
     * @param string $filter isbn|category|title|author
     * @param array $values 
     * @return array
     * 
     */

    public function getOrdredBooks($userTable,$userOrderTable,$filter = null,$value){
        // user id
        $id = $userTable.'_id';
        // attributes
        $attrs = "o.copy_id as id, c.ISBN as isbn, b.title, u.last_name as fname, u.first_name as lname, o.order_date as date, a.fullname";
        
        if(is_null($filter)){
            $query = "SELECT $attrs
                FROM $userTable as u
                INNER JOIN $userOrderTable as o ON o.$id = u.$id AND date_prise = '0' 
                INNER JOIN `copy` as c ON c.copy_id = o.copy_id 
                INNER JOIN book as b ON b.ISBN = c.ISBN
                INNER JOIN ecrire as e ON e.ISBN = b.ISBN
                INNER JOIN author as a ON e.author_id = a.author_id";

            $this->db->prepareQuery($query);
            $this->db->execute();
        }else{

            // prepare filter
            $isbn_filter = $category_filter = $title_filter = $author_filter = $fname_filter = $lname_filter = ''; 
            switch ($filter) {
                case 'isbn':
                    $isbn_filter = "AND b.$filter LIKE ?";
                    break;
                case 'title':
                    $title_filter = "AND b.$filter LIKE ?";
                    break;
                case 'fullname':
                    $author_filter = "AND a.$filter LIKE ?";
                    break;
                
                case 'first_name':
                    $fname_filter = "AND u.$filter LIKE ?";
                    break;
                
                case 'last_name':
                    $lname_filter = "AND u.$filter LIKE ?";
                    break;    
                
                default:
                    $isbn_filter = $category_filter = $title_filter = $author_filter = ''; 
                    break;
            }

            // prepare query
            $query = "SELECT $attrs
                FROM $userTable as u 
                INNER JOIN $userOrderTable as o ON o.$id = u.$id AND date_prise = '0' $fname_filter $lname_filter
                INNER JOIN `copy` as c ON c.copy_id = o.copy_id 
                INNER JOIN book as b ON b.ISBN = c.ISBN $isbn_filter $title_filter
                INNER JOIN ecrire as e ON e.ISBN = b.ISBN
                INNER JOIN author as a ON e.author_id = a.author_id $author_filter";

            $this->db->prepareQuery($query);
            
            // execute query
            $this->db->execute(["%$value%"]);
        }
        return $this->db->getResult();
    }

    /**
     * Get all ordred books 
     * @param string $filter : get ordred books based on this filter
     * @param string $value
     * 
     */

     public function getAllOrdredBooks($filter,$value){
         $orders = [];
         
         $teacherOrders = $this->getOrdredBooks('teacher','tea_order',$filter,$value);
         $orders = array_merge($orders,$teacherOrders);
        // $studentOrders = $this->getOrdredBooks('student','std_order',$filter = null,$values);
        // $orders = array_merge($orders,$studentOrders);
        $employee = $this->getOrdredBooks('employe','emp_order',$filter,$value);
        $orders = array_merge($orders,$employee);

         return $orders;
     }

}