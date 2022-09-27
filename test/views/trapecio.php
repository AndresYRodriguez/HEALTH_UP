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
    <link rel="icon" href="../CSS/IMG/logo-health_up.png">
    <title>Rutina pecho</title>
</head>

<body>

    <section class="service contenedor" id="servicios">
       <h2 class="subtitulo">Trapecio</h2>
       <?php if($Genero == '1') : ?>
        <h2 class="subtitulo">En desarrollo</h2>
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
                   <p class="text">Párese con los pies separados al ancho de los hombros. Mantenga el arco natural de la espalda, apretando los trapecios y elevando el pecho,Agarra la barra sobre tus hombros y apóyate en la parte superior de tu espalda. Desenrolla la barra estirando las piernas y da un paso atrás.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Doble las rodillas mientras baja el peso sin alterar la forma de su espalda hasta que sus caderas estén debajo de sus rodillas.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Levanta la barra de regreso a la posición inicial, levanta con las piernas y exhala en la parte superior.</p>
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
                   <p class="text">Utilice un accesorio de barra. El cable debe colocarse hasta el fondo.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Póngase de pie con el accesorio en la mano, camine un par de pasos hacia atrás y asegúrese de estar de pie y no inclinarse hacia atrás.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Retraiga los omóplatos y luego extiéndalos para volver a la posición inicial.</p>
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
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Siéntese en un banco con mancuernas en ambas manos, con las palmas hacia el cuerpo y la espalda recta.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Eleve los hombros y mantenga la posición contraída en el vértice del movimiento.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje lentamente los hombros a la posición inicial.</p>
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
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Use un accesorio de manija en ambos lados del cruce. Con fijación de cable ajustada hasta el fondo.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Tome ambas manijas y asegúrese de estar centrado en la máquina. Deje que sus brazos cuelguen libremente.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Tire de los omóplatos hacia arriba y hacia las orejas. Deje que sus omóplatos vuelvan a la posición inicial.</p>
               </div>
           </div>
           <?php } ?>
       <?php else : ?> 
        <h2 class="subtitulo">En desarrollo</h2>
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
                   <p class="text">Párese con los pies separados al ancho de los hombros. Mantenga el arco natural de la espalda, apretando los trapecios y elevando el pecho,Agarra la barra sobre tus hombros y apóyate en la parte superior de tu espalda. Desenrolla la barra estirando las piernas y da un paso atrás.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Doble las rodillas mientras baja el peso sin alterar la forma de su espalda hasta que sus caderas estén debajo de sus rodillas.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Levanta la barra de regreso a la posición inicial, levanta con las piernas y exhala en la parte superior.</p>
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
                   <p class="text">Utilice un accesorio de barra. El cable debe colocarse hasta el fondo.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Póngase de pie con el accesorio en la mano, camine un par de pasos hacia atrás y asegúrese de estar de pie y no inclinarse hacia atrás.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Retraiga los omóplatos y luego extiéndalos para volver a la posición inicial.</p>
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
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Siéntese en un banco con mancuernas en ambas manos, con las palmas hacia el cuerpo y la espalda recta.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Eleve los hombros y mantenga la posición contraída en el vértice del movimiento.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje lentamente los hombros a la posición inicial.</p>
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
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Use un accesorio de manija en ambos lados del cruce. Con fijación de cable ajustada hasta el fondo.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Tome ambas manijas y asegúrese de estar centrado en la máquina. Deje que sus brazos cuelguen libremente.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Tire de los omóplatos hacia arriba y hacia las orejas. Deje que sus omóplatos vuelvan a la posición inicial.</p>
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