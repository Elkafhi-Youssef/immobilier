<?php

/**
 * Core class
 */
class Core{

  private $url;
  protected $currentController = 'home';
  protected $currentMethod = 'index';
  protected $params = [];

  function __construct(){
    echo "-> Core class intantiated...<br>";
    $url = $this->getRequestedUrl();

    // Check for the requested controller if exists
    if (file_exists(APPLICATION_PATH.DS.'controllers'.DS.ucwords($url[0]).'.php')) {
      $this->currentController = ucwords($url[0]);
      // Require the controller
      require_once APPLICATION_PATH.DS.'controllers'.DS.$this->currentController.'.php';
      // Instantiate the current controller
      $this->currentController = new $this->currentController;
      // Shift value with the index 0
      array_shift($url);

      // Get the requested method if exist
      if(isset($url[0])) $this->currentMethod = $url[0];
      array_shift($url);
      if (method_exists($this->currentController,$this->currentMethod)) {
          // Get params
          $this->params = $url;
          // Call the requested method with the appropriate values
          call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
      }
    }else {
      die("Err : requested file ($url[0]) does not exist");
    }




  }

  // get the url
  public function getRequestedUrl(){
    return isset($_SERVER['PATH_INFO']) ? explode('/',trim($_SERVER['PATH_INFO'],'/')) : ['home','index'];
  }

}