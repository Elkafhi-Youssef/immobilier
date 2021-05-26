<?php



    class User{

        private $db = null;
       
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
        public function getAllUsers($table){
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

        public function loginUser( $table,$userid,$email,$password){
            $this->db->prepareQuery("SELECT * FROM $table  WHERE $userid LIKE ? and passwd LIKE ?");
            $this->db->execute([$email,$password]);
            return ($this->db->getNumRows() >0 );
            
        }
        // do command 
        public function addComand($tablename,$attrs ,$values ){
            return $this->db->insert($tablename,$attrs,$values);
        }

        // test witch tablbe use in login 

         public function testReg($idUser)
        {
            if(preg_match("/^[a-z][0-9]/i", $idUser)){
                return 'std';
            }elseif(preg_match("/^[A-Z][.][A-Z]/i", $idUser)){
                return 2;
            }elseif(preg_match("/servece[.][A-Z]/i", $idUser)){return 3;}
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