<?php
require_once 'conexion.php';

session_start();

<<<<<<< HEAD
if( isset($_SESSION["usuario"])){

    $usuario= $_SESSION["usuario"];
}
=======
>>>>>>> 989621c (cambios aceptados)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloCatalogo.css">
    <script src="JavaScript/slice.js"></script>
    <script src="JavaScript/sliderJS.js"></script>
    <script src="JavaScript/footerJS.js"></script>
    <title>PlayBBEM</title>
</head>

<body>
<ul class="menu">
    <li><a href="catalogo.php">Estrenos</li></a>
    <li><a href="Proximos.php">Próximos Estrenos</li></a>
    <!-- <li><a href="Factura.php">Factura</a></li>
    <li><a href="Cuenta.php">Cuenta</a></li> -->
    <!-- <li><a href="quienes.html">Quienes Somos</li></a> -->
    <?php 
        if (isset($usuario)){
        echo "<li><a href='usuario/cerrarsesion.php?usu=". "" ."'>Cerrar Sesión</a></li>".
        "<li> <p>".$usuario."</p> </li>";
        }else{
        echo "<li>"."<a href='login.php'>Iniciar Sesión</a> </li>";
        }
    
      
     
        
        ?>
</ul>

<slider-catal></slider-catal>

<bbem-slice-catal></bbem-slice-catal>

<footer-grupo6></footer-grupo6>
</body>

</html>