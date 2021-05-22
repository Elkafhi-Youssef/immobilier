<?php


class Book{
     
    private $db;
    public function __construct(){
        $this->db = new Db();
    }

    // add book
    public function addBook($params){
        // prepare query
        $this->db->prepareQuery("INSERT INTO book(isbn,title,edition_year) VALUES(?,?,?)");
        if ($this->db->execute(["$params[0]","$params[1]","$params[2]"])) {
            if ($this->addCopy([$params[5],$params[0]])) return true;
        }
        return false;
    }

    // add copy
    public function addCopy($val){
        // prepare query
        $this->db->prepareQuery("INSERT INTO copy(copy_id,isbn) VALUES(null,?)");
        // counter : counts numbre of inserted books
        $inserted = 0;
        for ($i = 0 ;$i < $val[0];$i++) { 
           if ($this->db->execute(["$val[1]"])) {
                $inserted++;
            }
        }
        return ($inserted == $val[0]);
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