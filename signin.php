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
  <title>sign in</title>
  <link rel="stylesheet" href="./CSS/signin.css">
  <link rel="icon" href="CSS/IMG/logo-health_up.png">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
  <form action="validacion.php" method="POST" id="form">
    <div class="form">
      <h1>Sign up</h1>
      <div class="grupo">
        <input type="email" class="formu" name="Correo" required><span class="barra"></span>
        <label for="">Correo Electronico</label>
      </div>
      <div class="grupo">
        <input type="password" name="Contraseña" class="Contraseña formu" required><span class="barra"></span>
        <label for="">Contraseña</label>
        <i class="uil uil-eye-slash ShowHidePw"></i>
      </div>
      <a href="" data-bs-toggle="modal" data-bs-target="#recuperar" class="password pass">Olvide mi contraseña</a>
      <button type="submit" class="sign-in">Siguiente</button>
      <a href="signup.php" class="pass">No tengo una cuenta</a>
    </div>
  </form>

  <!--Recuperar Contraseña-->
  <div class="modal fade" id="recuperar" tabindex="-1" aria-labelledby="recuperar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Recuperar contraseña</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="recuperar.php" method="POST" id="form">
          <div class="form">
            <p>Correo Electronico</p>
            <input type="email" class="formu" name="Correo" id="Correo" required><span class="barra"></span>
            <!--<label for="">Correo Electronico</label>-->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" name="recuperar" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/password.js"></script>
</body>

</html>
