<?php
if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM usuario WHERE Correo='$_SESSION[Correo]'");
    while ($row = mysqli_fetch_assoc($user)) {
        $Id_user = $row['Id_usuario'];
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
    <div>
        <h1 class="title">Seguimiendo del dia</h1>
    </div>
</body>

</html>