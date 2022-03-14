<?php include("database/db.php") ?>
<?php include("incluides/header.php") ?>
<?php include("incluides/footer.php") ?>
<div class="row justify-content-center">
   <div class="col-md-7 col-lg-5">

      <div class="login-wrap p-4 p-md-5">
         <form method="POST" action="buscar.php" onSubmit="return validarForm(this)">
            <input type="text" name="documentoRe" class="form-control" placeholder="Ingresa el documento" required autofocus>

            <input type="submit" class="btn btn-info" value="Buscar" name="buscar">



         </form>
      </div>
   </div>
</div>