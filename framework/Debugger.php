
<?php


/**
 *
 */
class Debugger
{

  function __construct()
  {
    // code...
  }

  public static function printas($val,$as = 0){
    switch ($as) {
      case '0':
        echo $val;
        break;
        case '1':
        echo '<pre>';
          print_r($val);
          echo '</pre>';
          break;
          case '2':
          echo '<pre>';
            var_dump($val);
            echo '</pre>';
            break;

      default:
        die('unseported format !');
        break;
    }
  }
}
