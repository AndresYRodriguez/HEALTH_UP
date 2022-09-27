<?php
define('METHOD', 'AES-256-CBC');
define('SECRET_KEY', '$OscarEpe2');
define('SECRET_IV', '235468');

require './config/config.php';

class ContraEncrip
{
    public static function encryption($string)
    {
        $output = FALSE;
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }
    public static function decryption($string)
    {
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }
}

		try{
			if(isset($_POST['Correo']) && !empty($_POST['Correo'])){
                $Contraseña = substr(microtime(), 1, 10);
                $ContrEncript = ContraEncrip::encryption($Contraseña);
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