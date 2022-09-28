<?php

define('METHOD', 'AES-256-CBC');
define('SECRET_KEY', '$OscarEpe2');
define('SECRET_IV', '235468');

include('config/config.php');

class ContraEncrip
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

$Correo = $_POST['Correo'];
$Contraseña = ($_POST['Contraseña']);
$DesenContraseña = ContraEncrip::encryption($Contraseña);

$sql = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$Correo' AND Contraseña='$DesenContraseña'");

if (mysqli_num_rows($sql) > 0) {
  session_start();
  $_SESSION['Correo'] = $Correo;
  header("Location: ./home.php");
} else {
  include("signin.php");
?>
  <script type="text/javascript">
    Swal.fire({
      icon: 'error',
      title: 'Validacion',
      text: 'Los datos no coinciden',
    })
  </script>
<?php
}
?>