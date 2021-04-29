

<?php

  // Define the directory deparator
  define('DS', DIRECTORY_SEPARATOR);
  require_once './config/config.php';

  // Autoload core classes
  spl_autoload_register(function($className){
    try {
      require_once FRAMEWK_PATH.DS.$className.'.php';
    } catch (Exception $e) {
      die($e->getMessage());
    }
  });

  new Core();
  $bd = new Db();
  $bd->prepareQuery("select * from books where category like ? and author like ?");
  $bd->bindValues(['','programming','g.ayoub']);
  $res = $bd->getResult(PDO::FETCH_ASSOC);
  echo '<pre>';
  print_r($res);

