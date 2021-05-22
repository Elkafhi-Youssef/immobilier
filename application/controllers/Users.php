<?php



    class Users extends Controller{


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
            // load & instantiate students model
            $this->setModelInstance('user');
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
            // Load and instatiate the user model
            $this->setModelInstance('user');

            // Convert params to array
            $params = explode('/',trim($params,'/'));
            $books = $this->modelInstance->getUsersByFilter($table,$filterBy,$params);
            
            // Prepare for an ajax request
            $this->jsonPrepare($books);
        }
        

    }