<?php



class Clients extends Controller{

        public function __construct(){
            // load & instantiate students model
            $this->setModelInstance('Client');
        }

        public function index(){
            $this->loadView('admin'.DS.'clients'.DS.'clients',[]);
           
        }

        // add client from dmin 

        public function register()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'CIN'=> $_POST['CIN'],
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'tele' => $_POST['tele'],
                    'adresse'=> $_POST['adresse'],
                    'password' => $_POST['password'],
                    'CIN_err' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'tele_err' => '',
                    'adresse_err' => '',
                    'password_err' => '',
                ];

                echo  $_POST['CIN'].$_POST['name'].$_POST['email'].$_POST['tele'].$_POST['adresse'],$_POST['password'];
                if (empty($data['CIN'])) $data['CIN_err'] = 'Please fill your CIN';
                if (empty($data['name'])) $data['name_err'] = 'Please fill your name';
                if (empty($data['email'])) $data['email_err'] = 'Please fill your email';
                if (empty($data['tele'])) $data['tele_err'] = 'Please fill your telehone';
                if (empty($data['adresse'])) $data['adresse_err'] = 'Please fill your adresse';               
                if (empty($data['password'])) $data['password_err'] = 'Please fill your password';
                // if ($data['password'] !== $data['confirm-password']) $data['confirm-password_err'] = "passwords don't match";
                // if (empty($data['confirm-password'])) $data['confirm-password_err'] = 'Please fill your confirm password';
                //check if email exist
                // if ($this->userModel->getUserByEmail($data['email'])) {
                //     $data['email_err'] = 'Email already taken';
                // }
    
                if (empty($data['CIN_err']) && empty($data['name_err']) && empty($data['email_err']) &&
                    empty($data['tele_err']) && empty($data['adresse_err'])&&empty($data['password_err']) ){
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                   

                    $dt = $this->modelInstance->register('client',['CIN_client','nom_prenom','email','telephone','adresse','mot_de_pass'],[$data['CIN'],$data['name'],$data['email'],$data['tele'],$data['adresse'],
                    $data['password']]);
                    if ($dt)
                        {
                        $this->redirect(URLROOT.'/clients/index'); 
                        
                    } else {die("something went wrong!!");}
                        
                } else {
                    //user register faild
                    $this->loadView('admin'.DS.'clients'.DS.'addclient', $data);
                }
            }else {
    
                $data = [
                    'CIN'=> '',
                    'name' => '',
                    'email' => '',
                    'tele' => '',
                    'adresse'=> '',
                    'password' => '',
                    'CIN_err' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'tele_err' => '',
                    'adresse_err' => '',
                    'password_err' => '',
                ];
    
                //load the register
                $this->loadView('admin'.DS.'clients'.DS.'addclient', $data);
            }
        }
        /**
         * Get all users from a specified table
         * 
         * @param string $table : table to get users from
         * @return void
         * 
         */
        public function loadUsers($table = 'client'){
            
            $users = $this->modelInstance->getAllClient($table);
            // print_r($users);
            // $this->loadView('test',$users);
            // Prepare for an ajax request
            if($users){

                $this->jsonPrepare($users);
            }
        }


        /**
         * 
         * Get users from specified table with a specified filter
         * 
         * @param string $table : table to get users from
         * @param string $filterBy : id|first_name|last_name|...
         * @param array @params 
         * 
         */
        public function loadFiltredUsers($table,$filterBy = null,$params = []){

            // Convert params to array
            $params = explode('/',trim($params,'/'));
            $books = $this->modelInstance->getUsersByFilter($table,$filterBy,$params);  
            
            // Prepare for an ajax request
            $this->jsonPrepare($books);
        }
        // public function userHome(){
        //     $this->loadView('users'.DS.'home'.DS.'home_user',[]);
            
        // }




        // function addComand($tablename,$attrs ,$values ) 
        public function commandUser($id_user,$id_copy){
            $date_comand =date('Y-m-n');
            if($this->modelInstance->testReg($id_user) == 'std'){
            $add = $this->modelInstance->addComand('std_order',[`order_date`, `date_prise`, `student_id`, `copy_id`],[$date_comand,0000-00-00,'k130016842','1']);
            }elseif($this->modelInstance->testReg($id_user) == 2){
                $add = $this->modelInstance->addComand('tea_order',[`order_date`, `date_prise`, `teacher_id`, `copy_id`],[$date_comand,0000-00-00,'Y.Elkafhi','1']); 
            }elseif($this->modelInstance->testReg($id_user) == 3){
                $add = $this->modelInstance->addComand('emp_order',[`order_date`, `date_prise`, `emp_id`, `copy_id`],[$date_comand,0000-00-00,'servece.you','1']);
            }

            if($add){
                echo "succes";
            }
            else{
                echo "failed";
            }
        }
        
        
 
        public function login(){
           
            if (($_SERVER['REQUEST_METHOD'] == 'POST') ){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id_user' => $_POST['id_user'],
                'password' => $_POST['password'],
                'id_user_err' => '',  
                'password_err' => ''
            ]; 
             
            if (empty($data['id_user'])){$data['id_user_err'] = 'Please fill your username';} 
             if(empty($data['password'])){$data['password_err'] = 'Please fill your password';} 
             if (empty($data['id_user']) && empty($data['password'])){$data['id_user_err'] = 'Please fill your username and password';
                $data['password_err'] = 'Please fill your username and password'; }
             if (empty($data['id_user_err']) && empty($data['password_err'])) {
                $info = $this->modelInstance->defineUser($data['id_user']);
                    if($info != false){
                        $dt = $this->modelInstance->loginUser($info[0],$info[1],$info[2],$data['password']);
                                    if ($dt) {
                                         
                                        $_SESSION['user_id'] =$data['id_user'] ;
                                       
                                        $this->redirect(URLROOT.'/Books/getbooks');    
                                    } else {
                                        //password incorrect
                                        $data['id_user_err'] = 'password or username incorrect';
                                        $data['password_err'] = 'password or username incorrect';
                                        $this->loadView('users'.DS.'login_user',$data);
                                    }
                    } else{
                        $this->loadView('users'.DS.'login_user',$data);
                    }
                       
                    }else{
                        $this->loadView('users'.DS.'login_user',$data); 
                    }
        }else{
            $data = [
                'id_user' => '',
                'password' => '',
                'id_user_err' => '',  
                'password_err' => ''
            ]; 

            $this->loadView('users'.DS.'login_user',$data);
        }
    }        
}