<?php
require("config/config.php");

		try{
			if(isset($_POST['Correo']) && !empty($_POST['Correo'])){
                $Contraseña = substr(microtime(), 1, 10);
                $ContrEncript = md5($Contraseña);
                $Correo = $_POST['Correo'];
                
               
                
                $sql = "UPDATE usuario SET Contraseña='$ContrEncript' WHERE Correo='$Correo'";

                if ($con->query($sql) === TRUE) {
                    echo "usuario modificado correctamente ";
                } else {
                    echo "Error modificando: " . $con->error;
                }
                
                $to = $_POST['Correo'];
                $from = "From: " . "healthup98@gmail.com" ;
                $subject = "Recordar contraseña";
                $message = "El sistema le asigno la siguiente contraseña " . $Contraseña;

                mail($to,$subject,$message,$from);
                echo 'Correo enviado satisfactoriamente a ' . $_POST['Correo'];
            }
            else 
                echo 'Informacion incompleta';
		}
		catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
?>