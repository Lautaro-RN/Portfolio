<?php
//se incluyen datos de librería PHPMailer
require 'phpmailerdocs/PHPMailer.php';
require 'phpmailerdocs/Exception.php';
require 'phpmailerdocs/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;

//Declaración de variables
$nom = $cor = $asu = $msg = $bod = $alt_bod = '';

//Función de seguridad y eliminación de errores
/*function test_posted($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//Testeo de cada valor POST y asignación de var
	$nom=($_POST['nombre']);
	$cor=($_POST['correo']);
	$asu="Consulta Portfolio";
	$msg=($_POST['mensaje']);
		$bod="
			<h1> $asu </h1>
			<h2>Hecha por $cor - $nom</h2>
			<h3>Mensaje:</h3>
			<h4>$msg</h4>";
		$alt_bod=strip_tags($bod);

	//Testeo de valores null
	//Si hay un error se abre un modal
	if(empty($nom)){
		include "result_error_name.php";
	}elseif (empty($cor)){
		include "result_error_mail.php";
	}elseif (empty($msg)){
		include "result_error_msg.php";
	}else{
		
		//Instanciación de objeto PHPMailer
		$mail=new PHPMailer(true);
		try{
			//configuración de servidor
			$mail->SMTPDebug = 0;
		    $mail->isSMTP();
		    $mail->Host      = 'smtp.mail.yahoo.com';
		    $mail->SMTPAuth  = true;
		    $mail->Username  = 'yourmaildirection@example.com';
		    $mail->Password  = 'password-example-012';
		    $mail->SMTPSecure= 'tls';//puerto local
		    $mail->Port      = 587;//
			    /* puerto online
			    $mail->SMTPSecure= 'ssl';
			    $mail->Port      = 465;
			    */
		    //Recipients
		    $mail->setFrom('lautarofranco@yahoo.com.ar', "$cor - $nom");
		    $mail->addAddress('plautarofrancog@gmail.com');
		    $mail->addCC('plautarofrancog@gmail.com');
			//Content
			$mail->isHTML(true);
		    $mail->Subject   = "$asu";
		    $mail->Body      = "<body>$bod</body>";
		    $mail->AltBody   = "$alt_bod";
		    $mail->CharSet   = 'UTF-8';
		    //"SE CONFIGURÓ MAIL\r\n";
		    //Envío
		    $mail->send();
		    include "result_success.php";
		//Prueba de envío.
		    
		}catch(Exception $e) {
	    echo "NO SE PUDO ENVIAR. REVISE SU CONEXIÓN E INTÉNTELO DE NUEVO";//Error: {$mail->ErrorInfo};
		} }
}

?>
