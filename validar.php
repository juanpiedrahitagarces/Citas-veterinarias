<?php include("database/db.php") ?>
<?php



$mensaje_txt = "";
if (isset($_POST['save_task'])) {
    $nombre =  $_POST['nombre'];
    $apellido =  $_POST['apellido'];
    $nombreMascota =  $_POST['nombreMascota'];
    $documento =  $_POST['documento'];
    $fecha = $_POST['fecha'];


    // validacion de nombre
    if (strlen($nombre) < 2) {
        include("crear.php");
?>

        < <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> Recuerda que para crear la cita :</strong>el nombre es demasiado corto

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


            <?php


        } else {
            // validacion de apellido
            if (strlen($apellido) < 3) {
                include("crear.php");
            ?>

                < <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong> Recuerda que para crear la cita :</strong>el apellido es demasiado corto

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>


                    <?php
                } else {
                    if (strlen($nombreMascota) < 1) {
                        include("crear.php");
                    ?>

                        < <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong> Recuerda que para crear la cita :</strong>el nombre de la mascota debe de tener mas de una letra

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>


                            <?php

                        } else {


                            $consulta = "SELECT*FROM citas_veterinarias  where fecha='$fecha'  ";
                            $resultado = mysqli_query($conn, $consulta);

                            $filas = mysqli_num_rows($resultado);

                            if ($filas) {

                                include("crear.php"); ?>

                                < <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong> Recuerda que para crear la cita :</strong>La fecha ya se encuentra ocupada, porfavor ingresa otra

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>


                                    <?php


                                } else {
                                    if (!is_numeric($documento)) {
                                        include("crear.php");

                                    ?>

                                        < <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong> Recuerda que para crear la cita :</strong>el documento debe de contener numeros

                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>


                    <?php

                                    } else {
                                        include("save_task.php");
                                    }
                                }
                            }
                        }
                    }
                }
                echo $mensaje_txt;
                $mensaje_txt = "";
                    ?>