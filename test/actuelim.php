<?php
/*define('METHOD', 'AES-256-CBC');
define('SECRET_KEY', '$OscarEpe2');
define('SECRET_IV', '235468');*/

require './config/config.php';

class Contraseñas {
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

//User profile

if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$_SESSION[Correo]'");

    while ($row = mysqli_fetch_assoc($user)) {
        $Nombres = $row['Nombres'];
        $Apellidos = $row['Apellidos'];
        $IdGenero = $row['Id_genero'];
        $Fecha_nacimiento = $row['Fecha_nacimiento'];
        $Correo = $row['Correo'];
        $Contraseña = Contraseñas::decryption($row['Contraseña']);
    }
}

//genero user
$IdGenUser = mysqli_query($con, "SELECT*FROM genero WHERE id_genero='$IdGenero'");
while ($row = mysqli_fetch_assoc($IdGenUser)) {
    $Genero = $row['Tipo'];
}

//Update user data

if (isset($_POST['actualizar'])) {
    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Contraseña = $_POST['Contraseña'];
    $EncripContraseña = Contraseña::encryption($Contraseña);

    $actualizar = mysqli_query($con, "UPDATE usuario SET Nombres = '$Nombres', Apellidos = '$Apellidos', Contraseña = '$EncripContraseña' WHERE Correo='$_SESSION[Correo]'");

    if ($actualizar) {
        header('Location: ./perfil.php');
    }
}

//Delete User

if (isset($_POST['delete'])) {
    $delete = "DELETE FROM usuario where Correo='$_SESSION[Correo]'";
    $result = mysqli_query($con, $delete);
    if ($result) {
        session_destroy();
        header("Location: ./signin.php");
    }
}
