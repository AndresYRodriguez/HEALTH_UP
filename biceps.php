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

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Biceps Health_up</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="CSS/IMG/logo-health_up.png" alt="" class="icon">
            <div class="logo_name">HEALTH_UP</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>

        <li>
            <a href="perfil.php?Id_user=<?php echo $_SESSION['Correo'] ?>">
                <i class='bx bx-user'></i>
                <span class="links_name">Perfil</span>
            </a>
            <span class="tooltip">Perfil</span>
        </li>

        <li>
            <a href="home.php">
                <i class='bx bx-home-alt-2'></i>
                <span class="links_name">Inicio</span>
            </a>
            <span class="tooltip">Inicio</span>
        </li>

        <li>
            <a href="fisico.php">
                <i class='bx bx-run'></i>
                <span class="links_name">Fisico</span>
            </a>
            <span class="tooltip">Fisico</span>
        </li>

        <li>
            <a href="socioemocional.php">
                <i class='bx bx-happy'></i>
                <span class="links_name">Socioemocional</span>
            </a>
            <span class="tooltip">Socioemocional</span>
        </li>

        <?php if ($Type_User == 'admin') : ?>
            
        <?php else : ?>
            <li>
                <a href="encuesta.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Seguimiento</span>
                </a>
                <span class="tooltip">Seguimiento</span>
            </li>
        <?php endif; ?>

        <li>
            <a href="logout.php">
                <i class="bx bx-log-out icon"></i>
                <span class="text links_name">Cerrar sesion</span>
            </a>
            <span class="tooltip">Cerrar sesion</span>
        </li>

        <li class="mode">
            <div class="sun-moon">
                <i class="bx bx-moon moon"></i>
                <span class="mode-text text">Modo oscuro</span>
            </div>

            <div class="toggle-switch">
                <span class='switch'></span>
            </div>
        </li>

    </div>
    <section class="home-section">
        <?php
        require './views/biceps.php';
        ?>
    </section>
    <script src="js/sidebar.js"></script>
</body>

</html>