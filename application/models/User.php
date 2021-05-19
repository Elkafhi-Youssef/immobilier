<?php



    class Users{

        private $db = null;
       
        public function __construct(){
            $this->db = new Db();
        }

        public function getUserByEmail($mail){
            $this->db->prepareQuery('SELECT * FROM students WHERE email LIKE ? ');
            $this->db->execute([$mail]);
            return $this->db->getNumRows();
        }

    }