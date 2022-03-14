<?php include("database/db.php") ?>


<?php

if (isset($_GET['documento'])) {
  $documento = $_GET['documento'];
  $query = "SELECT  *  FROM citas_veterinarias WHERE documento = '$documento'  ";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $nombreMascota = $row['nombreMascota'];
    $documento = $row['documento'];
    $fecha = $row['fecha'];
  }
}

if (isset($_POST['update'])) {
  $documento =  $_GET['documento'];
  $documento =  $_POST['documento'];
  $nombre = $_POST['nombre'];
  $apellido =  $_POST['apellido'];
  $nombreMascota =  $_POST['nombreMascota'];
  $documento =  $_POST['documento'];
  $fecha =  $_POST['fecha'];
  $query = "UPDATE citas_veterinarias set nombre =  '$nombre', apellido = '$apellido', nombreMascota= '$nombreMascota', documento= '$documento',  fecha ='$fecha' WHERE documento = '$documento'";
  mysqli_query($conn, $query);

  $_SESSION['message'] = 'se actualizaron los datos exitosamente ';
  header("Location: index.php");
}

?>

<?php include("incluides/header.php") ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">

      <div class="card card-body">

        <form action="validarEditar.php?documento=<?php echo $_GET['documento']; ?>" method="POST">

          <!--EDITAR NOMBRE--->
          <div class="form-group">

            <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="" required autofocus>
          </div>
          <!--EDITAR apellido--->

          <div class="form-group">

            <input type="text" name="apellido" value="<?php echo $apellido ?>" class="form-control" placeholder="" required autofocus>
          </div>

          <!--EDITAR nombreMascota--->
          <div class="form-group">

            <input type="text" name="nombreMascota" value="<?php echo $nombreMascota ?>" class="form-control" placeholder="" required autofocus>
          </div>

          <!--EDITAR DOCUMENTO--->

          <div class="form-group">

            <input type="text" name="documento" value="<?php echo  $documento ?>" class="form-control" placeholder="" required autofocus>
          </div>

          <!--EDITAR LA FECHA-->

          <div class="form-group">

            <input type="text" name="fecha" value="<?php echo  $fecha ?>" class="form-control" placeholder="" required autofocus>
          </div>

          <button class="btn btn-success" name="update">
            ACTUALIZAR DATOS

          </button>

        </form>

      </div>


    </div>
  </div>

</div>
<?php include("incluides/footer.php") ?>