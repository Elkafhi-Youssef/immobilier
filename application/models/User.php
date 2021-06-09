<?php



    class User{

        private $db = null;
       
        public function __construct(){
            $this->db = new Db();
        }


        public function loginUser( $email,$password){
            $this->db->prepareQuery("SELECT * FROM `client`  WHERE `email` = ? and `mot_de_pass`  = ?");
            $this->db->execute([$email,$password]);
            return ($this->db->getRow());
            
        }

    //    function for insert info about new client 
        public function register($tablename,$attrs ,$values ){
            return $this->db->insert($tablename,$attrs,$values);
        }





        /**
         * defineUser : 
         * @param string : email|id...
         * @return array|bool
         * 
         */

        public function defineUser($userLogin){
            if(preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $userLogin)){
                return ['client','id_client'];
             }elseif(preg_match("/^admin.[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/
            ", $userLogin)){
                $value = ltrim(ltrim($userLogin,'admin'),'.');
                return ['admin','email',$value];  
            }              
            return false;
        }
}