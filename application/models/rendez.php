<?php



    class Rendez{

        private $db = null;
       
        public function __construct(){
            $this->db = new Db();
        }


        // function get Demande by id 
        // public function  getDemandById($id)
        // {
        //    $this->db->prepareQuery("SELECT d.id_demande,c.nom_prenom ,d.date_visite,d.temps_visite from demande d NATURAL JOIN client c where id_demande = ?");
        //    $this->db->execute([$id]);
        //    return $this->db->getRow();
        // }


        // function for add Rendez vous 

        public function addRendez($id)
        {
            $this->db->prepareQuery( "INSERT INTO `rendezvous`
             (`id_rendezvous`, `id_demande`) VALUES (null, ?)");
           return $this->db->execute([$id]);
            
            
            
        }
        /**
     * Chek if demand exists
     * @param string $validuser 
     * @param string $validimmo
     * @return true|false
     */

     public function rendezExist($idDemande){
        $this->db->prepareQuery("SELECT * FROM rendezvous WHERE id_demande like ?  ");
        $this->db->execute([$idDemande]);
        return ($this->db->getNumRows() == 1);
     }

        // function get all rendex 
        public function getAllRendez()
        {
            $this->db->prepareQuery("SELECT * ,id_rendezvous FROM `dic` NATURAL JOIN rendezvous");
            $this->db->execute();
                return $this->db->getResult();
        }
        
         // funtion delete randez-vous 

         public function deleteRendez($id)
         {
            $this->db->prepareQuery("DELETE FROM rendezvous WHERE id_rendezvous = ?");
           if($this->db->execute([$id])) {
               return true;
           }else{
            return false;
           }
         }
 }
       
    