<?php
require './config/config.php';
session_start();

if (!isset($_SESSION['Correo'])) {
    header("location:signin.php");
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="CSS/IMG/logo-health_up.png">
    <link rel="stylesheet" href="CSS/sidebar.css">
    <link rel="stylesheet" href="CSS/chest.css">
    <title>Rutinas de pecho</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="img-text">
                <span class="img">
                    <img src="CSS/IMG/logo-health_up.png" alt="logo-Health_up">
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
                        <a href="perfil.php?Id_user=<?php echo $_SESSION['Correo'] ?>">
                            <i class='bx bx-user icons'></i>
                            <span class="text nav-text">Perfil</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="home.php">
                            <i class='bx bx-home-alt-2 icons'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="fisico.php">
                            <i class='bx bx-walk icons'></i>
                            <span class="text nav-text">Fisico</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="socioemocional.php">
                            <i class='bx bx-happy icons'></i>
                            <span class="text nav-text">Socioemocional</span>
                        </a>
                    </li>
                    <?php if ($Type_User == 'admin') : ?>
                        <li class="nav-link">
                            <a href="encuesta.php">
                                <i class='bx bx-pie-chart-alt-2 icons'></i>
                                <span class="text nav-text">Crear encuesta</span>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-link">
                            <a href="encuesta.php">
                                <i class='bx bx-pie-chart-alt-2 icons'></i>
                                <span class="text nav-text">Encuestas</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="button">
                <li class="">
                    <a href="logout.php">
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
        <?php
        require './views/trapecio.php';
        ?>
    </section>
    <script src="js/sidebar.js"></script>
</body>

</html>