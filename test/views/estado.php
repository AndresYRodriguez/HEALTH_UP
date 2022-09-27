<?php

if (!isset($_SESSION['Correo'])) {
    header("location:signin.php");
    session_destroy();
    die();
}

if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$_SESSION[Correo]'");
    while ($row = mysqli_fetch_assoc($user)) {
        $Id_user = $row['Id_usuario'];
        $Type_User = $row['Tipo_usuario'];
    }
}

//Mostrar encuestas
$Encu = mysqli_query($con, "SELECT*FROM encuestas");
while ($row = mysqli_fetch_assoc($Encu)) {
    $Id_encuesta = $row['Id_encuesta'];
    $Estado = $row['Estado'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estado.css">
    <link rel="stylesheet" href="CSS/encuesta.css">
    <script src="https://kit.fontawesome.com/4fe488308a.js" crossorigin="anonymous"></script>
    <title>Encuestas || </title>
</head>

<body>
    <?php if ($Type_User == 'admin') : ?>
        <?php require 'admin.php'; ?>
    <?php else : ?>
        <h1 class="title">Encuentas</h1>
        <div>  
            <h2 class="subtitle">Encuestas realizadas</h2>
            <h3 class="text">Por el momento no a realizado ninguna encuesta</h3>
        </div>
    <?php if ($Estado == '1') : ?>
        <div>
            <h2 class="subtitle">Encuentas diarias</h2>
            <table class="table">
  <thead class="table-dark">
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
            <!--<div class="table">
            <table>
                <thead>
                    <tr>
                        <th class="table-title">Titulo</th>
                        <th class="table-title">Descripcion</th>
                        <th class="table-title">Fecha Final</th>
                        <th class="table-title">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $Encues = mysqli_query($con, "SELECT*FROM encuestas");
                    while ($row = mysqli_fetch_array($Encues)) {
                    ?>
                        <tr>
                            <td class="table-tareas"><?php echo $row['Titulo']; ?></td>
                            <td class="table-tareas"><?php echo $row['Descripcion']; ?></td>
                            <td class="table-tareas"><?php echo $row['Fecha_final']; ?></td>
                            <td class="table-tareas"><a class="btn" href="./views/responderencuesta.php?Id_encuesta=<?php echo $Id_encuesta; ?>">Responder</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>-->
        </div>
      <?php else : ?>
        <div>
            <h2 class="subtitle">Encuentas diarias</h2>
            <h3 class="text">No hay encuestas a realizar  </h3>
        </div>  
    <?php endif; ?>
    <?php endif; ?>
</body>

</html>
