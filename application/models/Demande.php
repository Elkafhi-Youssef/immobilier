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

   //   function get all demandes 
 

    public function getdemandes()
   {
      // d.id_demande, c.nom_prenom ,i.type_immobilier, d.date_visite,d.temps_visite  
     $this->db->prepareQuery('SELECT d.id_demande,i.id_immobilier,i.type_immobilier ,c.nom_prenom , d.date_visite,d.temps_visite FROM client c NATURAL JOIN demande d INNER JOIN immobilier i on d.id_immobilier=i.id_immobilier');
     $this->db->execute();
     return $this->db->getResult();
   }
}