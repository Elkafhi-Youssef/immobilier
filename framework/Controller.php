<?php

  /**
   * Controller class : base controller
   */
  class Controller{

    protected $modelInstance;
    function __construct(){

    }

    public function getModelInstance($model){
      // --
      require_once APPLICATION_PATH.DS.'models'.DS.$model.'.php';
      $this->modelInstance = new $model();
      // --
    }

    public function loadView($viewName,$data = []){
      // --
      require_once APPLICATION_PATH.DS.'views'.DS.$viewName.'.php';
    }
  }
