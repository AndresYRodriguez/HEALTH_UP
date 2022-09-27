<?php 
require '../config/config.php';

//informacion de la encuesta
$info = mysqli_query($con, "SELECT*FROM encuestas");
while ($row = mysqli_fetch_array($info)) {
    $Id_encuesta = $row['Id_encuesta'];
    $Titulo = $row['Titulo'];
    $Description = $row['Descripcion'];
    $Date = $row['Fecha_final'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <title>Encuentas | <?php echo $Id_encuesta; ?> <?php echo $Titulo; ?></title>
</head>
<body>
    
</body>
</html>