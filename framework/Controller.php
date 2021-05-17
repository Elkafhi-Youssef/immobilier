<?php

  /**
   * Controller class : base controller
   */
  class Controller{

    protected $modelInstance = null;
    function __construct(){

    }
    
    /**
     * Instantiate model
     * 
     * @param string $model
     * @return void
     * 
     */

    public function setModelInstance($model){
      require_once APPLICATION_PATH.DS.'models'.DS.ucwords($model).'.php';
      $this->modelInstance = new $model();
    }

    /**
     * Load view
     * 
     * @param string $viewName [almost a string like 'books/addbook' where books is a folder]
     * @param array $data : data comes from db
     * 
     */

    public function loadView($viewName,$data = []){
      // --
      require_once APPLICATION_PATH.DS.'views'.DS.$viewName.'.php';
    }

    /**
     * 
     * This method prepare data for ajax calls
     * @param array $data to be prepared
     * @return void
     * 
     */
    public function jsonPrepare($data){
      header("Access-Control-Allow-Origin: ".ORIGIN);
      header("Content-Type: application/json; charset=UTF-8");
      http_response_code(200);
      echo json_encode($data);
      exit;
    }
  }
