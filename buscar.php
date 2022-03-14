<?php include("database/db.php") ?>

<?php include("listar.php") ?>

<?php

$documento = $_POST['documentoRe'];

$consulta = "SELECT*FROM citas_veterinarias WHERE documento='$documento '  ";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);
?>
<div class="col-md-8">
  <table class="table table-border">
    <thead>
      <tr>
        <thead>
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th> APELLIDO</th>
            <th>NOMBRE DE LA MASCOTA</th>
            <th>DOCUMENTO</th>
            <th>FECHA</th>
            <th>ACCION</th>
          </tr>
        </thead>

        <?php

        $query = "SELECT*FROM citas_veterinarias WHERE documento='$documento '  ";
        $resul_usuarios = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($resul_usuarios)) { ?>
      <tr>
        <td> <?php echo  $row['id']  ?></td>
        <td> <?php echo  $row['nombre']  ?></td>
        <td> <?php echo  $row['apellido']  ?></td>
        <td> <?php echo  $row['nombreMascota']  ?></td>
        <td> <?php echo  $row['documento']  ?></td>
        <td> <?php echo  $row['fecha']  ?></td>
        <td>
          <!----editar --->
          <a href="edit.php?documento=<?php echo $row['documento'] ?>" class="btn bnt-secondary"> <i class="fas fa-marker"></i> </a>
          <!----eliminar--->
          <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn bnt-success"> <i class="far fa-trash-alt"></i> </a>
        </td>
      </tr>
      <td>


      <?php }  ?> </th>


      </tr>

    </thead>



  </table>


</div>