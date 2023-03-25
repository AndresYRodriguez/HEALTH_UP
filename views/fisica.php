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

//genero user
/*$IdGenUser = mysqli_query($con, "SELECT*FROM genero WHERE id_genero='$Id_gener'");
while ($row = mysqli_fetch_assoc($IdGenUser)) {
    $Genero = $row['Tipo'];
}*/

if (isset($_POST['public'])) {
    $videotemp = $_FILES['Video']['tmp_name'];
    $Video = fopen($videotemp, 'rb');
    $Rutina = $_POST['Rutina'];
    $Descripcion = $_POST['Descripcion'];
    $Categoria = trim($_POST['Categoria']);

    $sql = mysqli_query($con, "INSERT INTO fisica(Id_categoria, Rutinas, Videos, Descripcion) VALUES ('$Categoria','$Rutina','$Video','$Descripcion')");
    if ($sql) {
        echo '<h3>Se subio la rutina</h3>';
    } else {
        echo '<h3>No fue posible subir la rutina</h3>';
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

            <div class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Crear">Crear</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Crear encuesta</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form">
                                    <div class="grupo">
                                        <input type="text" name="Rutina" class="formu text" required><span class="barra"></span>
                                        <label for="">Rutina</label>
                                    </div>
                                    <div class="grupo">
                                        <input type="file" name="Video" class="formu text"><span clsss="barra"></span>
                                        <label for="">Video</label>
                                    </div>
                                    <div class="grupo">
                                        <select name="Categoria" class="formu" required>
                                            <?php
                                            $consulta = mysqli_query($con, "SELECT*FROM categoria WHERE Tipo='Fisico'");
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
                            <a href="./trapecio.php">
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
                            <a href="./hombros.php">
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
                            <a href="./espalda.php">
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
                            <a href="./biceps.php">
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
                            <a href="./triceps.php">
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
                            <a href="./abdomen.php">
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
                            <a href="./cuadriceps.php">
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
                            <a href="./gluteos.php">
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
                            <a href="./pantorrillas.php">
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
                            <a href="./trapecio.php">
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
                            <a href="./hombros.php">
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
                            <a href="./espalda.php">
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
                            <a href="./biceps.php">
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
                            <a href="./triceps.php">
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
                            <a href="./antebrazo.php">
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
                            <a href="./abdomen.php">
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
                            <a href="./cuadriceps.php">
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
                            <a href="./gluteos.php">
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
                            <a href="./pantorrillas.php">
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