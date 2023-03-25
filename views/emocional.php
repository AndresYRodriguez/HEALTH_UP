<?php
require './config/config.php';

if (!isset($_SESSION['Correo'])) {
    header("location:signin.php");
    session_destroy();
    die();
}

if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$_SESSION[Correo]'");
    while ($row = mysqli_fetch_assoc($user)) {
        $Id_user = $row['Id_usuario'];
        $Type_User = $row['Tipo_usuario'];
        $Genero = $row['Id_genero'];
    }
}

//Public Emoción
if (isset($_POST['public'])) {
    $Titulo = $_POST['Titulo'];
    $Descripcion = $_POST['Descripcion'];
    $file_name = $_FILES['Video']['name'];
    $file_temp = $_FILES['Video']['tmp_name'];
    $file_size = $_FILES['Video']['size'];

    $audiotemp = $_FILES['Audio']['tmp_name'];
    $Audios = fopen($audiotemp, 'rb');

    if ($file_size < 50000000
    ) {
        $file = explode('.', $file_name);
        $end = end($file);
        $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
        if (in_array($end, $allowed_ext)) {
            $name = date("Ymd") . time();
            $location = 'upload/videos' . $name . "." . $end;
            if (move_uploaded_file($file_temp, $location)) {
                mysqli_query($conn, "INSERT INTO socioemocional(Id_categoria, Titulo, Videos, Audios, Descripcion) VALUES ('$Categoria','$Titulo','$Video','$Audio','$Descripcion')");
                echo "<script>alert('Video Uploaded')</script>";
                echo "<script>window.location = 'socioemocional.php'</script>";
            }
        } else {
            echo "<script>alert('Wrong video format')</script>";
            echo "<script>window.location = 'socioemocional.php'</script>";
        }
    } else {
        echo "<script>alert('File too large to upload')</script>";
        echo "<script>window.location = 'socioemocial.php'</script>";
    }
}

