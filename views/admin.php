<?php
require './config/config.php';

date_default_timezone_set("America/Lima");
$date = new DateTime();

$Fecha_inicio = $date->format('Y-m-d H:i:s');


//id del admin
if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$_SESSION[Correo]'");

    while ($row = mysqli_fetch_assoc($user)) {
        $Id_user = $row['Id_usuario'];
    }
}


//Crear una encuesta
if (isset($_POST['CrearEncuesta'])) {
    if (strlen($_POST['Titulo']) >= 1 && strlen($_POST['Descripcion']) >= 1 && strlen($_POST['Fecha_final'])) {
        $Title = trim($_POST['Titulo']);
        $Description = trim($_POST['Descripcion']);
        $Date = trim($_POST['Fecha_final'], "date");

        $sql = "INSERT INTO encuestas(Id_usuario, Titulo, Descripcion, Estado, Fecha_inicio, Fecha_final) VALUES ('$Id_user', '$Title','$Description','0','$Fecha_inicio','$Date')";

        $result = mysqli_query($con, $sql);
        if ($result) {
            header("Location: ./encuesta.php");
        }
        echo '<h1 class="dark">No fue posible registrar</h1>';
    }
}

//Actualizar encuesta
if (isset($_POST['UpdateEncuesta'])) {
    $Title = $_POST['Titulo'];
    $Descripcion = $_POST['Descripcion'];
    $Fecha = trim($_POST['Fecha_final'], "date");

    $update = "UPDATE encuestas SET Titulo = '$Title', Descripcion = '$Descripcion', Fecha_final = '$Fecha'";
    $resultado = mysqli_query($con, $update);

    if ($resultado) {
        header('Location: ./encuesta.php');
    }
}

//starting encuesta
if (isset($_POST['Starting'])) {
    $StarEncu = "UPDATE encuestas SET Estado = '1'";
    $Result = mysqli_query($con, $StarEncu);
    if ($Result) {
        header('Location: ./encuesta.php ');
    }
}

//Finish encuesta
if (isset($_POST['Finish'])) {
    $FinishEncu = "UPDATE encuestas SET Estado = '0'";
    $Resultado = mysqli_query($con, $FinishEncu);
    if ($Resultado) {
        header('Location: ./encuesta.php ');
    }
}

//informacion de la encuesta
$info = mysqli_query($con, "SELECT*FROM encuestas");
while ($row = mysqli_fetch_array($info)) {
    $Id_encuesta = $row['Id_encuesta'];
    $Titulo = $row['Titulo'];
    $Description = $row['Descripcion'];
    $Date = $row['Fecha_final'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/admin.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row-title">
            <div class="title">
                <h1>Creé las encuestas</h1>
                <div class="button-crear">
                    <button class="hero__cta">Crear</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th class="table-title">Titulo</th>
                        <th class="table-title">Descripcion</th>
                        <th class="table-title">Estado</th>
                        <th class="table-title">Fecha Inicio </th>
                        <th class="table-title">Fecha Final</th>
                        <th class="table-title">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $info = mysqli_query($con, "SELECT*FROM encuestas WHERE Id_usuario = '$Id_user'");
                    while ($row = mysqli_fetch_array($info)) {
                    ?>
                        <tr>
                            <td class="table-tareas"><a href="./views/mostrarpreguntas.php?Id_encuesta=<?php echo $Id_encuesta; ?>" class="title-link"><?php echo $row['Titulo']; ?></a></td>
                            <td class="table-tareas"><?php echo $row['Descripcion']; ?></td>
                            <td class="table-tareas"><?php echo $row['Estado']; ?></td>
                            <td class="table-tareas"><?php echo $row['Fecha_inicio']; ?></td>
                            <td class="table-tareas"><?php echo $row['Fecha_final']; ?></td>
                            <td class="table-tareas">
                                <div class="dropdown">
                                    <button class="options">Opciones</button>
                                    <ul class="row">
                                        <form class="" action="" method="post">
                                            <li><button type="submit" name="Registrarse" class="modificar atajos">Modificar</button></li>
                                            <li><a href="./delete.php?id=<?php echo $row['Id_encuesta']; ?>" class="atajos">Elliminar</a></li>
                                            <li><a href="./public.php?id=<?php echo $row['Id_encuesta']; ?>" class="atajos">Publicar</a></li>
                                            <li><button type="submit" name="Finish" class="atajos">Finalizar</button></li>
                                            <li><button type="submit" name="Registrarse" class="atajos">VIsta Previa</button></li>
                                            <li><button type="submit" name="Registrarse" class="atajos">Resultados</button></li>
                                        </form>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!--Actualizar Encuesta-->
    <section class="modal2">
        <div class="modal_container">
            <h2 class="modal_title">Modificar encuesta</h2>
            <form action="" method="POST">
                <div class="form">
                    <div class="grupo">
                        <input type="text" name="Titulo" class="text formu" value="<?php echo $Titulo; ?>"><span class="barra"></span>
                        <label for="" class="text">Titulo</label>
                    </div>
                    <div class="grupo">
                        <input type="text" name="Descripcion" class="text formu" value="<?php echo $Description; ?>"><span class="barra"></span>
                        <label for="" class="text">Descripcion</label>
                    </div>
                    <div class="grupo">
                        <input type="datetime" name="Fecha_final" class="text formu" value="<?php echo $Fecha_inicio; ?>" required><span class="barra"></span>
                        <label for="" class="text">Fecha Final</label>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit" name="UpdateEncuesta" class="Actualizar">Actualizar</button>
                    <button class="modal_close">Cancelar</button>
                </div>
            </form>
        </div>
    </section>

    <!--Crear Encuesta-->
    <section class="modal">
        <div class="modal__container">

            <h2 class="modal__title">Agregar nueva encuesta</h2>
            <form action="" method="POST">
                <div class="form">
                    <div class="grupo">
                        <input type="text" name="Titulo" class="text formu" required><span class="barra"></span>
                        <label for="" class="text">Titulo</label>
                    </div>
                    <div class="grupo">
                        <input type="text" name="Descripcion" class="text formu" required><span class="barra"></span>
                        <label for="" class="text">Descripcion</label>
                    </div>
                    <div class="grupo">
                        <input type="datetime" name="Fecha_final" class="text formu" value="<?php echo $Fecha_inicio; ?>" required><span class="barra"></span>
                        <label for="" class="text">Fecha Final</label>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit" name="CrearEncuesta" class="crear">Crear</button>
                    <button class="modal__close">Cerrar</button>
                </div>
            </form>
        </div>
    </section>
    <script src="./js/modal.js"></script>
</body>

</html>