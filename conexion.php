<?php
//Datos
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','grupo6_playbbem');

//creacion de la conexion a la base de datos con mysqli
$conn = new mysqli(SERVERNAME,USERNAME,PASSWORD,DBNAME);

//Cotrolar la conexion
if($conn->connect_error){
    die('Conexion fallida'.$conn -> connect_error);
}else{
    //echo('Conexion exitosa');
}
?>