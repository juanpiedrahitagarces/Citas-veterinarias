<?php include("database/db.php") ?>
<?php include("incluides/header.php") ?>
<?php include("incluides/footer.php") ?>

<?php
if (isset($_GET['id'])) {
    $documento = $_GET['id'];

    $query = "DELETE  FROM citas_veterinarias WHERE id = '$documento' ";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("fallo");
    }
    $_SESSION['message'] = 'se elimino de la cita exitosamente ';

    header("Location: index.php");
}
?>