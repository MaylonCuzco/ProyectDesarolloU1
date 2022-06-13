<?php
require_once 'conexion.php';

session_start();
$usuario= $_SESSION["usuario"];

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
    <li><a href="catalogo.php">Estrenos</a></li>
    <li><a href="Proximos.php">Próximos Estrenos</a></li>
    <!-- <li><a href="Factura.php">Factura</a></li>
    <li><a href="Cuenta.php">Cuenta</a></li> -->
    <!-- <li><a href="quienes.html">Quienes Somos</li></a> -->
    <li><a href="catalogo.html">Cerrar Sesión</a></li>
    <li>
        <p><?php echo $usuario ?></p>
    </li>
</ul>

<slider-catal></slider-catal>

<bbem-slice-catal></bbem-slice-catal>

<footer-grupo6></footer-grupo6>
</body>

</html>