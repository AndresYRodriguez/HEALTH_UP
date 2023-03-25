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
    <title>Rutina espalda</title>
</head>

<body>

    <?php if ($Genero == '1') : ?>

        <section class="service contenedor" id="servicios">

       <h2 class="subtitulo">Espalda</h2>
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='19' and Rutinas='Dominadas'";
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
                   <p class="text">Sujete la barra con un agarre en pronación, con los brazos y los hombros completamente extendidos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Tire de su cuerpo hacia arriba hasta que su barbilla esté por encima de la barra.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje su cuerpo de nuevo a la posición inicial.</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='19' and Rutinas='Retracción de escapulas con barra'";
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
                   <p class="text">Coge una barra con un agarre en pronación o supinación a la anchura de los hombros, seguido a eso Inclínese hacia adelante a la altura de las caderas mientras mantiene la espalda plana</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Tire del peso hacia la parte superior del abdomen.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje el peso de manera controlada y repita</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='19' and Rutinas='Jalon al pecho'";
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
                   <p class="text">Agarra la barra con las palmas hacia adelante, tus manos deben estar separadas a una distancia mayor que el ancho de los hombros,Como tienes ambos brazos extendidos frente a ti sosteniendo la barra, lleva el torso hacia atrás unos 30 grados mientras sacas el pecho.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Tire de la barra hacia abajo hasta el nivel de la barbilla o un poco más abajo con un movimiento suave mientras aprieta los omóplatos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Después de un segundo de apretar, levante lentamente la barra a la posición inicial cuando sus brazos estén completamente extendidos.</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='19' and Rutinas='Remo con mancuernas'";
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
                   <p class="text">Agarra ambas mancuernas e inclínate hacia adelante a la altura de las caderas. Asegúrate de mantener la espalda plana</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Cuanto más cerca esté su torso del paralelo con el suelo, mayor será el rango de movimiento en su hombro. Cuanto mejores sean los resultados que obtendrá del ejercicio.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Deje que sus brazos cuelguen libremente y luego tire de la articulación del codo hacia el techo.</p>
               </div>
           </div>
           <?php } ?>
   </section>
   
        <?php else : ?>
    <section class="service contenedor" id="servicios">

       <h2 class="subtitulo">Espalda</h2>
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='8' and Rutinas='Dominadas'";
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
                   <p class="text">Sujete la barra con un agarre en pronación, con los brazos y los hombros completamente extendidos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Tire de su cuerpo hacia arriba hasta que su barbilla esté por encima de la barra.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje su cuerpo de nuevo a la posición inicial.</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='8' and Rutinas='Retracción de escapulas con barra'";
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
                   <p class="text">Coge una barra con un agarre en pronación o supinación a la anchura de los hombros, seguido a eso Inclínese hacia adelante a la altura de las caderas mientras mantiene la espalda plana</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Tire del peso hacia la parte superior del abdomen.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje el peso de manera controlada y repita</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='8' and Rutinas='Jalon al pecho'";
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
                   <p class="text">Agarra la barra con las palmas hacia adelante, tus manos deben estar separadas a una distancia mayor que el ancho de los hombros,Como tienes ambos brazos extendidos frente a ti sosteniendo la barra, lleva el torso hacia atrás unos 30 grados mientras sacas el pecho.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Tire de la barra hacia abajo hasta el nivel de la barbilla o un poco más abajo con un movimiento suave mientras aprieta los omóplatos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Después de un segundo de apretar, levante lentamente la barra a la posición inicial cuando sus brazos estén completamente extendidos.</p>
               </div>
           </div>
       </div>
       <?php } ?>

       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='8' and Rutinas='Remo con mancuernas'";
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
                   <p class="text">Agarra ambas mancuernas e inclínate hacia adelante a la altura de las caderas. Asegúrate de mantener la espalda plana</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Cuanto más cerca esté su torso del paralelo con el suelo, mayor será el rango de movimiento en su hombro. Cuanto mejores sean los resultados que obtendrá del ejercicio.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Deje que sus brazos cuelguen libremente y luego tire de la articulación del codo hacia el techo.</p>
               </div>
           </div>
           <?php } ?>
   </section>
   <?php endif; ?>
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