//Update Emoción
if (isset($_POST['UpdateEmocional'])) {
    $Title = $_POST['Titulo'];
    $file_name = $_FILES['Video']['name'];
    $file_temp = $_FILES['Video']['tmp_name'];
    $file_size = $_FILES['Video']['size'];

    $audiotemp = $_FILES['Audio']['tmp_name'];
    $Audios = fopen($audiotemp, 'rb');

    if ($file_size < 50000000) {
        $NameVideo = date("Ymd") . time();
        $Video = 'upload/videos' . $NameVideo . ".mp4";
        if (move_uploaded_file($file_temp, $Video)) {
            $update = mysqli_query($con, "UPDATE socioemocional SET Titulo = '$Title', Videos = '$Videos', Audios = '$Audios' WHERE Id_socioemocional = '$Id_socioemocional'");
            echo "<script>alert('Rutina subida')</script>";
            echo "<script>window.location = 'socioemocional.php'</script>";
        } else {
            echo "<script>alert(No fue posible cargar los archivos')</script>";
            echo "<script>window.location = 'socioemocional.php'</script>";
        }
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
            <h1 class="title">Suba la emoción</h1>

            <div class="container p-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Crear">Crear Emoción</button>
            </div>

            <!-- Modal Crear-->
            <div class="modal fade" id="Crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Crear emoción</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form">
                                    <div class="grupo">
                                        <input type="text" name="Titulo" class="formu text" required><span class="barra"></span>
                                        <label for="">Titulo</label>
                                    </div>
                                    <div class="grupo">
                                        <input type="file" name="Video" class="formu text"><span class="barra"></span>
                                        <label for="">Video</label>
                                    </div>
                                    <div class="grupo">
                                        <input type="file" name="Audio" class="formu text"><span class="barra"></span>
                                        <label for="">Audio</label>
                                    </div>
                                    <div class="grupo">
                                        <select name="Categoria" class="formu" required>
                                            <?php
                                            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Tipo='Socioemocional'");
                                            while ($row = mysqli_fetch_array($consulta)) {
                                                $Id_cater = $row['Id_categoria'];
                                                $Id_gener = $row['Id_genero'];
                                                $Titulo = $row['Titulo'];
                                            ?>
                                                <option value="<?php echo $Id_cater; ?>"><?php echo $Id_gener; ?> - <?php echo $Titulo; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="">Categoria</label>
                                    </div>
                                    <div class="grupo">
                                        <input type="text" name="Descripcion" class="formu text" required><span class="barra"></span>
                                        <label for="">Descripcion</label>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="public" class="btn btn-primary">Publicar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-4">
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Video</th>
                        <th scope="col">Audio</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider table-light">
                    <?php
                    $info = mysqli_query($con, "SELECT*FROM socioemocional");
                    while ($row = mysqli_fetch_array($info)) {
                         $Videos = $row['Videos'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['Titulo']; ?></th>
                            <td><?php echo ("<video src='$Videos' controls='controls' autoplay muted height='156px' width='311px'/>"); ?>
                                <!--<video src='data:Video/mp4;base64, <?php /*echo base64_encode($row['Videos']);*/ ?>' controls='controls' autoplay muted height='156px' width='311px'></video>--></td>
                            <td><audio src='data:Audio/mp3;base64, <?php echo base64_encode($row['Audios']); ?>' controls='controls' muted></audio></td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar<?php echo $row['Id_socioemocional']; ?>"><i class='bx bxs-edit-alt'></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Eliminar<?php echo $row['Id_socioemocional']; ?>"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>

                        <!-- Modal Editar-->
                        <div class="modal fade" id="Editar<?php echo $row['Id_socioemocional']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar <?php echo $row['Titulo']; ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form">
                                                <div class="grupo">
                                                    <input type="text" name="Titulo" class="formu text" value="<?php echo $row['Titulo']; ?>" required><span class="barra"></span>
                                                    <label for="">Titulo</label>
                                                </div>
                                                <div class="grupo">
                                                    <input type="file" name="Video" class="formu text" value="<video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='156px' width='311px'></video>"><span class="barra"></span>
                                                    <label for="">Video</label>
                                                </div>
                                                <div class="grupo">
                                                    <input type="file" name="Audio" class="formu text" value="<audio src='data:Audio/mp3;base64, <?php echo base64_encode($row['Audios']); ?>' controls='controls' muted></audio>"><span class="barra"></span>
                                                    <label for="">Audio</label>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" name="UpdateEmocional" class="btn btn-primary">Actualizar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Eliminar-->
                        <div class="modal fade" id="Eliminar<?php echo $row['Id_socioemocional']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar <?php echo $row['Titulo']; ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <?php if ($Genero == 'Femenino') : ?>
            <div class="contenedor1">
                <p class="text">Esta es una rutina con la cual vas a poder a controlar un poco mas tu humor y no sucumbir ante tu ira</p>
                <figure>
                    <img src="./CSS/IMG/irafe.jpg" alt="">
                    <div class="capa">
                        <a href="./ira.php">
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
            <?php
            $consulta = "SELECT*FROM categoria WHERE Titulo='ira'";
            $resultado = mysqli_query($con, $consulta);

            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='250px' width='550px'>
                        <div class="capa">
                            <a href="ira.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = "SELECT*FROM categoria WHERE Titulo='miedo'";
            $resultado = mysqli_query($con, $consulta);

            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']) ?>" alt="">
                        <div class="capa">
                            <a href="./miedo.php">
                                <h3 class="text"><?php echo $row['Titulo'] ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion'] ?></p>
                </div>
            <?php } ?>

            <?php
            $consulta = "SELECT*FROM categoria WHERE Titulo='Estres'";
            $resultado = mysqli_query($con, $consulta);

            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='250px' width='550px'>
                        <div class="capa">
                            <a href="./estres.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = "SELECT*FROM categoria WHERE Titulo='Agotamiento mental'";
            $resultado = mysqli_query($con, $consulta);

            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']) ?>" alt="">
                        <div class="capa">
                            <a href="./agotamiento.php">
                                <h3 class="text"><?php echo $row['Titulo'] ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion'] ?></p>
                </div>
            <?php } ?>

            <div class="contenedor1">
                <p class="text">Diviertase con un juego mental para poder despejar su mente</p>
                <figure>
                    <img src="./CSS/IMG/public/juego.jpeg" alt="" height='250px' width='550px'>
                    <div class="capa">
                        <a href="./views/juego.html">
                            <h3 class="text">Juego mental</h3>
                        </a>
                    </div>
                </figure>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>