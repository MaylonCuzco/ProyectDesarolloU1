<?php

include("../conexion.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM `streaming.cliente` WHERE idcliente  = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

 
  header('Location: adminpanel.php');
}

?>