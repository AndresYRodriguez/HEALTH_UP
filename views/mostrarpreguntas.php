<?php
require '../config/config.php';
session_start();

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
        $Apellidos = $row['Apellidos'];;
        $Type_User = $row['Tipo_usuario'];;
    }
}

//Title de la encuesta
$TitleEnc = mysqli_query($con, "SELECT*FROM encuestas");
while ($row = mysqli_fetch_assoc($TitleEnc)) {
    $Id_encuesta = $row['Id_encuesta'];
    $Title = $row['Titulo'];
}

//CreateOption
if (isset($_POST['CreateOption'])) {
    if (strlen($_POST['Tipo']) >= 1 && $_POST['Tipo'] >= 1) {
        $Titulo = trim($_POST['Titulo']);
        $Tipo = trim($_POST['Tipo']);

        $sql = "INSERT INTO preguntas(Id_encuesta, Titulo, Tipo) VALUES('$Id_encuesta', '$Titulo', '$Tipo')";
        $resul = mysqli_query($con, $sql);
        if ($resul) {
            header('Location: ./MostrarPreguntas.php');
        }
    }
}

//Mostrar preguntas
$MostOptions = mysqli_query($con, "SELECT*FROM preguntas");
while ($row = mysqli_fetch_assoc($MostOptions)) {
    $Pregunta = $row['Titulo'];
    $Opcion = $row['Tipo'];
}

//Actualizar preguntas
if (isset($_POST['UpdatePregun'])) {
    $TituloPre = $_POST['Titulo'];
    $TipOption = $_POST['Tipo'];

    $update = "UPDATE preguntas SET Titulo = '$TituloPre', Tipo = '$TipOption'";
    $resultado = mysqli_query($con, $update);

    if ($resultado) {
        header('Location: ./MostrarPreguntas.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../CSS/IMG/logo-health_up.png">
    <link rel="stylesheet" href="../CSS/estado.css">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <link rel="stylesheet" href="../CSS/preguntas.css">
    <title>Encuesta | <?php echo $Nombres; ?></title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="img-text">
                <span class="img">
                    <img src="../CSS/IMG/logo-health_up.png" alt="logo-Health_up">
                </span>
                <div class="text header-text">
                    <span class="title">Health_up</span>
                    <span class="description">Mejore su salud</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../perfil.php?Id_user=<?php echo $_SESSION['Correo'] ?>">
                            <i class='bx bx-user icons'></i>
                            <span class="text nav-text">Perfil</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../home.php">
                            <i class='bx bx-home-alt-2 icons'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../fisico.php">
                            <i class='bx bx-walk icons'></i>
                            <span class="text nav-text">Fisico</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../socioemocional.php">
                            <i class='bx bx-happy icons'></i>
                            <span class="text nav-text">Socioemocional</span>
                        </a>
                    </li>
                    <?php if ($Type_User == 'admin') : ?>
                        <li class="nav-link">
                            <a href="../encuesta.php">
                                <i class='bx bx-pie-chart-alt-2 icons'></i>
                                <span class="text nav-text">Crear encuesta</span>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-link">
                            <a href="../encuesta.php">
                                <i class='bx bx-pie-chart-alt-2 icons'></i>
                                <span class="text nav-text">Encuestas</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="button">
                <li class="">
                    <a href="../logout.php">
                        <i class='bx bx-log-out icons'></i>
                        <span class="text nav-text">Cerrar Sesion</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icons moon'></i>
                        <i class='bx bx-sun icons sun'></i>
                    </div>
                    <span class="mode-text text">Modo oscuro</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <section class="home">
        <div class="container">
            <div class="row-title">
                <div class="title">
                    <h1><a href="../encuesta.php">Crear preguntas</a></h1>
                    <h1 class="subtitle"><?php echo $Title; ?></h1>
                    <div class="button-crear">
                        <button class="hero__cta">Agregar Pregunta</button>
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
                            <th class="table-title">Tipo</th>
                            <th class="table-title">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $info = mysqli_query($con, "SELECT*FROM preguntas");
                        while ($row = mysqli_fetch_array($info)) {
                        ?>
                            <tr>
                                <td class="table-tareas"><a href="./mostraropciones.php"><?php echo $row['Titulo']; ?></a></td>
                                <td class="table-tareas"><?php echo $row['Tipo']; ?></td>
                                <td class="table-tareas">
                                    <form class="" action="" method="post">
                                        <button class="modificar">Modificar</button>
                                        <button type="submit" name="Delete" class="Delete">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--Crear Encuesta-->
        <section class="modal">
            <div class="modal__container">

                <h2 class="modal__title">Agregar nueva pregunta</h2>
                <form action="" method="POST">
                    <div class="form">
                        <div class="grupo">
                            <input type="text" name="Titulo" class="text formu" required><span class="barra"></span>
                            <label for="" class="text">Titulo</label>
                        </div>
                        <div class="grupo">
                            <select name="Tipo" class="formu">
                                <option value="option">Varias opciones</option>
                                <option value="select">Desplegable</option>
                                <option value="checkbok">Selección múltiple</option>
                                <option value="text">Texto</option>
                            </select>
                            <label for="" class="text">Tipo</label>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="submit" name="CreateOption" class="crear">Crear</button>
                        <button class="modal__close">Cerrar</button>
                    </div>
                </form>
            </div>
        </section>

        <!--Actualizar Encuesta-->
        <section class="modal2">
            <div class="modal_container">

                <h2 class="modal_title">Agregar nueva encuesta</h2>
                <form action="" method="POST">
                    <div class="form">
                        <div class="grupo">
                            <input type="text" name="Titulo" class="text formu" value="<?php echo $Pregunta; ?>"><span class="barra"></span>
                            <label for="" class="text">Titulo</label>
                        </div>
                        <div class="grupo">
                            <select name="Tipo" class="formu" value="<?php echo $Opcion; ?>">
                                <option value="option">Varias opciones</option>
                                <option value="select">Desplegable</option>
                                <option value="checkbok">Selección múltiple</option>
                                <option value="text">Texto</option>
                            </select>
                            <label for="" class="text">Tipo</label>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="submit" name="UpdatePregun" class="crear">Actualizar</button>
                        <button class="modal_close">Cerrar</button>
                    </div>
                </form>
            </div>
        </section>
    </section>
    <script src="../js/sidebar.js"></script>
    <script src="../js/modal.js"></script>
</body>

</html>