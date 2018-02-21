<?php
/*Datos de conexion a la base de datos*/

if ( ($_SERVER['SERVER_NAME'] == "localhost") OR ($_SERVER['SERVER_NAME'] =="127.0.0.1") ){

   //Servidor de Desarrollo
   define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
   define('DB_USER', 'root');//Usuario de tu base de datos
   define('DB_PASS', '');//Contraseña del usuario de la base de datos
   define('DB_NAME', 'aprendma_inventario');//Nombre de la base de datos

}elseif( ($_SERVER['SERVER_NAME'] == "aprendemas.mx") ){

   //Servidor de Desarrollo On Line
   define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
   define('DB_USER', 'aprendma_invent');//Usuario de tu base de datos
   define('DB_PASS', 'B@x}7;Fo4LIx');//Contraseña del usuario de la base de datos
   define('DB_NAME', 'aprendma_inventario');//Nombre de la base de datos

}elseif( ($_SERVER['SERVER_NAME'] == "sistema.administrativo.blackexperiment.com") OR ($_SERVER['SERVER_NAME'] == "blackexperiment.com") ){

   //Servidor de Desarrollo On Line
   define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
   define('DB_USER', 'kowalick_invent');//Usuario de tu base de datos
   define('DB_PASS', 'pOC-;C)#}%Pm');//Contraseña del usuario de la base de datos
   define('DB_NAME', 'kowalick_inventario');//Nombre de la base de datos

}