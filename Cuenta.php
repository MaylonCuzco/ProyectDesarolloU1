<?php
//Requerismos la conexion 
require_once 'conexion.php';
/* Validar si se envian los datos por el metodo get(URL) */
if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    /* Contruyo la contulata */
    $query='SELECT * FROM cliente WHERE idcliente=?';
    /* Preparar la sentencia */
    if($stmt=$conn->prepare($query)){
        $stmt->bind_param('i', $_GET['id']);
        /* ejecuto la sentencia */
        if($stmt->execute()){
            $result=$stmt->get_result();
            /* veo que si el numero de filas es igual a uno */
            if($result->num_rows==1){
                /* obtenemos todos lo datos que estamo consultando */
                $row=$result->fetch_array
                    (MYSQLI_ASSOC);
                    $nombre = $row['nombrecliente'];
                    $apellido = $row['apellidocliente'];
                    $cedula = $row['cedulacliente'];
                    $telefono = $row['telefonocliente'];
                    $direccion = $row['direccioncliente'];
                    $correo = $row['correocliente'];
                    /* $imagen = $row['imagenusuario'];   */            
            }else{
                echo 'Error! No existen resultados';
                exit();
            }
        }else{
            echo 'ERROR! Revise la conexion con la base de datos :/';
            exit();
        }
    }
    $stmt->close();
    $conn->close();
}else{
    echo 'Error No hay Sistema :(';
}
require_once 'Cuenta.html';
?>
