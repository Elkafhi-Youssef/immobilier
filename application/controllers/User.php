<?php



    class User extends Controller{


        public function login(){
            $data = [
                'err' => false,
            ];
            

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
                $mail = $_POST['email'];
                $this->setModelInstance('users');

                if ($this->modelInstance->getUserByEmail($mail) == 1) {
                    $data = [
                        'mail' => $mail, 
                    ];
                    $this->loadView('users/welcome',$data);
                }else{
                    $data = [
                        'err' => 'Error login',
                    ];
                    $this->loadView('users/user.login',$data);
                }

            }else{
                $this->loadView('users/user.login',$data);
            }
        }

    }