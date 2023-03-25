<?php
require './config/config.php';
session_start();

if (!isset($_SESSION['Correo'])) {
    header("location:signin.php");
    session_destroy();
    die();
}

//User profile

if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$_SESSION[Correo]'");
    while ($row = mysqli_fetch_assoc($user)) {
        $Id_user = $row['Id_usuario'];
        $Nombres = $row['Nombres'];
        $Apellidos = $row['Apellidos'];;
        $Type_User = $row['Tipo_usuario'];;
    }
}

// ====== Guardar Encuesta ======
if (isset($_POST['Contestar'])) {
    $Resultado1 = trim($_POST['Opciones-Pregunta1']);
    $Resultado2 = trim($_POST['Opciones-Pregunta2']);
    $Resultado3 = trim($_POST['Opciones-Pregunta3']);
    $Resultado4 = trim($_POST['Opciones-Pregunta4']);
    $Resultado5 = trim($_POST['Opciones-Pregunta5']);

    $sql = mysqli_query($con, "INSERT INTO resultados(Id_usuario, Pregunta1, Pregunta2, Pregunta3, Pregunta4, Pregunta5) VALUES ('$Id_user','$Resultado1', '$Resultado2', '$Resultado3', '$Resultado4', '$Resultado5')");
    if ($sql) {
    } else {
        echo '<h3>No fue posible guardar la encuesta</h3>';
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
    <link rel="stylesheet" href="CSS/sidebar.css">
    <link rel="icon" href="CSS/IMG/logo-health_up.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Notificacion flotante -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Inicio Health_up</title>
</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <img src="CSS/IMG/logo-health_up.png" alt="" class="icon">
            <div class="logo_name">HEALTH_UP</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>

        <li>
            <a href="perfil.php">
                <i class='bx bx-user'></i>
                <span class="links_name">Perfil</span>
            </a>
            <span class="tooltip">Perfil</span>
        </li>

        <li>
            <a href="home.php">
                <i class='bx bx-home-alt-2'></i>
                <span class="links_name">Inicio</span>
            </a>
            <span class="tooltip">Inicio</span>
        </li>

        <li>
            <a href="fisico.php">
                <i class='bx bx-run'></i>
                <span class="links_name">Fisico</span>
            </a>
            <span class="tooltip">Fisico</span>
        </li>

        <li>
            <a href="socioemocional.php">
                <i class='bx bx-happy'></i>
                <span class="links_name">Socioemocional</span>
            </a>
            <span class="tooltip">Socioemocional</span>
        </li>

            <li>
                <a href="encuesta.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Seguimiento</span>
                </a>
                <span class="tooltip">Seguimiento</span>
            </li>


        <li>
            <a href="logout.php">
                <i class="bx bx-log-out icon"></i>
                <span class="text links_name">Cerrar sesion</span>
            </a>
            <span class="tooltip">Cerrar sesion</span>
        </li>

        <li class="mode">
            <div class="sun-moon">
                <i class="bx bx-moon moon"></i>
                <span class="mode-text text">Modo oscuro</span>
            </div>

            <div class="toggle-switch">
                <span class='switch'></span>
            </div>
        </li>

    </div>
    <section class="home-section">


            <!-- Muestra el modal si el usuario ha iniciado sesión -->
            <div class="modal fade" id="ModalEncuesta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Encuesta del dia de hoy</h1>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <?php
                                $PreEncu = mysqli_query($con, "SELECT*FROM preguntas WHERE Id_pregunta='1'");
                                while ($row = mysqli_fetch_assoc($PreEncu)) {
                                    $Id_pregunta = $row['Id_pregunta'];
                                    $Id_tipo = $row['Id_tipo_pregunta'];
                                    $Pregunta = $row['Titulo'];
                                ?>
                                    <div class="grup">
                                        <label><?php echo $Pregunta; ?></label>
                                        <select name="Opciones-Pregunta1" class="formu">
                                        <?php
                                        $MosOpci = mysqli_query($con, "SELECT*FROM opciones WHERE Id_pregunta='1'");
                                        while ($row = mysqli_fetch_assoc($MosOpci)) {
                                            $Id_opcion = $row['Id_opcion'];
                                            $Respue = $row['Valor'];
                                        ?>  
                                                <option value="<?php echo $Id_opcion; ?>"><?php echo $Respue; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <?php } ?>

                                <?php
                                $PreEncu = mysqli_query($con, "SELECT*FROM preguntas WHERE Id_pregunta='2'");
                                while ($row = mysqli_fetch_assoc($PreEncu)) {
                                    $Id_pregunta = $row['Id_pregunta'];
                                    $Id_tipo = $row['Id_tipo_pregunta'];
                                    $Pregunta = $row['Titulo'];
                                ?>
                                    <div class="grup">
                                        <label><?php echo $Pregunta; ?></label>
                                        <?php 
                                        $MosOpci = mysqli_query($con, "SELECT*FROM opciones WHERE Id_pregunta='2'"); 
                                        while ($row = mysqli_fetch_array($MosOpci)) {
                                            $Id_opcion = $row['Id_opcion'];
                                        ?>
                                        <input type="radio" name="Opciones-Pregunta2" value="<?php echo $Id_opcion; ?>"><?php echo $Respues = $row['Valor']; ?>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                                <?php
                                $PreEncu = mysqli_query($con, "SELECT*FROM preguntas WHERE Id_pregunta='3'");
                                while ($row = mysqli_fetch_assoc($PreEncu)) {
                                    $Id_pregunta = $row['Id_pregunta'];
                                    $Id_tipo = $row['Id_tipo_pregunta'];
                                    $Pregunta = $row['Titulo'];
                                ?>
                                    <div class="grup">
                                        <label><?php echo $Pregunta; ?></label>
                                        <select name="Opciones-Pregunta3" class="formu">
                                        <?php
                                        $MosOpci = mysqli_query($con, "SELECT*FROM opciones WHERE Id_pregunta='3'");
                                        while ($row = mysqli_fetch_assoc($MosOpci)) {
                                            $Id_opcion = $row['Id_opcion'];
                                            $Respue = $row['Valor'];
                                        ?>  
                                                <option value="<?php echo $Id_opcion; ?>"><?php echo $Respue; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <?php } ?>

                                <?php
                                $PreEncu = mysqli_query($con, "SELECT*FROM preguntas WHERE Id_pregunta='4'");
                                while ($row = mysqli_fetch_assoc($PreEncu)) {
                                    $Id_pregunta = $row['Id_pregunta'];
                                    $Id_tipo = $row['Id_tipo_pregunta'];
                                    $Pregunta = $row['Titulo'];
                                ?>
                                    <div class="grup">
                                        <label><?php echo $Pregunta; ?></label>
                                        <?php
                                        $MosOpci = mysqli_query($con, "SELECT*FROM opciones WHERE Id_pregunta='4'");
                                        while ($row = mysqli_fetch_array($MosOpci)) {
                                            $Id_opcion = $row['Id_opcion'];
                                        ?>
                                        <input type="radio" name="Opciones-Pregunta4" value="<?php echo $Id_opcion; ?>"><?php echo $Respu = $row['Valor'] ?>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                                <?php
                                $PreEncu = mysqli_query($con, "SELECT*FROM preguntas WHERE Id_pregunta='5'");
                                while ($row = mysqli_fetch_assoc($PreEncu)) {
                                    $Id_pregunta = $row['Id_pregunta'];
                                    $Id_tipo = $row['Id_tipo_pregunta'];
                                    $Pregunta = $row['Titulo'];
                                ?>
                                    <div class="grup">
                                        <label><?php echo $Pregunta; ?></label>
                                        <?php $MosOpci = mysqli_query($con, "SELECT*FROM opciones WHERE Id_pregunta='5'");
                                        while ($row = mysqli_fetch_array($MosOpci)) {
                                            $Id_opcion = $row['Id_opcion'];
                                        ?>
                                        <input type="checkbox" name="Opciones-Pregunta5" value="<?php echo $Id_opcion; ?>"><?php echo $Respu = $row['Valor'] ?>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                <button type="submit" name="Contestar" class="btn btn-primary">Contestar</button>
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        require './views/home.php';
        ?>

        <!-- Muestra el modal automáticamente -->
        <script>
            $(document).ready(function() {
                // Verificar si se ha mostrado la ventana flotante hoy
                if (getCookie('popupShownToday') !== 'true') {
                    // Mostrar la ventana flotante
                    $('#ModalEncuesta').modal('show');
                    // Establecer una cookie para indicar que la ventana flotante se ha mostrado hoy
                    setCookie('popupShownToday', 'true', 1);
                }
            });

            // Función para establecer una cookie con un tiempo de expiración en días
            function setCookie(name, value, days) {
                var expires = '';
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = '; expires=' + date.toUTCString();
                }
                document.cookie = name + '=' + (value || '') + expires + '; path=/';
            }

            // Función para obtener el valor de una cookie por nombre
            function getCookie(name) {
                var nameEQ = name + '=';
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }
        </script>

        </script>
    </section>
    <script src="js/sidebar.js"></script>
</body>

</html>