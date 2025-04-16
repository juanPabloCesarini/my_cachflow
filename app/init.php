<?php
  // se cargan las librerías
  require_once 'config/config.php';

  //require_once "lib/Base.php";
  //require_once "lib/Controller.php";
  //require_once "lib/Core.php";

  // autoload php

  spl_autoload_register(function($nombreClase){
    require_once 'core/'.$nombreClase.'.php';
  });
  
?>