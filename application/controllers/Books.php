<?php


    class Books extends Controller{


        public function __construct(){

        }

        public function index(){
            $this->loadView('books'.DS.'books_addbook',[]);
        }

        public function addbook(){
            echo 'add book - ';
        }

        

    }