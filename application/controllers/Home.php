<?php

class Home extends Controller{
    

    public function __construct(){

    }

    // index : default method 
    public function index(){
        $this->loadView('books'.DS.'books_home',[]);
    }

}