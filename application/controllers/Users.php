<?php



class Users extends Controller{

        public function __construct(){
            // load & instantiate students model
            $this->setModelInstance('user');
        }

        public function index(){
            $this->loadView('admin'.DS.'users'.DS.'users',[]);
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
                                        $_SESSION['user_name'] = $dt['email'];
                                        $this->startSession();
                                        $this->redirect(URLROOT.'/Books/getbooks');
                                        
                                             
                                    } else {
                                        //password incorrect
                                        $data['id_user_err'] = 'password or username incorrect';
                                        $data['password_err'] = 'password or username incorrect';
                                        $this->loadView('users'.DS.'home'.DS.'login_user',$data);
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