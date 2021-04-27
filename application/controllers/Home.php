<?php

    /**
     * Class : home
     */
    class Home {

      function __construct(){
        echo "-> Home controller instantiated...<br>";
      }

      public function index($name = null){
        if ($name)
        echo "<h2>Hi $name! Welcome to GBESTS  framework - </h2>";
        else echo "<h2>Welcome to GBESTS  framework - </h2>";
      }
    }
