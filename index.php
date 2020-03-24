<?php

require_once  __DIR__ ."\autoload.php";
require_once  __DIR__ ."\dev.php";

use app\core\Route;


session_start();
  


 
$router = new Route();
$router->run();