
<?php
include("database/db.php");

if (isset($_POST['save_task'])) {
  $nombre =  $_POST['nombre'];
  $apellido =  $_POST['apellido'];
  $nombreMascota =  $_POST['nombreMascota'];
  $documento =  $_POST['documento'];
  $fecha =  $_POST['fecha'];


  $query = " INSERT INTO citas_veterinarias(nombre, apellido, nombreMascota, documento, fecha) VALUES ('$nombre', '$apellido', '$nombreMascota',  '$documento', '$fecha')";

  $result = mysqli_query($conn, $query);

  if (!$result) {
    die("query fail");
  }

  $_SESSION['message'] = 'se agendo la cita';


  header("Location: index.php");
}

?>