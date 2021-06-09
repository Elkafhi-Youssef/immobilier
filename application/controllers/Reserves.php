<?php


    class Reserves extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            
        }
        //  function index call of all books
        public function index(){
            $this->loadView('users'.DS.'home_user',[]);

        }
    }