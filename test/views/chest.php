<?php
if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$_SESSION[Correo]'");
    while ($row = mysqli_fetch_assoc($user)) {
        $Genero = $row['Id_genero'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutina pecho</title>
</head>

<body>
    <section class="service contenedor" id="servicios">
        <?php if ($Genero == '1') : ?>
            <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria ='26' and Rutinas='Press de banca con barra'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Videos = $row['Videos'];

        ?>
            <h2 class="subtitulo">Rutina de pecho</h2>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-video">
                    <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span> Paso</h3>
                        <p class="text">Acuestese en el banco con los pies en el suelo. Con los brazos rectos </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> Paso</h3>
                        <p class="text">Baja la barra hasta la mitad del pecho.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Levanta la barra hasta que hayas bloqueado los codos.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria ='26' and Rutinas='Fondos'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Rutina = $row['Rutinas'];
            $Videos = $row['Videos'];
            $Description = $row['Descripcion'];
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-video">
                    <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span> Paso</h3>
                        <p class="text">Sostenga su cuerpo con los brazos bloqueados por encima del equipo.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> Paso</h3>
                        <p class="text">Baje su cuerpo lentamente mientras se inclina hacia adelante, ensanche los codos</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Levanta tu cuerpo por encima de las barras hasta que tus brazos estén bloqueados.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria ='26' and Rutinas='Press banca inclinado'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Rutina = $row['Rutinas'];
            $Videos = $row['Videos'];
            $Description = $row['Descripcion'];
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-video">
                    <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span>paso</h3>
                        <p class="text">Coloque el banco entre 30 y 45 grados, acuéstese sobre el banco con los pies en el suelo. Con los brazos rectos desmonta la barra.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> paso</h3>
                        <p class="text">Baje la barra a la mitad de su pecho</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Levanta la barra (lentamente y de forma controlada) hasta que hayas bloqueado los codos.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria ='26' and Rutinas='Aperturas con mancuernas'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Rutina = $row['Rutinas'];
            $Videos = $row['Videos'];
            $Description = $row['Descripcion'];
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-video">
                    <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span>paso</h3>
                        <p class="text">Acuéstese en el banco y coloque los pies en el suelo,y Comience el ejercicio con las mancuernas juntas sobre su pecho, los codos ligeramente doblados.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> paso</h3>
                        <p class="text">Simultáneamente, baje los pesos a ambos lados.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Haga una pausa cuando las pesas estén paralelas al banco, luego levante los brazos a la posición inicial.</p>
                    </div>
                </div>
            <?php } ?>
        <?php else : ?>    

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria ='2' and Rutinas='Press de banca con barra'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Videos = $row['Videos'];

        ?>
            <h2 class="subtitulo">Rutina de pecho</h2>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-video">
                    <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span> Paso</h3>
                        <p class="text">Acuestese en el banco con los pies en el suelo. Con los brazos rectos </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> Paso</h3>
                        <p class="text">Baja la barra hasta la mitad del pecho.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Levanta la barra hasta que hayas bloqueado los codos.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria ='2' and Rutinas='Fondos'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Rutina = $row['Rutinas'];
            $Videos = $row['Videos'];
            $Description = $row['Descripcion'];
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-video">
                    <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span> Paso</h3>
                        <p class="text">Sostenga su cuerpo con los brazos bloqueados por encima del equipo.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> Paso</h3>
                        <p class="text">Baje su cuerpo lentamente mientras se inclina hacia adelante, ensanche los codos</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Levanta tu cuerpo por encima de las barras hasta que tus brazos estén bloqueados.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria ='2' and Rutinas='Press banca inclinado'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Rutina = $row['Rutinas'];
            $Videos = $row['Videos'];
            $Description = $row['Descripcion'];
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-video">
                    <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span>paso</h3>
                        <p class="text">Coloque el banco entre 30 y 45 grados, acuéstese sobre el banco con los pies en el suelo. Con los brazos rectos desmonta la barra.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> paso</h3>
                        <p class="text">Baje la barra a la mitad de su pecho</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Levanta la barra (lentamente y de forma controlada) hasta que hayas bloqueado los codos.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria ='2' and Rutinas='Aperturas con mancuernas'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Rutina = $row['Rutinas'];
            $Videos = $row['Videos'];
            $Description = $row['Descripcion'];
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-video">
                    <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span>paso</h3>
                        <p class="text">Acuéstese en el banco y coloque los pies en el suelo,y Comience el ejercicio con las mancuernas juntas sobre su pecho, los codos ligeramente doblados.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> paso</h3>
                        <p class="text">Simultáneamente, baje los pesos a ambos lados.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Haga una pausa cuando las pesas estén paralelas al banco, luego levante los brazos a la posición inicial.</p>
                    </div>
                </div>
            <?php } ?>
            <?php endif; ?>
    </section>
    <div class="checklist-servicio">
        <div class="service">
            <a href="fisico.php">
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