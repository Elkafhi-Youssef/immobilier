<?php



    class Immobilier{

        private $db = null;
       
        public function __construct(){
            $this->db = new Db();
        }


    // get one immobilier exactly by id_immobilier
        public function getImmobilier($id)
        {
           $this->db->prepareQuery("SELECT * FROM `immobilier`WHERE id_immobilier = ? ");
           $this->db->execute([$id]);
           return $this->db->getRow();
        }


         // get all immobilier
         public function getImmobiliers()
         {
            $this->db->prepareQuery("SELECT * FROM `immobilier` ");
            $this->db->execute();
            return $this->db->getResult();
         }



        //  function for adding immobilier 
        public function addImmobilier($tablename,$attrs ,$values ){
            return $this->db->insert($tablename,$attrs,$values);
        }


        // function for edit immobolier 
        public function editimmobilier($description ,$adresse,$type_immobilier,$type_operation,$prix,$surface,$img, $id_immobilier){
            $this->db->prepareQuery(" UPDATE `immobilier` SET `description` = ? ,
             `adresse` = ? , `type_immobilier` = ?
            ,`type_operation` = ?, `prix` = ? ,
            `surface` = ?, `img` = ? WHERE `immobilier`.`id_immobilier` = ? ");
           $info = $this->db->execute([$description ,$adresse,$type_immobilier,$type_operation,$prix,$surface,$img, $id_immobilier]);
           if ($info){
               return true;
           }else{
            return false;
           }
        }

        // funtion delete Immobilier 

        public function deleteimmobilier($id)
        {
           $this->db->prepareQuery("DELETE FROM immobilier WHERE id_immobilier = ?");
           $this->db->execute([$id]);
        }
}