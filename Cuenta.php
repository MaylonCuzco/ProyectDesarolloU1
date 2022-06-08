<?php
require_once 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer datos</title>
    <link rel="stylesheet" href="css/leerS.css">
    <style>
        label{
            font-weight:600;
        }
    </style>
</head>
<body>
    <h1 class="titulo">Datos del cliente</h1>
    <div id="muestra">
        <div>
            <label for="">Nombre :</label>
            <p><?php echo $nombre." ".$apellido ?></p>
        </div>
        <div>
            <label for="">Cedula: </label>
            <p><?php echo $cedula ?></p>
        </div>
        <div>
            <label> Direccion</label>
            <p><?php echo $direccion;?></p>
        </div>
        <div>
            <label> Teléfono</label>
            <p><?php echo $telefono;?></p>
        </div>
        <div>
            <label for="">Usuario: </label>
            <p><?php echo $usuario ?></p>
        </div>
        <div>
            <label for="">Correo: </label>
            <p><?php echo $correo ?></p>
        </div>

    </div>
</body>
</html>