<?php 
   // configuracion acceso a la BD
   define('DB_HOST','localhost');
   define('DB_USER','root');
   define('DB_PASSWORD','');
   define('DB_NAME','cashflow');

   // Ruta de la aplicación
   define('RUTA_APP', dirname(dirname(__FILE__)));
   // Ruta url

   define('RUTA_URL','http://localhost/my_cashflow');

   // Rutas que se usan para guardar imágenes
   define('RUTA_AVATAR','/my_cashflow/public/img/avatar/');
   define('NOMBRESITIO','My Cashflow System');
?>