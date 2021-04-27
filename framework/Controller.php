<?php

  /**
   * Controller class : base controller
   */
  class Controller{

    protected $modelInstance;
    function __construct(){

    }
    
    /**
     * Instantiate model
     * 
     * @param string $model
     * @return void
     * 
     */

    public function getModelInstance($model){
      // --
      require_once APPLICATION_PATH.DS.'models'.DS.$model.'.php';
      $this->modelInstance = new $model();
      // --
    }

    /**
     * Load view
     * 
     * @param string $viewName
     * @param array $data : data comes from db or submted by user
     * 
     */

    public function loadView($viewName,$data = []){
      // --
      require_once APPLICATION_PATH.DS.'views'.DS.$viewName.'.php';
    }
  }
