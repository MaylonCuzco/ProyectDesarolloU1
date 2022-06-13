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
<<<<<<< HEAD
<<<<<<< HEAD
    <li><a href="catalogo.php">Estrenos</li></a>
<<<<<<< HEAD
    <li><a href="Proximos.php">Próximos Estrenos</li></a>
    <!-- <li><a href="Factura.php">Factura</a></li>
    <li><a href="Cuenta.php">Cuenta</a></li> -->
=======
    <li><a href="Proximos.html">Próximos Estrenos</li></a>
    <!-- <li><a href="Factura.php">Factura</a></li> -->
    <li><a href="Cuenta.php">Cuenta</a></li>
<<<<<<< HEAD
>>>>>>> cd0311c (se añade un nuevo archivo "Cuenta" en el cual se podra visualizar la informacion del usuario.)
=======
=======
=======
>>>>>>> a5faaaf (actua)
    <li><a href="catalogo.php">Estrenos</a></li>
    <li><a href="Proximos.php">Próximos Estrenos</a></li>
    <!-- <li><a href="Factura.php">Factura</a></li>
    <li><a href="Cuenta.php">Cuenta</a></li> -->
<<<<<<< HEAD
>>>>>>> 4d784a1 (Se rectica ubicación de enlaces)
>>>>>>> 3b4c89e (Se fusiona los cambios)
=======
>>>>>>> a5faaaf (actua)
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