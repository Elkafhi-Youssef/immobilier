<?php


    class Rendezs extends Controller{


        public function __construct(){
            // load & instantiate rendez model
            $this->setModelInstance('rendez');
        }

        public function index()
        {
            $this->loadView('admin'.DS.'rendez'.DS.'render',[]);
        }


        // function for add randez vous 
        public function addRendez($id)
        {
            // $data = $this->modelInstance->getDemandById($id);
            $dt = $this->modelInstance->rendezExist($id);      
           if ($dt !=1){
              $data =  $this->modelInstance->addRendez($id);
              if($data){
                  $_SESSION['addrendez'] = 'le randez-vous bien ajouter';
                  
                //   $this->redirect(URLROOT . '/Rendezs');
                $this->loadView('admin'.DS.'rendez'.DS.'render',[]);
              }
           }else{
               $_SESSION['addrendez'] = 'le randez-vous déja existe';
               $this->redirect(URLROOT . '/Rendezs/index');
           }
        }


        public function getAllRendez()
        {
           
            $data = $this->modelInstance->getAllRendez();
            if($data){
                $this->jsonPrepare($data);
  
             }
          

        }

        public function deleteRendez($id)
        {
            $dt = $this->modelInstance->deleteRendez($id);
            if(isset($dt) ){
                $_SESSION['delete'] = 'le randez-vous est suprémmé';
                $this->loadView('admin'.DS.'rendez'.DS.'render',[]);
            }

            
            
        }


    }