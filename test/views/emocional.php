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

if (isset($_POST['public'])) {
    $Titulo = trim($_POST['Titulo']);
    $Descripcion = trim($_POST['Descripcion']);
    $Categoria = trim($_POST['Categoria']);
    $videotemp = $_FILES['Video']['tmp_name'];
    $Video = fopen($videotemp, 'rb');
    $audiotemp = $_FILES['Audio']['tmp_name'];
    $Audio = fopen($audiotemp, 'rb');
   
    $sql = mysqli_query($con, "INSERT INTO socioemocional(Id_categoria, Titulo, Videos, Audios, Descripcion) VALUES ('$Categoria','$Titulo','$Video','$Audio','$Descripcion')");
    if ($sql) {
        echo '<h3 class="ok">Se subio la rutina</h3>';
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
                            <option value="<?php echo $Id_cater; ?>"><?php echo $Id_gener;?> - <?php echo $Titulo;?></option>
                            <?php } ?>
                        </select>
                        <label for="">Categoria</label>
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
                            <a href="./views/miedo.php">
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
                            <a href="./views/estres.php">
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
                            <a href="./views/agotamiento.php">
                                <h3 class="text"><?php echo $row['Titulo'] ?></h3>
                            </a>
                        </div>
                    </figure>
                    <p class="text"><?php echo $row['Descripcion'] ?></p>
                </div>
            <?php } ?>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>