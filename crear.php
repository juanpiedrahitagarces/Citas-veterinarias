<?php include("database/db.php") ?>
<?php include("incluides/header.php") ?>
<?php include("incluides/footer.php") ?>


<!----lo que guarada lo envio a la carpeta save_task por metodo POST --->

<div class="row justify-content-center">
     <div class="col-md-7 col-lg-5">

          <div class="img" style="background-image: url(images/Logo-Euro-Web.png);"></div>
          <div class="login-wrap p-4 p-md-5">

               <img class="img-circle" src="image/1.jpg" alt="" id="logo" width="350px" height="250px" />

               <form action="validar.php" method="POST">
                    <!----nombres dueño mascota --->
                    <div class=" form-group">
                         <input type="text" name="nombre" class="form-control" placeholder="nombres dueño mascota" required autofocus>

                    </div>


                    <!----apellido dueño mascota--->
                    <div class=" form-group">
                         <input type="text" name="apellido" class="form-control" placeholder="apellido dueño mascota" required autofocus>

                    </div>


                    <!----documento dueño de la mascota--->
                    <div class=" form-group">
                         <input type="int" name="documento" class="form-control" placeholder="documento dueño de la mascota" required autofocus>

                    </div>


                    <!----nombre de  la mascota --->
                    <div class=" form-group">
                         <input type="text" name="nombreMascota" class="form-control" placeholder="nombre de  la mascota" required autofocus>

                    </div>

                    <!----fecha--->




                    <div class=" ant-calendar-input-wrap">
                         <input type="ant-calendar-input-wrap" name="fecha" class="form-control" placeholder="nombre de  la mascota" value="2022-03-12  12:00 " required autofocus>

                    </div>
                    <input type="submit" class="btn btn-info btn-block" name="save_task" value="Agendar cita">
          </div>



          </form>

     </div>
</div>
</div>
</div>