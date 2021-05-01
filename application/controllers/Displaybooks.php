<?php


class Displaybooks extends Controller{

    function __construct(){
        echo "-> Displaybooks class instantiated...<br>";
    }

    public function index($rows = null){

        $this->setModelInstance('books');

        if($rows === 'all'){
            $this->books = $this->modelInstance->getAllBooks();
            $this->loadView('books/display',$this->books);
        }else{
            $this->books = $this->modelInstance->getLimitBooks($rows);
            $this->loadView('books/display',$this->books);
        }
    }
}