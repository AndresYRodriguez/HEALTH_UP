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
        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Expresa tu enojo'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $Videos = $row['Videos'];
        ?>
            <main>
                <div class="contenedor-servicio">
                    <div class="contenedor-servicio-multimedia">
                        <div class="video">
                            <h2 class="muñtimedia">Video</h2>
                            <?php echo ("<video src='$Videos' controls='controls' autoplay muted height='250px' width='420px'/>"); ?>
                            <!--<video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>-->
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
                            <p class="text">Una vez ya estés algo más calmado y tengas la mente menos centrada en la ira del momento, haz una pequeña reflexión de en donde encuentres inicialmente cuál fue la causa de tu ira.</p>
                            <h3 class="n-service"><span class="number">2</span>paso</h3>
                            <p class="text">Una vez ya estés algo más calmado y tengas la mente menos centrada en la ira del momento, haz una pequeña reflexión de en donde encuentres inicialmente cuál fue la causa de tu ira.</p>
                            <h3 class="n-service"><span class="number">3</span>paso</h3>
                            <p class="text">Por ultimo después de tu reflexión deja salir tus pensamientos y sentimientos para asi no tenerlos adentro ya que esto a la larga pueden hacerte daño.</p>
                        </div>
                    </div>
                <?php } ?>

                <?php
                $consulta = "SELECT*FROM socioemocional WHERE Titulo='Haz algo de ejercicio'";
                $resultado = mysqli_query($con, $consulta);

                while ($row = mysqli_fetch_assoc($resultado)) {
                    $Videos = $row['Videos'];
                ?>
                    <div class="contenedor-servicio">
                        <div class="contenedor-servicio-multimedia">
                            <div class="video">
                                <h2 class="muñtimedia">Video</h2>
                                <?php echo ("<video src='$Videos' controls='controls' autoplay muted height='250px' width='420px'/>"); ?>
                                <!--<video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>-->
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
                                <p class="text">La actividad física puede ayudar a reducir el estrés que puede causarte ira. Si sientes que la ira está aumentando, sal a dar una caminata vigorosa o a correr. O haz alguna actividad física que disfrutes durante algún tiempo</p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php
                    $consulta = "SELECT*FROM socioemocional WHERE Titulo='Cuenta hasta sentirte mejor'";
                    $resultado = mysqli_query($con, $consulta);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $Videos = $row['Videos'];
                    ?>
                        <div class="contenedor-servicio">
                            <div class="contenedor-servicio-multimedia">
                                <div class="video">
                                    <h2 class="muñtimedia">Video</h2>
                                    <?php echo ("<video src='$Videos' controls='controls' autoplay muted height='250px' width='420px'/>"); ?>
                                    <!--<video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>-->
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
                                    <p class="text">Este es uno de los pasos más fáciles y lo más probable es que lo hayas escuchado,en lo que consiste esta parte de la rutina es que cuando te sientas enojado para centrarte en otra cosa y calmarte empieza a contar del 1 al 20.</p>
                                    <h3 class="n-service"><span class="number">2</span>paso</h3>
                                    <p class="text">Mientras estés en el proceso de contar recuerda centrarte en los números aparte de respirar de una manera calmada y profunda.</p>
                                    <h3 class="n-service"><span class="number">3</span>paso</h3>
                                    <p class="text">Cuenta hasta el número que sea necesario y hasta que te sientas más centrado.</p>
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
                <a href="https://twitter.com/HEALTHUP14" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>
</body>

</html>