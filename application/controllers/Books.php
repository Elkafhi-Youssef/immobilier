<?php


    class Books extends Controller{


        public function __construct(){

        }
        //  function index call of all books
        public function index(){
            $this->loadView('books'.DS.'books_home',[]);

        }

        public function addbook(){
            $this->loadView('books'.DS.'books_addbook',[]);
        }

    }