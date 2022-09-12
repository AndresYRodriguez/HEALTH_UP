<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chest</title>
</head>

<body>
    <section class="service contenedor" id="servicios">
        <h2 class="subtitulo">Rutina de control de ira</h2>
        <?php
        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Mejora tu comunicacion'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $Titulo = $row['Titulo'];
            $Videos = $row['Videos'];
            $Audios = $row['Audios'];
            $Description = $row['Descripcion'];
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-multimedia">
                    <div class="video">
                        <h2 class="muñtimedia">Video</h2>
                        <?php echo ("<video src='$Videos' controls='controls' autoplay muted height='250px' width='420px'/>"); ?>
                    </div>
                    <div class="audio">
                        <h2 class="muñtimedia">Audio</h2>
                        <?php echo "<audio src='$Audios' controls='controls' muted></audio>"; ?>
                    </div>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo ("$Titulo"); ?></h2>
                        <h3 class="n-service"><span class="number">1</span>paso</h3>
                        <p class="text"><?php echo ("$Description"); ?></p>
                    </div>
                </div>
            <?php } ?>

            <?php
            $consulta = "SELECT*FROM socioemocional WHERE Titulo='Mejora tu comunicacion'";
            $resultado = mysqli_query($con, $consulta);

            while ($row = mysqli_fetch_assoc($resultado)) {
                $Titulo = $row['Titulo'];
                $Videos = $row['Videos'];
                $Audios = $row['Audios'];
                $Description = $row['Descripcion'];
            ?>
                <main>
                    <div class="contenedor-servicio">
                        <img src="./CSS/IMG/public/expresion.gif" height="350px" width="420px" alt="">
                        <div class="checklist-servicio">
                            <div class="service">
                                <h2 class="subtitulo">Una vez que te hayas calmado, expresa tu malestar</h2>
                                <h3 class="n-service"><span class="number">1</span>paso</h3>
                                <p class="text">Tan pronto puedas pensar con claridad, expresa tu frustración de una manera asertiva, pero sin generar confrontación. Habla de tus preocupaciones y necesidades de forma clara y directa, sin lastimar a otros ni tratar de controlarlos.</p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php
                    $consulta = "SELECT*FROM socioemocional WHERE Titulo='Mejora tu comunicacion'";
                    $resultado = mysqli_query($con, $consulta);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $Titulo = $row['Titulo'];
                        $Videos = $row['Videos'];
                        $Audios = $row['Audios'];
                        $Description = $row['Descripcion'];
                    ?>
                        <div class="contenedor-servicio">
                            <img src="./CSS/IMG/public/calentar.gif" height="350px" width="420px" alt="">
                            <div class="checklist-servicio">
                                <div class="service">
                                    <h2 class="subtitulo">Haz algo de ejercicio</h2>
                                    <h3 class="n-service"><span class="number">1</span>paso</h3>
                                    <p class="text">La actividad física puede ayudar a reducir el estrés que puede causarte ira. Si sientes que la ira está aumentando, sal a dar una caminata vigorosa o a correr. O haz alguna actividad física que disfrutes durante algún tiempo</p>
                                </div>
                            </div>
                        <?php } ?>

                        <?php
                        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Mejora tu comunicacion'";
                        $resultado = mysqli_query($con, $consulta);

                        while ($row = mysqli_fetch_assoc($resultado)) {
                            $Titulo = $row['Titulo'];
                            $Videos = $row['Videos'];
                            $Audios = $row['Audios'];
                            $Description = $row['Descripcion'];
                        ?>
                            <div class="contenedor-servicio">
                                <img src="./CSS/IMG/public/razon.gif" height="350px" width="420px" alt="">
                                <div class="checklist-servicio">
                                    <div class="service">
                                        <h2 class="subtitulo">Racionaliza la situación para controlar la ira</h2>
                                        <h3 class="n-service"><span class="number">1</span>paso</h3>
                                        <p class="text">Cuando la ira empieza a dominar no es posible pensar con claridad. Esto es un problema que tiene solución. En primer lugar, procura evitar las palabras “nunca” y “siempre”. Si justificas el enojo, no podrás solucionar el problema. De esta forma, cambia el “siempre me enojo cuando llego tarde” o el “nunca puedo estar sereno en un atasco” por un “haré lo posible por serenarme la próxima vez que no llegue a tiempo o que quede atascado en la carretera”.</p>
                                    </div>
                                </div>
                            <?php } ?>
    </section>
    <div class="checklist-servicio">
        <div class="service">
            <a href="socioemocional.php">
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
            </div>
        </div>
        <div class="line"></div>
    </footer>
</body>

</html>