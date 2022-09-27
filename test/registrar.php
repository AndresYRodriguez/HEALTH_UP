<?php
define('METHOD', 'AES-256-CBC');
define('SECRET_KEY', '$OscarEpe2');
define('SECRET_IV', '235468');

include("config/config.php");

class Contraseña
{
  public static function encryption($string)
  {
    $output = FALSE;
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
    $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
    $output = base64_encode($output);
    return $output;
  }
  public static function decryption($string)
  {
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
    $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
    return $output;
  }
}

if (isset($_POST['Registrarse'])) {
  if (strlen($_POST['Nombres']) >= 1 && strlen($_POST['Apellidos']) >= 1 && strlen($_POST['Genero']) >= 1 && strlen($_POST['Fecha_nacimiento']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Contraseña']) >= 1) {
    $Nombres = trim($_POST['Nombres']);
    $Apellidos = trim($_POST['Apellidos']);
    $Genero = trim($_POST['Genero']);
    $Fecha_nacimiento = trim($_POST['Fecha_nacimiento'], "date");
    $Correo = trim($_POST['Correo']);
    $Contraseña = trim($_POST['Contraseña']);
    $EncripContraseña = Contraseña::encryption($Contraseña);

    $consulta = "INSERT INTO usuario(Nombres, Apellidos, Tipo_usuario, Id_genero, Fecha_nacimiento, Correo, Contraseña) VALUES ('$Nombres','$Apellidos','user','$Genero','$Fecha_nacimiento','$Correo','$EncripContraseña')";

    $VerCorrreo = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$Correo'");

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