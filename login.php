<?php
session_start();
$usuario = '';
$contraseña ='';
if (isset($_POST['Usuario']) && isset($_POST['Contraseña'])){
$usuario = $_POST['Usuario'];
$contraseña = $_POST['Contraseña'];
}
//Creación de la conexión
$conexion = mysqli_connect("localhost", "root", "", "grupo6_playbbem");

$consulta = "SELECT * FROM `cliente` where nombreusuario='$usuario' and clavecliente='$contraseña'";
$consulta2 = "SELECT * FROM `administrador` where admin_usuario='$usuario' and contrasena_admin='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);
$resultado2 = mysqli_query($conexion, $consulta2);

$con = mysqli_num_rows($resultado);
$con2 = mysqli_num_rows($resultado2);

if ($con) {

  header("location:catalogo.php");
} else if ($con2) {
  header("location: admin/adminpanel.php");
} else {

?>
  <?php
  include("login.html");

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JavaScript/javascript.js"></script>
    <title>Document</title>
  </head>

  <body>
    <template id="mensaje">
      <style>
        .error {
          width: 500px;
          right: 480px;
          margin-top: 10px;
          margin-left: 450px;
          display: grid;
          grid-template-columns: 1fr 4fr;
          border: 3px solid #000000;
        }

        .derecha {
          font-size: 20px;
          color: #000000;
        }

        b {
          font-size: 35px;
        }
      </style>
      <div class="error">
        <div class="izquierda">
          <img src="img /error.png" width="150px" height="150px" alt="">
        </div>
        <div class="derecha">
          Error, no se ha podido conectar con el servidor
          <p></p>
          <b>Ingrese datos validos</b>
          <br>

        </div>
      </div>
    </template>
    <img-template></img-template>
  </body>

  </html>


<?php
}
mysqli_free_result($resultado);
mysqli_free_result($resultado2);
mysqli_close($conexion);
?>