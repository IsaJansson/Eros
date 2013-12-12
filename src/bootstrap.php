<?php

/* exeption handler */
function myExceptionHandler($exception) {
  echo "Eros: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . 
  $exception->getTraceAsString(), "</pre>";
}

set_exception_handler('myExceptionHandler');
 

/* auto loader */
function myAutoloader($class) {
  $path = EROS_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');

function dump($a) {
  echo '<pre>' . print_r($a, 1) . '</pre>';
}