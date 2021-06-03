<?php



    class Client{

        private $db = null;
       
        public function __construct(){
            $this->db = new Db();
        }
    }