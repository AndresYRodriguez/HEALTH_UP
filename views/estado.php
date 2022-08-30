<?php
require './config/config.php';

if (!isset($_SESSION['Correo'])) {
    header("location:signin.php");
    session_destroy();
    die();
}

if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM persona WHERE Correo='$_SESSION[Correo]'");
    while ($row = mysqli_fetch_assoc($user)) {
        $Type_User = $row['Tipo_usuario'];
    }
}

//Mostrar encuestas
$Encu = mysqli_query($con, "SELECT*FROM encuestas");
while ($row = mysqli_fetch_assoc($Encu)) {
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
            <a class="text link" href="https://docs.google.com/forms/d/e/1FAIpQLSddn2x2ep5qxM7CnsbJfEi-ViADLeMoktVE0n1adQo5aZVxtA/viewform"><i class="fa-solid fa-square-poll-horizontal"></i> Primera encuesta</a>
        </div>
    <?php if ($Estado == '1') : ?>
        <div>
            <h2 class="subtitle">Encuentas diarias</h2>
            <div>
                <a class="text link" href="https://docs.google.com/forms/d/e/1FAIpQLSddn2x2ep5qxM7CnsbJfEi-ViADLeMoktVE0n1adQo5aZVxtA/viewform"><i class="fa-solid fa-square-poll-horizontal"></i> Socioemocional</a>
            </div>
            <div>
                <a class="text link" href="https://docs.google.com/forms/d/e/1FAIpQLSddn2x2ep5qxM7CnsbJfEi-ViADLeMoktVE0n1adQo5aZVxtA/viewform"><i class="fa-solid fa-square-poll-horizontal"></i> Fisico</a>
            </div>
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
