<?php


    class Rendez extends Controller{


        public function __construct(){
            // load & instantiate rendez model
            $this->setModelInstance('rendez');
        }

        public function index()
        {
            $this->loadView('admin'.DS.'rendez'.DS.'rendez',[]);
        }
    }