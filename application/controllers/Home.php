<?php

    /**
     * Class : home
     */
    class Home extends Controller{

      function __construct(){
        echo "-> Home controller instantiated...<br>";
      }

      public function index(){
        #if ($name)
        #echo "<h2>Hi $name! Welcome to GBESTS  framework - </h2>";
        #else echo "<h2>Welcome to GBESTS  framework - </h2>";
        $this->loadView('home');
      }
    }
