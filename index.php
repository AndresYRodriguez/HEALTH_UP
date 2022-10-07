<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="icon" href="CSS/IMG/logo-health_up.png">
    <title>Acerca | Health_up</title>
</head>

<body>
    <header class="header" id="inicio">
        <img src="CSS/IMG/public/hola.svg" alt="" class="hola">
        <nav class="menu-navegacion">
            <a href="#inicio" style="color: #fff;">Inicio</a>
            <a href="#servicios" style="color: #fff" ;>Servicios</a>
            <a href="#portafolio" style="color: #fff">Portafolio</a>
            <a href="#expertos" style="color: #fff">Expertos</a>
            <a href="#contacto" style="color: #fff">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Conviertete en tu mejor version</h1>
            <div class="link">
                <a href="signin.php" class="btn">
                    <p class="copy">Healt up</p>
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="service contenedor" id="servicios">
            <h2 class="subtitulo">Nuestro servicio</h2>
            <div class="contenedor-servicio">
                <img src="CSS/IMG/public/grafico.svg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>Parte fisica</h3>
                        <p>acondicionamiento fisico para que tengas una mejor salud esto por medio de rutinas creadas especialmente para ti.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>Parte Socioemocional</h3>
                        <p>Ofrecemos servicio de acesoramiento socioemocional para que te sientas bien contigo mismo.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>parte fisica y socioemocional</h3>
                        <p>Ofrecemos rutinas y videos por las cuales puede aprender la tecnica correcta y tambien esta especializado segun su nivel de dificultad.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Galeria</h2>
                <div class="contenedor-galeria">
                    <img src="CSS/IMG/public/uno.jpg" alt="" height="250px" width="250px" class="img-galeria">
                    <img src="CSS/IMG/public/dos.jpg" alt="" height="250px" width="250px" class="img-galeria">
                    <img src="CSS/IMG/public/tres.jpg" alt="" height="250px" width="250px" class="img-galeria">
                    <img src="CSS/IMG/public/fours.jpg" height="250px" width="250px" alt="" class="img-galeria">
                    <img src="CSS/IMG/public/cinco.jpg" height="250px" width="250px" alt="" class="img-galeria">
                    <img src="CSS/IMG/public/seis.jpg" height="250px" width="250px" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <section class="imagen-light">
            <img src="CSS/IMG/public/close.svg" alt="" class="close">
            <img src="CSS/IMG/public/kaneki.jpg" alt="" class="agregar-imagen">
        </section>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="CSS/IMG/public/emocional.svg" alt="">
                    <h3 class="n-expert">Socioemocional</h3>
                </div>
                <div class="cont-expert">
                    <img src="CSS/IMG/public/Fitness.svg" alt="">
                    <h3 class="n-expert">Ejercicio</h3>
                </div>
            </section>
        </section>
    </main>
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Healt up</h2>
                <p>somos expertos es crear tu mejor version</p>
            </div>
            <div class="social-media">
                <a href="https://web.facebook.com/Helath_up-103442115724138" class="social-media-icon">
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
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>

</html>