<?php
include("../conexion.php");

    $nom ='';
    $ape ='';
    $gen ='';
    $ced ='';
    $tel ='';
    $dir ='';
    $corr ='';
    $usu='';
    $cla='';
    $imgcl='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM cliente WHERE idcliente=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nom = $row['nombrecliente'];
    $ape = $row['apellidocliente'];
    $gen = $row['generocliente'];
    $ced = $row['cedulacliente'];
    $tel = $row['telefonocliente'];
    $dir = $row['direccioncliente'];
    $corr = $row['correo_ecliente'];
    $usu=$row['nombreusuario'];
    $cla=$row['clavecliente'];
    $imgcl=$row['imagenusuario'];

  }
}

if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    
    $tel = $row['telefono'];
    $dir = $row['direccion'];
    $corr = $row['correo'];
    $usu=$row['usuario'];
    $cla=$row['contrasenia'];
    $imgcl=$row['imagen'];

  $query = "UPDATE task set telefonocliente = '$tel', direccioncliente = '$dir',
  correo_ecliente='$corr', nombreusuario='$usu',clavecliente='$cla',imagenusuario='$imgcl';
   WHERE id=$id";
  mysqli_query($conn, $query);

  header('Location: adminpanel.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="inicio p-4 mt-5 mb-5">
            <div class="row">
                <div class="col text-center">
                    <h2>Agregar un usuario</h2>
                    <p>Llene este formulario para agregar un usuario al sistema.</p>
                </div>
            </div>
            <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="col col-12 col-md-7">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" readonly value="<?php echo $nom; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido" readonly value="<?php echo $ape; ?>">
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Genero"name="genero" readonly value="<?php echo $gen; ?>">
                        </div> 
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cedula" name="cedula" readonly value="<?php echo $ced; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Teléfono" name="telefono" require value="<?php echo $tel; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Dirección" name="direccion" require value="<?php echo $dir; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Correo: ejmp@ejemplo.com"name="correo" require value="<?php echo $corr; ?>">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="nombre usuario"name="usuario" readonly value="<?php echo $usu; ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Ingrese contraseña"name="contrasenia" readonly value="<?php echo $cla; ?>">
                        </div>
                        <div class="form-group">
                            <label>Foto</label><br>
                            <input type="file" name="imagen" value="<?php echo $imgcl; ?>"> 
                        </div>
                        <div class="text-center">
                            <input type="submit" name="actualizar" value="Actualizar" class="btn btn-success enviar">
                            <a href="adminpanel.php" class="btn btn-primary enviar">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>

</body>

</html>