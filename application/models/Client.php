<?php

    class Client{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
        public function getAllClient($table){
            $this->db->prepareQuery("SELECT * FROM $table");
            $this->db->execute();
            return $this->db->getResult(); 
        }

        // filtered users
        public function getUsersByFilter($table,$filter,$values){
            $this->db->prepareQuery("SELECT * FROM $table WHERE $filter LIKE ?");
            $this->db->execute(["%$values[0]%"]);
            return $this->db->getResult();
        }

        
        // do command 
        public function addComand($tablename,$attrs ,$values ){
            return $this->db->insert($tablename,$attrs,$values);
        }

        //    function for insert info about new client 
        public function register($tablename,$attrs ,$values ){
            return $this->db->insert($tablename,$attrs,$values);
        }

        // start session 
        // public function startSession($sessionUser)
        // {
        //     session_start();
        //     if (isset($startSession)){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // }
    }