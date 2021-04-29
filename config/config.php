<?php

  /* ========================================
   * this file contains all the configuration
   * needed to start the application
   * =======================================*/

   // ROOT
   define('ROOT', getcwd());
   // Application path
   define('APPLICATION_PATH', ROOT.DS.'application');
   // Config path
   define('CONFIG_PATH', ROOT.DS.'config');
   // Framework path
   define('FRAMEWK_PATH', ROOT.DS.'framework');
   // Public path
   define('PUBLIC_PATH', ROOT.DS.'public');

   // Database params
   define('DB_NAME','test');
   define('DB_USER','root');
   define('DB_HOST','127.0.0.1');
   define('DB_PASSWD','');