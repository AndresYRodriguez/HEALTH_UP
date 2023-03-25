<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estres</title>
</head>

<body>
    <section class="service contenedor" id="servicios">
        <h2 class="subtitulo">Rutina de control de Estres</h2>
        <?php
        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Respiraciones profundas'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <h2 class="subtitulo">Estres</h2>
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
                        <h2 class="subtitulo"><?php echo $row['Titulo'] ?></h2>
                        <h3 class="n-service"><span class="number">1</span> Paso</h3>
                        <p class="text">Siéntese o acuéstese y coloque una mano sobre su estómago. Coloque su otra mano sobre su corazón.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> Paso</h3>
                        <p class="text">Inhale lentamente hasta que sienta que su estómago se eleva, Aguante la respiración por un momento.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Exhale lentamente, sintiendo su estómago descender.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Meditación'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="contenedor-servicio">
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
                            <h2 class="subtitulo"><?php echo $row['Titulo'] ?></h2>
                            <h3 class="n-service"><span class="number">1</span> Paso</h3>
                            <p class="text">Atención enfocada. Usted puede concentrarse en su respiración, en un objeto o en un conjunto de palabras, silencio. La mayor parte de la meditación se realiza en lugares silenciosos para limitar las distracciones.</p>
                        </div>
                        <div class="service">
                            <h3 class="n-service"><span class="number">2</span> Paso</h3>
                            <p class="text">Posición corporal. La mayoría de las personas cree que la meditación se lleva a cabo sentado, pero también se puede hacer acostado, caminando o de pie. una actitud abierta. Esto significa que usted se mantenga abierto a los pensamientos que vengan a su mente durante la meditación. En lugar de juzgar estos pensamientos, usted los deja pasar llevando su atención de vuelta a su concentración.</p>
                        </div>
                        <div class="service">
                            <h3 class="n-service"><span class="number">3</span> paso</h3>
                            <p class="text">Respiración relajada. Durante la meditación, usted debe respirar de manera lenta y tranquila. Esto también lo ayuda a relajarse.</p>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php
            $consulta = "SELECT*FROM socioemocional WHERE Titulo='Relajación progresiva'";
            $resultado = mysqli_query($con, $consulta);

            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="contenedor-servicio">
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
                                <h2 class="subtitulo"><?php echo $row['Titulo'] ?></h2>
                                <h3 class="n-service"><span class="number">1</span>paso</h3>
                                <p class="text">Esta es otra técnica simple que usted puede hacer casi en cualquier lugar. Comenzando por sus pies y los dedos de estos, concéntrese en apretar sus músculos por unos cuantos momentos.</p>
                            </div>
                            <div class="service">
                                <h3 class="n-service"><span class="number">2</span> paso</h3>
                                <p class="text">recuerde mantener un momento sus músculos en cierta tensión</p>
                            </div>
                            <div class="service">
                                <h3 class="n-service"><span class="number">3</span> paso</h3>
                                <p class="text">y luego liberarlos. Continúe con este proceso, avanzando hacia la parte superior de su cuerpo, concentrándose en un grupo de músculos a la vez, esto le ayudara liberar presión aparte de poder liberación y por ende relajación.</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
    </section>
    <div class="checklist-servicio">
        <div class="service">
            <a href="./socioemocional.php">
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