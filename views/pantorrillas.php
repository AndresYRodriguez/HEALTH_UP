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
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <link rel="stylesheet" href="../CSS/chest.css">
    <title>Rutina pantorillas</title>
</head>

<body>
    
    <section class="service contenedor" id="servicios">
       <h2 class="subtitulo">Pantorrillas</h2>
       <?php if($Genero == '1') : ?>
        <h2 class="subtitulo">En desarrollo</h2>
        <?php
            $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas=''";
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
                   <p class="text">Ponte de pie con los pies en el suelo. Puede colocar las puntas de los pies sobre un plato para ampliar el rango de movimiento.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Imagina que tienes una cuerda atada a tus talones y jala tus talones hacia el techo.</p>
               </div>
               <div class="service">
                   <h3 class="n-service">Recuerda hacer el movimiento de manera controlada y hacerlo en un rango correcto<span class="number">3</span> paso</h3>
                   <p class="text"></p>
               </div>
            </div>
        </div>
        <?php } ?>

        <?php
            $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas=''";
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
                   <p class="text">Póngase cómodo en la máquina, luego coloque la parte inferior de los muslos debajo de la palanca acolchada. Coloque los dedos de los pies y las puntas de los pies sobre los soportes para los pies.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Evite que el peso se deslice hacia adelante agarrando las manijas y suelte la barra de seguridad. Baje el peso hasta que sus pantorrillas estén extendidas.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Empuje los talones hacia arriba para levantar la palanca acolchada y mantener la posición contraída, luego baje lentamente hasta la posición inicial. Repetir.</p>
               </div>
            </div>
        </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas=''";
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
                   <p class="text">Toma una barra destras de la nuca y apoyala en el trapecio</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">levanta lentamente de las puntas de los pies al llegar arriba haz una pausa de 2 segundos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">baja lentamente y repite.</p>
               </div>
           </div>
       </div>
       <?php } ?>
       <?php else : ?>

        <h2 class="subtitulo">En desarrollo</h2>
            <?php
            $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas=''";
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
                   <p class="text">Ponte de pie con los pies en el suelo. Puede colocar las puntas de los pies sobre un plato para ampliar el rango de movimiento.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Imagina que tienes una cuerda atada a tus talones y jala tus talones hacia el techo.</p>
               </div>
               <div class="service">
                   <h3 class="n-service">Recuerda hacer el movimiento de manera controlada y hacerlo en un rango correcto<span class="number">3</span> paso</h3>
                   <p class="text"></p>
               </div>
            </div>
        </div>
        <?php } ?>

        <?php
            $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas=''";
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
                   <p class="text">Póngase cómodo en la máquina, luego coloque la parte inferior de los muslos debajo de la palanca acolchada. Coloque los dedos de los pies y las puntas de los pies sobre los soportes para los pies.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Evite que el peso se deslice hacia adelante agarrando las manijas y suelte la barra de seguridad. Baje el peso hasta que sus pantorrillas estén extendidas.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Empuje los talones hacia arriba para levantar la palanca acolchada y mantener la posición contraída, luego baje lentamente hasta la posición inicial. Repetir.</p>
               </div>
            </div>
        </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas=''";
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
                   <p class="text">Toma una barra destras de la nuca y apoyala en el trapecio</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">levanta lentamente de las puntas de los pies al llegar arriba haz una pausa de 2 segundos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">baja lentamente y repite.</p>
               </div>
           </div>
       </div>
       <?php } ?>
<?php endif; ?>
   </section>
   <div class="checklist-servicio">
   <div class="service">
       <a href="./fisico.php">
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