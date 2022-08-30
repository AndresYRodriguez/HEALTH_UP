<?php
require './config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM encuestas WHERE Id_encuesta = $id";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Query Failed.");
    }
    header('Location: ./encuesta.php');
}
