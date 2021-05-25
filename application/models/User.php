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
        public function addComand($iduser,$idcopy){
            $this->db->prepareQuery("INSERT INTO `std_order`(`order_date`, `date_prise`, `student_id`, `copy_id`) VALUES ('2021/05/25','','2021/05/25','5','6') ");
            $this->db->execute(["%$values[0]%"]);
            return $this->db->getResult();



        }
    }