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
        $Type_User = $row['Tipo_usuario'];
        $Genero = $row['Genero'];
    }
}

if (isset($_POST['public'])) {
    $file_name = $_FILES['Video']['name'];
    $file_temp = $_FILES['Video']['tmp_name'];
    $file_size = $_FILES['Video']['size'];
    $Titulo = trim($_POST['Titulo']);
    $Descripcion = trim($_POST['Descripcion']);

    if ($file_size < 50000000) {
        $file = explode('.', $file_name);
        $end = end($file);
        $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
        if (in_array($end, $allowed_ext)) {
            $name = date("Ymd") . time();
            $Video = 'upload/videos/' . $name . "." . $end;
            if (move_uploaded_file($file_temp, $Video)) {
                mysqli_query($con, "INSERT INTO socioemocional(Titulo, Videos, Audios, Descripcion) VALUES ('$Titulo', '$Video','','$Descripcion')");
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
    <title>Categoria | Socioemocional</title>
</head>

<body>
    <?php if ($Type_User == 'admin') : ?>
        <div>
            <h1 class="title">Suba la emocion</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form">
                    <div class="grupo">
                        <input type="text" name="Titulo" class="formu text" required><span class="barra"></span>
                        <label for="">Titulo</label>
                    </div>
                    <div class="grupo">
                        <input type="file" name="Video" class="formu text" required><span class="barra"></span>
                        <label for="">Video</label>
                    </div>
                    <div class="grupo">
                        <input type="file" name="Audio" class="formu text"><span class="barra"></span>
                        <label for="">Audio</label>
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
                <p class="text">Esta es una rutina con la cual vas a poder a controlar un poco mas tu humor y no sucumbir ante tu ira</p>
                <figure>
                    <img src="./CSS/IMG/irafe.jpg" alt="">
                    <div class="capa">
                        <a href="ira.php">
                            <h3 class="text">Rutina control ira</h3>
                        </a>
                    </div>
                </figure>
            </div>
            <div class="contenedor">
                <figure>
                    <img src="./CSS/IMG/tristefe.jpg" alt="">
                    <div class="capa">
                        <a href="otra_pagina.html">
                            <h3 class="text">Rutina control tristeza</h3>
                        </a>
                    </div>
                </figure>
                <p class="text">Esta es una rutina con la cual vas a poder a controlar un poco mas tu humor y tratar de que no te sere la tristeza</p>
            </div>
        <?php else : ?>
            <div class="contenedor1">
                <p class="text">Esta es una rutina con la cual vas a poder a controlar un poco mas tu humor y no sucumbir ante tu ira</p>
                <figure>
                    <img src="./CSS/IMG/public/ira.jpg" alt="">
                    <audio src=""></audio>
                    <div class="capa">
                        <a href="ira.php">
                            <h3 class="text">Rutina control ira</h3>
                        </a>
                    </div>
                </figure>
            </div>
            <div class="contenedor">
                <figure>
                    <img src="./CSS/IMG/public/tristeza.jpg" alt="">
                    <div class="capa">
                        <a href="otra_pagina.html">
                            <h3 class="text">Rutina control tristeza</h3>
                        </a>
                    </div>
                </figure>
                <p class="text">Esta es una rutina con la cual vas a poder a controlar un poco mas tu humor y tratar de que no te sere la tristeza</p>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>