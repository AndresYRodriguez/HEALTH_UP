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
    <title>Rutina Abdomen</title>
</head>

<body>
    <section class="service contenedor" id="servicios">
        <h2 class="subtitulo">Abdomen</h2>
        <?php if ($Genero == '1') : ?>
        
            <?php
                $consulta = "SELECT*FROM fisica WHERE Id_categoria='24' and Rutinas='Abdominales'";
                $resultado = mysqli_query($con, $consulta);

                while ($row = mysqli_fetch_array($resultado)) {
                $Videos = $row['Videos'];

            ?>
       <div class="contenedor-servicio">
           <div class="contenedor-servicio-video">
                <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
           </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span> Paso</h3>
                   <p class="text">Acuéstese boca arriba con las rodillas dobladas y los pies apoyados en el suelo, aproximadamente a un pie de la parte inferior de la espalda.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Coloque las yemas de los dedos en las sienes con las palmas hacia afuera.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Lleve su vientre a la base de su columna vertebral para activar los músculos, luego levante la cabeza y los hombros del piso. Vuelve a la posición inicial y repite</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='24' and Rutinas='Elevación de piernas'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Videos = $row['Videos'];

        ?>
       <div class="contenedor-servicio">
           <div class="contenedor-servicio-video">
                <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
           </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span> Paso</h3>
                   <p class="text">Acuéstese boca arriba con las palmas de los brazos hacia abajo a cada lado,mantenga las piernas juntas y lo más rectas posible.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Lentamente levante las piernas hasta un ángulo de 90°, haga una pausa en esta posición, o tan alto como pueda alcanzar sus piernas, y luego baje lentamente las piernas hacia abajo.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">La duración de estos movimientos debe ser lenta para que no utilice el impulso, lo que le permite aprovechar al máximo el ejercicio.</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='24' and Rutinas='Elevación de piernas en barra'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Videos = $row['Videos'];

        ?>
       <div class="contenedor-servicio">
           <div class="contenedor-servicio-video">
                <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
           </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Coge la barra y cuélgate, el cuerpo quieto y las piernas rectas.Lleve lentamente las rodillas hacia el pecho</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Una vez que haya levantado las rodillas lo más alto posible, baje las piernas y repita. La duración de estos movimientos debe ser lenta para que no utilice el impulso, lo que le permite aprovechar al máximo el ejercicio.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">La duración de estos movimientos debe ser lenta para que no utilice el impulso, lo que le permite aprovechar al máximo el ejercicio.s</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
        <?php else : ?>
        
            <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='15' and Rutinas='Abdominales'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Videos = $row['Videos'];

        ?>
       <div class="contenedor-servicio">
           <div class="contenedor-servicio-video">
                <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
           </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span> Paso</h3>
                   <p class="text">Acuéstese boca arriba con las rodillas dobladas y los pies apoyados en el suelo, aproximadamente a un pie de la parte inferior de la espalda.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Coloque las yemas de los dedos en las sienes con las palmas hacia afuera.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Lleve su vientre a la base de su columna vertebral para activar los músculos, luego levante la cabeza y los hombros del piso. Vuelve a la posición inicial y repite</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='15' and Rutinas='Elevación de piernas'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Videos = $row['Videos'];

        ?>
       <div class="contenedor-servicio">
           <div class="contenedor-servicio-video">
                <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
           </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span> Paso</h3>
                   <p class="text">Acuéstese boca arriba con las palmas de los brazos hacia abajo a cada lado,mantenga las piernas juntas y lo más rectas posible.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Lentamente levante las piernas hasta un ángulo de 90°, haga una pausa en esta posición, o tan alto como pueda alcanzar sus piernas, y luego baje lentamente las piernas hacia abajo.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">La duración de estos movimientos debe ser lenta para que no utilice el impulso, lo que le permite aprovechar al máximo el ejercicio.</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='15' and Rutinas='Elevación de piernas en barra'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $Videos = $row['Videos'];

        ?>
       <div class="contenedor-servicio">
           <div class="contenedor-servicio-video">
                <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
           </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Coge la barra y cuélgate, el cuerpo quieto y las piernas rectas.Lleve lentamente las rodillas hacia el pecho</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Una vez que haya levantado las rodillas lo más alto posible, baje las piernas y repita. La duración de estos movimientos debe ser lenta para que no utilice el impulso, lo que le permite aprovechar al máximo el ejercicio.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">La duración de estos movimientos debe ser lenta para que no utilice el impulso, lo que le permite aprovechar al máximo el ejercicio.s</p>
               </div>
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