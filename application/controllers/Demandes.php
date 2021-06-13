<?php


    class Demandes extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            $this->setModelInstance('demande');
        }
        //  function index call of all books
        public function index(){
            $this->loadView('admin'.DS.'demande'.DS.'demande',[]);

        }
       
        // function get data of visit (date ,time) 
        public function adddemande()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'date'=> $_POST['date'],
                    'time' => $_POST['time'],
                    'user_id' => $_POST['user_id'],
                    'id_immobilier' => $_POST['id_immobilier'],                 
                ];
                $exist = $this->modelInstance->demandExist($data['user_id'],$data['id_immobilier']);
                if($exist){
                    $_SESSION['status'] = 'votre demande déja existe';
                   $this->redirect(URLROOT.'/Immobiliers/getAllImmob');
                }else{
                    $dt = $this->modelInstance->addDemande('demande',['date_visite','temps_visite','id_client','id_immobilier'],[$data['date'],$data['time'],$data['user_id'],$data['id_immobilier']]);
                    if($dt){
                        $_SESSION['status'] = 'votre demande  passe bien';
                        $this->redirect(URLROOT.'/Immobiliers/getAllImmob');
                    }else{
                        $_SESSION['status'] = 'votre demande ne passe pas';
                        $this->redirect(URLROOT.'/Immobiliers/getAllImmob');
                    }
                }
            }

        }
        // function use for get all demandes 
        public function getAllDemandes()
        {
           $data = $this->modelInstance->getdemandes();
        //    print_r($data);
        //    $this->loadView('test',[]);
           if($data){
              $this->jsonPrepare($data);

           }
        }

      
           
           
        

        
    

       
       

       
        




         
    }
