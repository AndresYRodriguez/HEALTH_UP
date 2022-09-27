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
    <link rel="icon" href="../CSS/IMG/logo-health_up.png">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <link rel="stylesheet" href="../CSS/chest.css">
    <title>Rutina triceps</title>
</head>

<body>
    
    <section class="service contenedor" id="servicios">
       <h2 class="subtitulo">Triceps</h2>
       <?php if($Genero == '1') : ?>
        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas='Extensión de triceps en cable'";
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
                   <p class="text">Sujete la barra de la polea con las palmas hacia abajo al ancho de los hombros.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Párese derecho con una pequeña inclinación hacia adelante. Mantenga la parte superior de sus brazos cerca de su cuerpo y baje lentamente la barra de la polea hasta que sus brazos estén completamente extendidos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Haga una pausa cuando esté en la posición contraída del movimiento, luego levante lentamente la barra de la polea hasta el punto de inicio.</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas='Fondos'";
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
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas='Press con agarre cerrado'";
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
                   <p class="text">Acuéstese en el banco con los pies en el suelo. Con un agarre estrecho en la barra, estire los brazos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Baje la barra a la mitad inferior del pecho</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Levanta lentamente la barra hasta que hayas bloqueado los codos.</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='22' and Rutinas='Press frances'";
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
                   <p class="text">Acuéstese en un banco plano mientras sostiene una barra con un agarre al ancho de los hombros, Extienda completamente los codos hasta que la barra esté directamente sobre su pecho.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Comience a flexionar los codos y permita que la barra casi toque su frente.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Extienda los codos de regreso a la posición inicial y repita.</p>
               </div>
           </div>
           <?php } ?>
       <?php else : ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='6' and Rutinas='Extensión de triceps en cable'";
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
                   <p class="text">Sujete la barra de la polea con las palmas hacia abajo al ancho de los hombros.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Párese derecho con una pequeña inclinación hacia adelante. Mantenga la parte superior de sus brazos cerca de su cuerpo y baje lentamente la barra de la polea hasta que sus brazos estén completamente extendidos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Haga una pausa cuando esté en la posición contraída del movimiento, luego levante lentamente la barra de la polea hasta el punto de inicio.</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='6' and Rutinas='Fondos'";
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
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='6' and Rutinas='Press con agarre cerrado'";
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
                   <p class="text">Acuéstese en el banco con los pies en el suelo. Con un agarre estrecho en la barra, estire los brazos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Baje la barra a la mitad inferior del pecho</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Levanta lentamente la barra hasta que hayas bloqueado los codos.</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='6' and Rutinas='Press frances'";
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
                   <p class="text">Acuéstese en un banco plano mientras sostiene una barra con un agarre al ancho de los hombros, Extienda completamente los codos hasta que la barra esté directamente sobre su pecho.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Comience a flexionar los codos y permita que la barra casi toque su frente.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Extienda los codos de regreso a la posición inicial y repita.</p>
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
