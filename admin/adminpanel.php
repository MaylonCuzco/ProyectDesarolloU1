<?php include("../conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Panel admin</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- BOOTSTRAP 4 -->
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
  <!-- FONT AWESOEM -->

</head>

<style>
  tr>th {
    text-align: center;

  }

  span {
    display: inline;
  }

  .vertical>span {
    vertical-align: 130%;
  }

  .container2{
    margin-left: 15%;
    margin-right: 15%;
    width: auto;
    border: solid 2px black;
    text-align: center;
  }
 /*  .row{
    width: 80%;
    border: solid 2px black;
  }
  .col-md-4{
    border: solid 2px black;
  } */
  .table{
    /* border: solid 2px red; */
    margin-left: 25%;
    font-size: 15px;
  }
  .salir{
/*     border: 1px solid red;*/
    margin: 7px;
    padding: 5px;
    background: firebrick;
    color: whitesmoke;
    text-decoration: none;
    font-weight: 600;
  }
  .salir:hover{
    color: black;
    text-decoration: none;
  }
</style>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="adminpanel.php">Panel Admin</a>
    </div>
    <div>
      <a class="salir" href="../catalogo.html">Cerrar Sesion</a>
    </div>
  </nav>

  <main class="container2 p-4">
    <div class="row">
      <div class="col-md-4">
        <!-- MESSAGES -->

        <!-- ADD TASK FORM -->

        <div class="col-md-8">
          <table class="table table-bordered">

            <thead>
              <tr>
                <th colspan="6">Usuarios</th>
                <th class="vertical" rowspan="2"> <span>Acciones</span> </th>
              </tr>
              <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Género</th>
                <th>Cédula</th>
                <th>Correo</th>
                <th>Teléfono</th>
              </tr>
            </thead>

            <tbody>
              <?php
              $query = "SELECT * FROM `cliente`";
              $result = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?php echo $row['nombrecliente']; ?></td>
                  <td><?php echo $row['apellidocliente']; ?></td>
                  <td><?php echo $row['generocliente']; ?></td>
                  <td><?php echo $row['cedulacliente']; ?></td>
                  <td><?php echo $row['correo_ecliente']; ?></td>
                  <td><?php echo $row['telefonocliente']; ?></td>
                  <td>
                    <a title="eliminar usuario/cliente" href="delete.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-danger">
                      <i class="fa-solid fa-user-slash"></i>
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
  </main>
</body>
<script src="https://kit.fontawesome.com/d0ffcb4388.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>