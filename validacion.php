<?php
include('config/config.php');

$Correo = $_POST['Correo'];
$Contraseña = md5($_POST['Contraseña']);

$sql = mysqli_query($con, "SELECT*FROM persona WHERE Correo='$Correo' AND Contraseña='$Contraseña'");

if (mysqli_num_rows($sql) > 0){
  session_start();
  $_SESSION['Correo'] = $Correo;
  header("Location: ./home.php");
} else {
  include("signin.php");
  ?>
  <h1 class="bad">Los datos no coinciden</h1>
  <?php
}
?>