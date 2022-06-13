<?php
    // Conexion a la base de datos
    require_once 'conexion.php';
    require 'agregarpel.html';
    // Saber si se llama por post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Almacenar post en variables
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $img = $_FILES['imagenusuario']['name'];
        $folder = 'img';
        $imagen = file_get_contents($folder.'/'.$img);

        // Verificar si se estan enviando todos los datos
        if (isset($nombre) && !empty(trim($nombre)) && isset($precio) && !empty(trim($precio))&& isset($imagen) && !empty(trim($imagen))) {
            // Generar la consulta
            $consulta = "INSERT INTO `pelicula`( titulopel, preciopel, imagenusuario) VALUES (?, ?, ?)";
            // Preparar la insercion
            if ($stmt = $conn -> prepare($consulta)) {
                $stmt -> bind_param('sss', $nombre, $precio, $imagen);
                // Validar si se ejecuta el stmt
                if ($stmt -> execute()) {
                    header("location: adminpanel.php");
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