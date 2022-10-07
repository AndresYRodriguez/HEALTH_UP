<?php

define('METHOD', 'AES-256-CBC');
define('SECRET_KEY', '$OscarEpe2');
define('SECRET_IV', '235468');

require './config/config.php';

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

if (!isset($_SESSION['Correo'])) {
    header("location: ../signin.php");
    session_destroy();
    die();
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
        $Contraseña = ContraEncrip::decryption($row['Contraseña']);
    }
}
//genero user
$IdGenUser = mysqli_query($con, "SELECT*FROM genero WHERE id_genero='$IdGenero'");
while ($row = mysqli_fetch_assoc($IdGenUser)) {
    $Genero = $row['Tipo'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="CSS/usuario.css">
    <title>Perfil | <?php echo $Nombres; ?></title>
</head>

<body>
    <form action="" method="POST" id="form">
        <div class="form">
            <h3 class="titulo">Bienvenido (a) <?php echo $Nombres; ?> <?php echo $Apellidos; ?></h3>
            <div class="grupo">
                <label class="text" for="">Nombres</label>
                <input class="formu text" type="text" name="Nombres" value="<?php echo $Nombres; ?>"><span class="barra"></span>
            </div>
            <div class="grupo">
                <label class="text" for="">Apellidos</label>
                <input class="formu text" type="text" name="Apellidos" value="<?php echo $Apellidos; ?>"><span class="barra"></span>
            </div>
            <div class="grupo">
                <label class="text" for="">Genero</label>
                <input class="formu text" type="text" name="Gemero" id="bloqueo" disabled="" value="<?php echo $Genero; ?>"><span class="barra"></span>
            </div>
            <div class="grupo">
                <label class="text" for="">Fecha_nacimiento</label>
                <input class="formu text" type="datetime" name="Fecha_nacimiento" id="bloqueo" disabled="" value="<?php echo $Fecha_nacimiento; ?>"><span class="barra"></span>
            </div>
            <div class="grupo">
                <label class="text" for="">Correo Electronico</label>
                <input class="formu text" type="email" name="Correo" id="bloqueo" disabled="" value="<?php echo $Correo; ?>"><span class="barra"></span>
            </div>
            <div class="grupo">
                <label class="text" for="">Contraseña</label>
                <input class="Contraseña formu text" type="password" name="Contraseña" value="<?php echo $Contraseña; ?>"><span class="barra"></span>
                <i class="uil uil-eye-slash ShowHidePw"></i>
            </div>
            <div class="submit">
                <button type="submit" name="actualizar" class="actualizar">Actualizar</button>
                <button type="submit" name="delete" class="delete" onclick="return ConfirmDelete()">Eliminar</button>
            </div>
        </div>
    </form>
    <?php
    require 'actuelim.php';
    ?>

    <!--Block input-->
    <script>
        //
        function BloqueoInput() {
            document.getElementById('bloqueo').disabled = false
        }
    </script>

    <script src="js/password.js"></script>

    <!--Confirm deletion-->
    <script type="text/javascript">
        function ConfirmDelete() {
            var response = confirm("¿Está seguro que desea eliminar su cuenta?");
            if (response == true) {
                return true;
            } else {
                return false;
            }
            /*Swal.fire({
                title: '¿Está seguro que desea eliminar su cuenta?',
                text: "No va poder iniciar con esta cuenta",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Borrar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Su cuenta fue borrada con exito',
                        'success'
                    )
                }
            })*/
        }
    </script>
</body>

</html>