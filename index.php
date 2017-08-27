<?php 

require_once 'funciones/func.php';

if(!$web) {
	$idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	if($idioma=="es") { 
			header('Location: ' . RUTA . '/es'); 
	} else { 
			header( 'Location: ' . RUTA . '/en' ); 
	}
} else {
	include("lang/{$lang}.php");	
}


function enviar(){

$errores ='';
$enviado ='';


// if (isset($_POST['button'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if(!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa un nombre <br />';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo válido <br />';
		}
	} else {
		$errores .= 'Por favor ingresa un correo <br />';
	}

	if (!empty($mensaje)) {
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripcslashes($mensaje);
	} else {
		$errores .= 'Por favor ingresa el mensaje <br />';
	}

	if (!$errores) {
		$enviar_a = 'hola@lospepesweb.com';
		$asunto = 'Correo envieado desde la WEB';
		$mensaje_preparado = "Nombre: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;
		$header = "From: hola@lospepesweb.com\nReply-To:".$_POST["correo"]."\n";
		$header .= "Mime-Version: 1.0\n";
		$header .= "Content-Type: text/plain";
	
		mail($enviar_a, $asunto, $mensaje_preparado, $header);
	}

}

include 'index.view.php';
