<?php



    class Rendez{

        private $db = null;
       
        public function __construct(){
            $this->db = new Db();
        }
    }