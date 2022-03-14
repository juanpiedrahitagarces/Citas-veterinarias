<?php include("database/db.php") ?>
<?php include("incluides/header.php") ?>
<?php include("incluides/footer.php") ?>





<div class="container p-4">
    <div class="row">
        <div class=" col- md-4 ">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();
            } ?>
            <div class="card card-body">
                <div id="div1">


                    <CENTER>

                        <P><IMG src="image/imgprin.jpg" class="img-rounded" alt="Cinque Terre" />
                    </CENTER>
                </div>


            </div>

        </div>



    </div>

</div>