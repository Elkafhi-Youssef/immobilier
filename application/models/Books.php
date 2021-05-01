<?php

class Books{
    private $db;

    function __construct(){
        $this->db = new Db();
    }

    public function getAllBooks(){
        $this->db->prepareQuery('SELECT * FROM books');
        $this->db->bindValues();
        return $this->db->getResult();
    }

    public function getLimitBooks($limit = null){
        $this->db->prepareQuery('SELECT * FROM books LIMIT ?');
        $this->db->bindValues(['',$limit]);
        return $this->db->getResult();
    }
}