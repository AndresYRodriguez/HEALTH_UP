<?php
require '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../CSS/IMG/logo-health_up.png">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <link rel="stylesheet" href="../CSS/ira.css">
    <title>Miedo</title>
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
                        <a href="../perfil.php?Id_user=?">
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
                    <li class="nav-link">
                        <a href="../encuesta.php">
                            <i class='bx bx-pie-chart-alt-2 icons'></i>
                            <span class="text nav-text">Encuestas</span>
                        </a>
                    </li>
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
        <section class="service contenedor" id="servicios">
                <?php
                $consulta = "SELECT*FROM socioemocional WHERE Titulo='Nómbralo y domínalo'";
                $resultado = mysqli_query($con, $consulta);

                while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                    <main>
                        <div class="contenedor-servicio">
                            <div class="contenedor-servicio-multimedia">
                                <div class="video">
                                    <h2 class="multimedia">
                                        <video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>
                                    </h2>
                                    <div class="audio">
                                        <h2 class="multimedia">
                                            <audio src="data:Audio/mp3;base64, <?php echo base64_encode($row['Audios']); ?>" controls='controls' muted></audio>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="checklist-servicio">
                                <div class="service">
                                    <h2 class="subtitulo"><?php echo $row['Titulo']; ?> </h2>
                                    <h3 class="n-service"><span class="number">1</span>paso</h3>
                                    <p class="text">Para poder combatir con el miedo que te aflige debes primero saber cual es, para este ejercicio lo primero que vamos a hacer es determinar cual es tu miedo piensa que es lo que te da temor que no puedes superar y que permanece oculto en tu subconsciente,una ves lo determines sigue al siguiente paso</p>
                                    <h3 class="n-service"><span class="number">2</span>paso</h3>
                                    <p class="text">Ya determinado el miedo debes llamarlo darle un nombre puede ayudar a que tengas un objetivo y no un punto abstracto con el cual trabajar debes en todo momento recordar que tu eres ,mas fuerte que el miedo que tienes.</p>
                                    <h3 class="n-service"><span class="number">3</span>paso</h3>
                                    <p class="text">Como ultimo paso vete exponiendo de una manera progresiva y en un entorno controlado a tu miedo,por ejemplo si tu miedo es el hablar con alguien poco a poco incorpora hábitos que te ayuden a superarlo por ejemplo saluda a tu vecinos, después puedes intentar con tus compañeros mas cercanos y asi poco a poco vas a ir progresando hasta que ya lo puedas superar.</p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php
                        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Vive fuera de tu Zona comfort'";
                        $resultado = mysqli_query($con, $consulta);

                        while ($row = mysqli_fetch_assoc($resultado)) {
                        ?>
                            <div class="contenedor-servicio">
                                <div class="contenedor-servicio-multimedia">
                                    <div class="video">
                                        <h2 class="multimedia">Video</h2>
                                        <video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>
                                    </div>
                                    <div class="audio">
                                        <h2 class="muñtimedia">Audio</h2>
                                        <audio src="data:Audio/mp3;base64, <?php echo base64_encode($row['Audios']); ?>" controls='controls' muted></audio>
                                    </div>
                                </div>
                                <div class="checklist-servicio">
                                    <div class="service">
                                        <h2 class="subtitulo"><?php echo $row['Titulo']; ?></h2>
                                        <h3 class="n-service"><span class="number">1</span>paso</h3>
                                        <p class="text">Este paso es un complemento del anterior pero vive fuera de tu zona de confort, con esto nos referimos a que inicialmente delimita cual es tu zona de confort,una ves la tengas delimitada mira como puedes salir de ella esto con el fin de expandirla.</p>
                                        <h3 class="n-service"><span class="number">2</span>paso</h3>
                                        <p class="text">Encuentra una zona de tu vida la cual sea cómoda y quieras mejorar, ahora busca como la puedes expandir, en este paso lo que necesitas es probar sensaciones nuevas y salir de tu rutina habitual.</p>
                                        <h3 class="n-service"><span class="number">3</span>paso</h3>
                                        <p class="text">trata de ir poco a poco para que no te satures recuerda que esto es un proceso y necesita de tiempo y como dicen popularmente, "Roma no se construyo en un día".</p>
                                       
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            $consulta = "SELECT*FROM socioemocional WHERE Titulo='Pida ayuda'";
                            $resultado = mysqli_query($con, $consulta);

                            while ($row = mysqli_fetch_assoc($resultado)) {
                            ?>
                                <div class="contenedor-servicio">
                                    <div class="contenedor-servicio-multimedia">
                                        <div class="video">
                                            <h2 class="multimedia">Video</h2>
                                            <video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>
                                        </div>
                                        <div class="audio">
                                            <h2 class="muñtimedia">Audio</h2>
                                            <audio src="data:Audio/mp3;base64, <?php echo base64_encode($row['Audios']); ?>" controls='controls' muted></audio>
                                        </div>
                                    </div>
                                    <div class="checklist-servicio">
                                        <div class="service">
                                            <h2 class="subtitulo"> <?php echo $row['Titulo']; ?></h2>
                                            <h3 class="n-service"><span class="number">1</span>paso</h3>
                                            <p class="text">Si en algún momento sientes que tu miedo te supero completamente recuerda que no estas solo y puedes pedir ayuda.</p>
                                            <h3 class="n-service"><span class="number">2</span>paso</h3>
                                            <p class="text">Recuerda que puedes pedir ayuda para solventarte a tus seres queridos cómo pueden ser amigos, familia y demás.</p>
                                            <h3 class="n-service"><span class="number">3</span>paso</h3>
                                            <p class="text">Recuerda que si esto no es suficiente también puedes contactar con un profesional en el tema para que te ayude con tu caso.</p>
                                        </div>
                                    </div>
                                <?php } ?>
        </section>
        <div class="checklist-servicio">
            <div class="service">
                <a href="../socioemocional.php">
                    <h1 class="links">Fin de la rutina</h1>
                </a>
            </div>
        </div>
        <footer id="contacto">
            <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">Healt up</h2>
                    <p>somos expertos es crear tu mejor version</p>
                </div>
                <div class="social-media">
                    <a href="https://www.facebook.com/Helath_up-103442115724138?_rdc=1&_rdr" class="social-media-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://www.instagram.com/healthup_oficial/" class="social-media-icon">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://twitter.com/HEALTHUP14" class="social-media-icon">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </div>
            </div>
            <div class="line"></div>
        </footer>
    </section>
</body>

</html>