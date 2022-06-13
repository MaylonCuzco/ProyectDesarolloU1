<?php
session_start();
if (isset($_SESSION["usuario"])){

$usuario=$_SESSION["usuario"];
}    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloEstrenos.css"> 
    <script src="JavaScript/sliderJS.js"></script>
    <script src="JavaScript/footerJS.js"></script>
    <script src="JavaScript/slice.js"></script>
    <title>PlayBBEM-Próximos Estrenos</title>
</head>
<body>
    <ul class="menu">
        <li><a href="catalogo.php">Estrenos </a></li>
        <li><a href="Proximos.php">Próximos Estrenos</a></li>
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

    <slider-prox></slider-prox>
    
    <bbem-slice-comsoon></bbem-slice-comsoon>
    
    <footer-grupo6></footer-grupo6>
</body> 

</html>
