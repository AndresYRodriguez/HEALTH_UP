<?php
session_start();

if (isset($_SESSION['Correo'])) {
  header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="CSS/signin.css">
  <link rel="icon" href="CSS/IMG/logo-health_up.png">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
  <form action="" method="POST" id="form">
    <div class="form">
      <h1>Sign up</h1>
      <div class="grupo">
        <input type="text" class="Nombres formu" name="Nombres" required><span class="barra"></span>
        <label for="">Nombres</label>
        <i class="uil uil-user user"></i>
      </div>
      <div class="grupo">
        <input type="text" class="Nombres formu" name="Apellidos" required><span class="barra"></span>
        <label for="">Apellidos</label>
        <i class="uil uil-user user"></i>
      </div>
      <div class="grupo">
        <input type="date" class="Fecha formu" name="Fecha_nacimiento" required><span class="barra"></span>

      </div>
      <div class="grupo">
        <select name="Genero" class="formu" required>
          <option value=""></option>
          <option value="1">Femenino</option>
          <option value="2">Masculino</option>
        </select>
        <label for="">Genero</label>
      </div>
      <div class="grupo">
        <input type="email" class="Email-input formu" name="Correo" required><span class="barra"></span>
        <label for="" class="Email-text">Correo Electronico</label>
        <i class="uil uil-envelope email-icon"></i>
      </div>
      <div class="grupo">
        <input type="password" name="Contraseña" class="Contraseña formu" required><span class="barra"></span>
        <label for="">Contraseña</label>
        <i class="uil uil-eye-slash ShowHidePw"></i>
      </div>
      <div class="tyc">
        <input type="checkbox" class="check" name="" id="" required>Acepto <a href="" data-bs-toggle="modal" data-bs-target="#terminos" class="termino">terminos y condiciones</a>
      </div>
      <button type="submit" name="Registrarse" class="sign-up">registrarme</button>
      <a href="signin.php" class="pass">tengo una cuenta</a>
    </div>
  </form>

  <!--terminos y condiciones-->
  <div class="modal fade" id="terminos" tabindex="-1" aria-labelledby="terminos" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Terminos y condiciones</h5>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repudiandae qui ratione perferendis iste iusto cupiditate laboriosam soluta non. Dolorum?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="js/password.js"></script>
  <script src="js/validacion.js"></script>
  <?php
  require 'registrar.php';
  ?>
</body>

</html>