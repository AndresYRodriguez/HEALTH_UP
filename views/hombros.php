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
    <title>Rutina hombro</title>
</head>

<body>
    <section class="service contenedor" id="servicios">
        <h2 class="subtitulo">Hombro</h2>
        <?php if ($Genero == '1') : ?>
        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='20' and Rutinas='Press militar'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
       <div class="contenedor-servicio">
       <div class="contenedor-servicio-video">
                <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
           </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span> Paso</h3>
                   <p class="text">Mantenga el ancho de los hombros separados. Debe haber una línea recta desde el codo hasta la mano (espacio horizontal).</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Tire de la barbilla hacia atrás y empuje el peso hacia el techo, estirando los codos y encorvando los hombros.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Presiona hasta que tus codos estén extendidos y empuja tu cabeza ligeramente hacia adelante.seguidamente,vuelve a la posición inicial con control. Tirando de la barbilla hacia atrás para permitir que la barra pase por tu cara de forma segura.</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='20' and Rutinas='Press militar sentado y con mancuernas'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
       <div class="contenedor-servicio">
       <div class="contenedor-servicio-video">
            <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
        </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span> Paso</h3>
                   <p class="text">Siéntate boca arriba en el banco. Levanta las mancuernas a la altura de los hombros y las palmas hacia adelante.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Levanta las mancuernas hacia arriba y haz una pausa en la posición de contracción en el movimiento</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje las mancuernas a la posición inicial</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='20' and Rutinas='Elevaciones laterales'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
       <div class="contenedor-servicio">
       <div class="contenedor-servicio-video">
            <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
        </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Párese derecho con mancuernas a cada lado, con las palmas hacia las caderas</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Levanta los brazos a cada lado con una ligera flexión en el codo hasta que estén paralelos al suelo. Pausa en la parte superior del movimiento.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Lentamente baje los brazos a la posición inicial.</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='20' and Rutinas='Elevaciones horizontales'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
       <div class="contenedor-servicio">
       <div class="contenedor-servicio-video">
            <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
        </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Tome dos mancuernas de su preferencia mientras está de pie con las mancuernas a su lado.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Levanta las dos mancuernas con los codos completamente extendidos hasta que las mancuernas estén al nivel de los ojos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje las pesas de manera controlada a la posición inicial.</p>
               </div>
           </div>
           <?php } ?>
        
        <?php else : ?>
        
        <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='5' and Rutinas='Press militar'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
       <div class="contenedor-servicio">
       <div class="contenedor-servicio-video">
                <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
           </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span> Paso</h3>
                   <p class="text">Mantenga el ancho de los hombros separados. Debe haber una línea recta desde el codo hasta la mano (espacio horizontal).</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Tire de la barbilla hacia atrás y empuje el peso hacia el techo, estirando los codos y encorvando los hombros.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Presiona hasta que tus codos estén extendidos y empuja tu cabeza ligeramente hacia adelante.seguidamente,vuelve a la posición inicial con control. Tirando de la barbilla hacia atrás para permitir que la barra pase por tu cara de forma segura.</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='5' and Rutinas='Press militar sentado y con mancuernas'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
       <div class="contenedor-servicio">
       <div class="contenedor-servicio-video">
            <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
        </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span> Paso</h3>
                   <p class="text">Siéntate boca arriba en el banco. Levanta las mancuernas a la altura de los hombros y las palmas hacia adelante.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> Paso</h3>
                   <p class="text">Levanta las mancuernas hacia arriba y haz una pausa en la posición de contracción en el movimiento</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje las mancuernas a la posición inicial</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='5' and Rutinas='Elevaciones laterales'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
       <div class="contenedor-servicio">
       <div class="contenedor-servicio-video">
            <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
        </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Párese derecho con mancuernas a cada lado, con las palmas hacia las caderas</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Levanta los brazos a cada lado con una ligera flexión en el codo hasta que estén paralelos al suelo. Pausa en la parte superior del movimiento.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Lentamente baje los brazos a la posición inicial.</p>
               </div>
           </div>
       </div>
       <?php } ?>
       
       <?php
        $consulta = "SELECT*FROM fisica WHERE Id_categoria='5' and Rutinas='Elevaciones horizontales'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
       <div class="contenedor-servicio">
       <div class="contenedor-servicio-video">
            <video src="data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>" height="350px" width="420px" /*controls*/ autoplay muted loop></video>
        </div>
           <div class="checklist-servicio">
               <div class="service">
                   <h2 class="subtitulo"><?php echo $row['Rutinas']; ?></h2>
                   <h3 class="n-service"><span class="number">1</span>paso</h3>
                   <p class="text">Tome dos mancuernas de su preferencia mientras está de pie con las mancuernas a su lado.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">2</span> paso</h3>
                   <p class="text">Levanta las dos mancuernas con los codos completamente extendidos hasta que las mancuernas estén al nivel de los ojos.</p>
               </div>
               <div class="service">
                   <h3 class="n-service"><span class="number">3</span> paso</h3>
                   <p class="text">Baje las pesas de manera controlada a la posición inicial.</p>
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