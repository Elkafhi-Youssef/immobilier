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
        public function addbook($params = []){

            // alert for form submission
            $alert = [
                'err' => false,
                'msg' => '',
                'class-name' => ''
            ];
            
            // load view 
            //$this->loadView('books'.DS.'books_addbook',[]);
            
            // Check if there is submission
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // fliter data
                $filtredPost = !is_null($_POST['isbn']) ? filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING) : [];
                $bookInfo = [
                    $filtredPost['isbn'],
                    $filtredPost['title'],
                    $filtredPost['year'],
                    $filtredPost['author'],
                    $filtredPost['category'],
                    $filtredPost['nbrOfCopies']
                ];
               
                // 
                if($this->modelInstance->rowExist('book','ISBN',$bookInfo[0])){
                    if ($this->modelInstance->addCopy([$bookInfo[5],$bookInfo[0]])) $alert['err'] = false;
                    else $alert['err'] = true;
                }else{
                    
                    if ($this->modelInstance->addBook($bookInfo)) $alert['err'] = false;
                    else $alert['err'] = true;
                    
                    $this->modelInstance->addAuthor($bookInfo[3],$bookInfo[0]);
                    $this->modelInstance->addCattegory($bookInfo[4],$bookInfo[0]);
                }

                // 
                if ($alert['err']){
                    $alert = [
                        'err' => true,
                        'msg' => 'Oops somthing went wrong!!',
                        'class-name' => 'alert alert-danger'
                    ];}
                else{ 
                    $alert = [
                        'err' => false,
                        'msg' => 'Operation done successfully!',
                        'class-name' => 'alert alert-success'
                    ];}                       
                // Reload view with alert 
                $this->loadView('admin'.DS.'books'.DS.'books_addbook',$alert);
                unset($_POST);
                unset($bookInfo);
            }else  $this->loadView('admin'.DS.'books'.DS.'books_addbook',[]);
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

      
           
           
        

        
    

       
       

       
        




         
    }
