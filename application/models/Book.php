<?php


class Book{
     
    private $db;
    public function __construct(){
        $this->db = new Db();
    }

    // add book
    public function addBook($params){
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
        $this->db->prepareQuery("SELECT * FROM `book`");
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
        $this->db->prepareQuery("SELECT * FROM `book` WHERE $filter LIKE ?");
        $this->db->execute(["%$values[0]%"]);
        return $this->db->getResult();
    }
}