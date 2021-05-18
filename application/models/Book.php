<?php


class Book{
     
    private $db;
    public function __construct(){
        $this->db = new Db();
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