<?php
require './config/config.php';

if (!isset($_SESSION['Correo'])) {
    header("location:signin.php");
    session_destroy();
    die();
}

if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM persona WHERE Correo='$_SESSION[Correo]'");
    while ($row = mysqli_fetch_assoc($user)) {
        $Type_User = $row['Tipo_usuario'];;
        $Genero = $row['Genero'];
    }
}

if (isset($_POST['public'])) {
    $file_name = $_FILES['Video']['name'];
    $file_temp = $_FILES['Video']['tmp_name'];
    $file_size = $_FILES['Video']['size'];
    $Rutina = $_POST['Rutina'];
    $Descripcion = $_POST['Descripcion'];

    if ($file_size < 50000000) {
        $file = explode('.', $file_name);
        $end = end($file);
        $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
        if (in_array($end, $allowed_ext)) {
            $name = date("Ymd") . time();
            $Video = 'upload/videos/' . $name . "." . $end;
            if (move_uploaded_file($file_temp, $Video)) {
                mysqli_query($con, "INSERT INTO fisica(Rutinas, Videos, Descripcion) VALUES ('$Rutina','$Video','$Descripcion')");
                echo "<script>alert('Rutina subida')</script>";
                echo "<script>window.location = 'fisico.php'</script>";
            }
        } else {
            echo "<script>alert('formato del video incorrecto')</script>";
            echo "<script>window.location = 'fisico.php'</script>";
        }
    } else {
        echo "<script>alert('El video es demasiado grande para subirlo')</script>";
        echo "<script>window.location = 'fisico.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categoria | Fisica</title>
</head>

<body>
    <?php if ($Type_User == 'admin') : ?>
        <div>
            <h1 class="title">Suba la rutina</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form">
                    <div class="grupo">
                        <input type="text" name="Rutina" class="formu text" required><span class="barra"></span>
                        <label for="">Rutina</label>
                    </div>
                    <div class="grupo">
                        <input type="file" name="Video" class="formu text" required><span clsss="barra"></span>
                        <label for="">Video</label>
                    </div>
                    <div class="grupo">
                        <input type="text" name="Descripcion" class="formu text" required><span class="barra"></span>
                        <label for="">Descripcion</label>
                    </div>
                    <div class="submit">
                        <button type="submit" name="public" class="public">Publicar</button>
                    </div>
                </div>
            </form>
        </div>
    <?php else : ?>
        <?php if ($Genero == 'Femenino') : ?>
            <div class="contenedor1">
                <p class="text">Esta es una rutina con la cual vas a poder desarollar la parte alta,media,baja de tu pecho esto atravez de ejercicios diseñados para este fin,recuerda calentar un poco antes de hacer esos ejercicios.</p>
                <figure>
                    <img src="./CSS/IMG/pechofe.jpg" alt="">
                    <div class="capa">
                        <a href="rutinas.php">
                            <h3 class="text">Rutina Pecho</h3>
                        </a>
                    </div>
                </figure>
            </div>
            <div class="contenedor">
                <figure>
                    <img src="./CSS/IMG/bicepfe.jpg" alt="">
                    <div class="capa">
                        <a href="otra_pagina.html">
                            <h3 class="text">Rutina bicep</h3>
                        </a>
                    </div>
                </figure>
                <p class="text">Esta es una rutina con la cual vas a poder desarollar la parte de la cabeza larga y corta de tu bicep esto atravez de ejercicios diseñados para este fin,recuerda calentar un poco antes de hacer esos ejercicios.</p>
            </div>
        <?php else : ?>
            <div class="contenedor1">
                <p class="text">Esta es una rutina con la cual vas a poder desarollar la parte alta,media,baja de tu pecho esto atravez de ejercicios diseñados para este fin,recuerda calentar un poco antes de hacer esos ejercicios.</p>
                <figure>
                    <img src="./CSS/IMG/public/chest.webp" alt="">
                    <div class="capa">
                        <a href="rutinas.php">
                            <h3 class="text">Rutina Pecho</h3>
                        </a>
                    </div>
                </figure>
            </div>
            <div class="contenedor">
                <figure>
                    <img src="./CSS/IMG/public/bicep.jpg" alt="">
                    <div class="capa">
                        <a href="otra_pagina.html">
                            <h3 class="text">Rutina bicep</h3>
                        </a>
                    </div>
                </figure>
                <p class="text">Esta es una rutina con la cual vas a poder desarollar la parte de la cabeza larga y corta de tu bicep esto atravez de ejercicios diseñados para este fin,recuerda calentar un poco antes de hacer esos ejercicios.</p>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>