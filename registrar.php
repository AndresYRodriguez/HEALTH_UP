<?php
include("config/config.php");

if (isset($_POST['Registrarse'])) {
  if (strlen($_POST['Nombres']) >= 1 && strlen($_POST['Apellidos']) >= 1 && strlen($_POST['Genero']) >= 1 && strlen($_POST['Fecha_nacimiento']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Contraseña']) >= 1) {
    $Nombres = trim($_POST['Nombres']);
    $Apellidos = trim($_POST['Apellidos']);
    $Genero = trim($_POST['Genero']);
    $Fecha_nacimiento = trim($_POST['Fecha_nacimiento'], "date");
    $Correo = trim($_POST['Correo']);
    $Contraseña = trim(md5($_POST['Contraseña']));

    $consulta = "INSERT INTO persona(Nombres, Apellidos, Tipo_Usuario, Genero, Fecha_nacimiento, Correo, Contraseña) VALUES ('$Nombres','$Apellidos','Usuario','$Genero','$Fecha_nacimiento','$Correo','$Contraseña')";

    $VerCorrreo = mysqli_query($con, "SELECT*FROM persona WHERE Correo='$Correo'");

    if (mysqli_num_rows($VerCorrreo) > 0) {
      echo '<h3 class="bad">Ya existe un usuario, intente nuevamente o verifique si ya tiene cuenta</h3>';
      exit();
    }

    $resultado = mysqli_query($con, $consulta);
    if ($resultado) {
?>
      <h3 class="ok">Se ha inscripto correctamente</h3>
    <?php
    } else {
    ?>
      <h3 class="bad">No fue posible registrarse</h3>
<?php
    }
  }
}
