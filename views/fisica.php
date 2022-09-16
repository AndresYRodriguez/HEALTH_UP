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
        $Type_User = $row['Tipo_usuario'];;
        $Genero = $row['Id_genero'];
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
        <?php if ($Genero == '1') : ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Trapecio' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./views/trapecio.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Hombro' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='100%' width='100%'>
                        <div class="capa">
                            <a href="./views/hombros.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Pecho' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./pecho.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Espalda' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='100%' width='100%'>
                        <div class="capa">
                            <a href="./views/espalda.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Bicep' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./views/biceps.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Tricep' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='353px' width='400px'>
                        <div class="capa">
                            <a href="./views/triceps.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Antebrazo' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='341px' width='500px'>
                        <div class="capa">
                            <a href="rutinas.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Abdomen' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='100%' width='100%'>
                        <div class="capa">
                            <a href="./views/abdomen.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Cuadriceps' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./views/cuadriceps.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Gluteos' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='100%' width='100%'>
                        <div class="capa">
                            <a href="./views/gluteos.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Pantorrillas' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./views/pantorrillas.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>
        <?php else : ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Trapecio' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./views/trapecio.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Hombro' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='100%' width='100%'>
                        <div class="capa">
                            <a href="./views/hombros.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Pecho' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./pecho.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Espalda' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='100%' width='100%'>
                        <div class="capa">
                            <a href="./views/espalda.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Bicep' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./views/biceps.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Tricep' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='353px' width='400px'>
                        <div class="capa">
                            <a href="./views/triceps.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Antebrazo' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='341px' width='500px'>
                        <div class="capa">
                            <a href="./views/antebrazo.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Abdomen' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='100%' width='100%'>
                        <div class="capa">
                            <a href="./views/abdomen.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Cuadriceps' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./views/cuadriceps.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Gluteos' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor">
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='100%' width='100%'>
                        <div class="capa">
                            <a href="./views/gluteos.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                </div>
            <?php } ?>
            <?php
            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Titulo='Pantorrillas' and Id_genero='$Genero'");
            while ($row = mysqli_fetch_assoc($consulta)) {
            ?>
                <div class="contenedor1">
                    <p class="text"><?php echo $row['Descripcion']; ?></p>
                    <figure>
                        <img src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="" height='319px' width='500px'>
                        <div class="capa">
                            <a href="./views/pantorrillas.php">
                                <h3 class="text"><?php echo $row['Titulo']; ?></h3>
                            </a>
                        </div>
                    </figure>
                </div>
            <?php } ?>

        <?php endif; ?>
    <?php endif; ?>
</body>

</html>