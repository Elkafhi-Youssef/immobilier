<?php

use function PHPSTORM_META\type;

class Users extends Controller{

        public function __construct(){
            // load & instantiate students model
            $this->setModelInstance('user');
        }

        public function index(){
            $this->loadView('users'.DS.'users',[]);

        }

        /**
         * Get all users from a specified table
         * 
         * @param string $table : table to get users from
         * @return void
         * 
         */
        public function loadUsers($table = 'student'){
            
            $users = $this->modelInstance->getAllUsers($table);

            // Prepare for an ajax request
            $this->jsonPrepare($users);
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
        public function userHome(){
            $this->loadView('users'.DS.'home'.DS.'home_user',[]);
            
        }
        public function commandUser(){


        }
        
        
 
        public function logInUser(){
           
            if (($_SERVER['REQUEST_METHOD'] == 'POST') ){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'email_err' => '',  
                'password_err' => ''
            ]; 
            if (empty($data['email']) &&(empty($data['password']))) {
                $data['email_err'] = 'Please fill your email';
                $data['password_err'] = 'Please fill your password';
            }
            else if(empty($data['email'])){
                $data['email_err'] = 'Please fill your email';
            }
            else if (empty($data['password'])){
                $data['password_err'] = 'Please fill your password';
            }
            else if (empty($data['email_err']) && empty($data['password_err'])) {

                    if(preg_match("/^[a-z][0-9]/i", $data['email'])){
                        $dt = $this->modelInstance->loginUser('student','student_id',$data['email'],$data['password']);
                                    if ($dt) {
                                        
                                        $_SESSION['user_id'] = $dt['student_id'];
                                        $_SESSION['user_name'] = $dt['email'];
                                        $this->loadView('users'.DS.'home'.DS.'home_user',[]);
                    
                                        
                                    } else {
                                        //password incorrect
                                        
                                        $data['email_err'] = 'password or email incorrect';
                                        $data['password_err'] = 'password or email incorrect';
                                        $this->loadView('users'.DS.'home'.DS.'login_user',$data);
                                    }
                                    
                    }
                     else if(preg_match("/^[A-Z][.][A-Z]/i", $data['email'])){
                         $dt = $this->modelInstance->loginUser('teacher','teacher_id',$data['email'],$data['password']);    
                                if($dt){
                                        $_SESSION['user_id'] = $dt['teacher_id'];
                                        $_SESSION['user_name'] = $dt['email'];
                                        $this->loadView('users'.DS.'home'.DS.'home_user',[]);
                                }else {
                                    //password incorrect
                                    $data['email_err'] = 'password or email incorrect';
                                    $data['password_err'] = 'password or email incorrect';

                                    $this->loadView('users'.DS.'home'.DS.'login_user',$data);
                                }
                        }
                        $this->loadView('users'.DS.'home'.DS.'login_user',$data); 
                    }$this->loadView('users'.DS.'home'.DS.'login_user',$data); 
        }else{
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',  
                'password_err' => ''
            ]; 

            $this->loadView('users'.DS.'home'.DS.'login_user',$data);
        }
    }        
}