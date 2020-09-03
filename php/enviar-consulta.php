<?php
require_once('classes/class.phpmailer.php');

//variables
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$archivo = $_FILES['archivo'];
$mensaje = $_POST['mensaje'];

$mensajeModificado = 'Consulta enviada desde la página web. 

'.$mensaje;

//verificar si el archivo es permitido
$archivoValido = validarArchivo($archivo['type']);

if($archivoValido){
	//enviar mail
	$envioCorreo = enviarCorreo($archivo);
	
	if($envioCorreo){
		echo '<meta http-equiv="refresh" content="0; url=../contacto.php?envio=si">';		
	}else{
		echo '<meta http-equiv="refresh" content="0; url=../contacto.php?error=enviar&nombre='.$nombre.'&correo='.$correo.'&asunto='.$asunto.'&mensaje='.$mensaje.'">';
	}	
}else{
	echo '<meta http-equiv="refresh" content="0; url=../contacto.php?error=archivo&nombre='.$nombre.'&correo='.$correo.'&asunto='.$asunto.'&mensaje='.$mensaje.'">';
}





/**
* Envia un correo con un archivo adjunto
* @archivo: $_FILES['archivo'], archivo pasado por formulario.
*/
function enviarCorreo($archivo){	
	$varname = $archivo['name'];	
	$vartemp = $archivo['tmp_name'];	
	$mail = new PHPMailer();
	$mail->Host = "localhost";//se indica el servidor de correo, suele ser localhost	
	$mail->From = $GLOBALS['correo'];//desde que correo va a llegar	
	$mail->FromName = $GLOBALS['nombre'];	
	$mail->Subject = $GLOBALS['asunto'];//el asunto del mail	
	$mail->AddAddress('comercial@mvictoria.com.ar');//te van a llegar a ti los CV	
	if ($archivo['name'] != "") //si no esta vacio el nombre adjunta el archivo al correo	
		$mail->AddAttachment($vartemp, $varname);	
	$mail->Body = $GLOBALS['mensajeModificado'];//se asigna como cuerpo del mensaje la variable
	$mail->CharSet = 'UTF-8'; //indicamos que se escribe con caracteres espciales
	
	return $mail->Send();//envia el correo
}


/**
* Verifica si un email es válido
* @email: mail a verficiar
* @returns: verdadero si es correcto, falso, caso contrario
*/
function comprobar_email($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}

/**
* Verficia si el tipo del archivo es permitido
* @tipo: type del archivo
*/
function validarArchivo($tipo){
	$permitidos = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png', 'application/msword', 'application/vnd.ms-excel','application/vnd.ms-excel', 'application/vnd.ms-excel', 'application/vnd.ms-excel', 'application/vnd.ms-excel', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.ms-powerpoint', 'application/vnd.ms-powerpoint', 'application/msword', 'image/bmp', 'image/cis-cod', 'image/ief', 'image/pipeg', 'image/svg+xml', 'image/tiff', 'image/tiff', 'image/x-cmu-raster', 'image/x-cmx', 'image/x-icon', 'image/x-portable-anymap', 'image/x-portable-bitmap', 'image/x-portable-graymap', 'image/x-portable-pixmap', 'image/x-rgb', 'image/x-xbitmap', 'image/x-xpixmap', 'image/x-xwindowdump', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'application/vnd.openxmlformats-officedocument.presentationml.template', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.spreadsheetml.template');
	return in_array($tipo, $permitidos);
}


?>