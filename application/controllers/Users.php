<?php



    class Users extends Controller{


        public function index(){
            $this->loadView('users'.DS.'users_getUsers',[]);

        }

    }