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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
Estos son los términos y condiciones que los usuarios deben aceptar al visitar en el sitio web administrado por Sena. Estos términos se aplican a todos los usuarios, incluidos navegadores, proveedores, clientes, comerciantes y aportadores de contenido. El usuario debe revisar periódicamente estos términos, ya que Sena se reserva el derecho de actualizarlos o cambiarlos en cualquier momento. La tienda en línea está alojada en Shopify Inc. y cualquier persona que utilice el servicio debe cumplir con las leyes de su jurisdicción. Sena se reserva el derecho de rechazar el servicio a cualquier persona, por cualquier motivo y en cualquier momento. La información en el sitio web puede no ser precisa, completa o actualizada. El usuario acepta no reproducir, duplicar, copiar, vender, revender ni aprovechar ninguna parte del Servicio sin el permiso de Sena.

Este es un aviso legal que establece que el usuario asume todo riesgo al utilizar el contenido de este sitio web y que la información histórica puede no estar actualizada. El sitio se reserva el derecho de modificar o discontinuar el servicio y los precios de los productos sin previo aviso. Los productos o servicios pueden estar sujetos a cantidades limitadas y se pueden cambiar o devolver solo de acuerdo con la política de devolución del sitio. Las descripciones y precios de los productos están sujetos a cambios en cualquier momento y no se garantiza la exactitud de la facturación o información de la cuenta. El sitio también puede proporcionar herramientas de terceros, pero no se hace responsable del uso de las mismas.

El uso de las herramientas opcionales ofrecidas en el sitio es bajo su propio riesgo y es su responsabilidad estar familiarizado con los términos de los proveedores externos. Los nuevos servicios y funciones también estarán sujetos a los Términos de servicio. Los enlaces de terceros no están afiliados a nosotros y no somos responsables de su contenido o exactitud. Cualquier comentario que nos envíe puede ser editado, copiado, publicado y distribuido en cualquier medio. La información personal que envíe está sujeta a nuestra Política de privacidad. Puede haber errores en el contenido del sitio y nos reservamos el derecho de corregir cualquier error sin previo aviso.

La sección 12 del servicio prohíbe el uso del sitio para fines ilegales y para infringir los derechos de propiedad intelectual de otros, entre otras cosas. El servicio no garantiza que su uso sea sin interrupciones, oportuno, seguro o sin errores, y se reserva el derecho de cancelarlo en cualquier momento. La sección 13 establece que el servicio y todos los productos y servicios que se le entregan se ofrecen "tal como están" y que no serán responsables de cualquier daño directo o indirecto resultante del uso del servicio o de cualquier producto adquirido a través del mismo.

Estos términos del servicio establecen que la responsabilidad de la empresa se limitará a lo permitido por la ley en aquellos lugares donde no se permita la exclusión o limitación de responsabilidad por daños incidentales o consecuentes. El usuario acepta indemnizar y eximir de responsabilidad a la empresa por cualquier reclamación de terceros debido al incumplimiento de los términos del servicio. En caso de que alguna disposición de los términos sea ilegal o inaplicable, el resto de los términos permanecerán en vigencia. La rescisión del contrato no afectará las obligaciones y responsabilidades de las partes que se hayan incurrido antes de la fecha de rescisión. Estos términos rigen el uso del servicio y reemplazan cualquier acuerdo anterior o contemporáneo entre el usuario y la empresa. Cualquier cambio en los términos del servicio será publicado en el sitio web de la empresa y se considerará aceptado si se continúa usando el servicio después de dicha publicación. Las preguntas sobre los términos del servicio deben enviarse a healthup98@gmail.com. <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqWgZxhlPhVNshxwccqGLqbrTVNSSKpvctCjrTnPTQltMQmJBwmpcZDvSCknShcMrtRntL">healthup98@gmail.com</a>.
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