<?php
    // Conexion a la base de datos
    require_once 'conexion.php';
    require 'agregar.html';
    // Saber si se llama por post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Almacenar post en variables
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $genero = $_POST['genero'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
/*         $img = $_FILES['imagen']['name'];
/*         $folder = 'img'; 
        $imagen = addslashes(file_get_contents($img)); */

        // Verificar si se estan enviando todos los datos
        if (isset($nombre) && !empty(trim($nombre)) && isset($apellido) && !empty(trim($apellido)) && isset($cedula) && !empty(trim($cedula)) && isset($telefono) && !empty(trim($telefono)) && isset($direccion) && !empty(trim($direccion)) && isset($correo) && !empty(trim($correo))&& isset($genero) && !empty(trim($genero)) && isset($usuario) && !empty(trim($usuario))&& isset($contraseña) && !empty(trim($contraseña))/* && isset($imagen) && !empty(trim($imagen)) */) {
            // Generar la consulta
            $consulta = "INSERT INTO `cliente`( nombrecliente, apellidocliente, generocliente, cedulacliente, telefonocliente, direccioncliente, correo_ecliente, nombreusuario, clavecliente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            // Preparar la insercion
            if ($stmt = $conn -> prepare($consulta)) {
                $stmt -> bind_param('sssssssss', $nombre, $apellido, $genero,$cedula, $telefono, $direccion, $correo,  $usuario, $contraseña/* , $imagen */);
                // Validar si se ejecuta el stmt
                if ($stmt -> execute()) {
                    header("location: login.php");
                    exit();
                } else {
                    echo "Error! Por favor intente más tarde.";
                }
                $stmt -> close();
            }
        }
        $conn -> close();
    }
    
?>
