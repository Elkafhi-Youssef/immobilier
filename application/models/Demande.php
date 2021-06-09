<?php


class Demande{
     
    private $db;
    public function __construct(){
        $this->db = new Db();
    }

    // add demande
    public function addDemande($table,$attrs,$values){
       if ( $this->db->insert($table,$attrs,$values))return true ;
       else return false;
    }

  
   

    /**
     * Chek if demand exists
     * @param string $validuser 
     * @param string $validimmo
     * @return true|false
     */

     public function demandExist($validuser,$validimmo){
        $this->db->prepareQuery("SELECT * FROM demande WHERE id_client like ? AND id_immobilier like ? ");
        $this->db->execute([$validuser,$validimmo]);
        return ($this->db->getNumRows() == 1);
     }


}