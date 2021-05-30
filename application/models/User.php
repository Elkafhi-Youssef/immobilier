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

        /**
         * defineUser : 
         * @param string : email|id...
         * @return array|bool
         * 
         */

         public function defineUser($userLogin){
            if(preg_match("/^[a-z][0-9]/i", $userLogin)){
                return ['student','student_id',$userLogin];
            } 
            elseif(preg_match("/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.uca.[a-z]{2,3})$/", $userLogin)){
                return ['teacher','email',$userLogin];
            }elseif(preg_match("/^s.[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/
            ", $userLogin)){
               
                $value = ltrim(ltrim(strtolower($userLogin),'s'),'.');
                return ['employe','email',$value]; 
             }elseif(preg_match("/^admin.[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/
            ", $userLogin)){
                $value = ltrim(ltrim($userLogin,'admin'),'.');
                return ['admin','email',$value];  
            }              
            return false;
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