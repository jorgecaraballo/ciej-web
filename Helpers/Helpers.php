<?php 

// PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('Libraries/composer/vendor/autoload.php');
// Fin PHPMailer

//Retorna la url del proyecto
function base_url() {
	return BASE_URL;
	}
function media() {
	return BASE_URL."Assets/";
	}
function nodeModules() {
	return BASE_URL."Libraries/npm/node_modules/";
	}
//Muestra información formateada
function dep($data) {
	$format  = print_r('<pre>');
	$format .= print_r($data);
	$format .= print_r('</pre>');
	return $format;
	}
function enviarEmail() {
	$mail = new PHPMailer();
	try {
		$mail->SMTPDebug  = 0;
		//$mail->SMTPDebug  = 2; // Enable verbose debug output (client and server messages)
		$mail->IsSMTP(); // Set mailer to use SMTP
		$mail->Host       = EMAIL_HOST;
		$mail->SMTPAuth   = true; // Enable SMTP authentication
		$mail->Username   = EMAIL_REMITENTE;
		$mail->Password   = EMAIL_PASSWORD_REMITENTE;
		//$mail->SMTPSecure = 'SSL';
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port       = 587;
		$mail->CharSet = 'UTF-8';
		$mail->SetFrom($_POST['email'], $_POST['name']);
		$mail->AddAddress('contacto@ciejvenezuela.com', 'Contacto CIEJ');
		$mail->AddBCC('jorgejorgejorgejorge@gmail.com','Jorge Caraballo');
		$mail->AddBCC('jorge@api.ciejvenezuela.com','Jorge Caraballo');
		$mail->isHTML(true);
		$mail->Subject =  '=?UTF-8?B?'.base64_encode($_POST['subject']).'?=';
		$mail->Body = $_POST['message'];
		$mail->AltBody = $_POST['message'];
		if ($mail->Send()) {
			$arrResponse = array('status' => true, 'msg' => 'OK');
			}
		else {
			$arrResponse = array('status' => false, 'msg' => 'Failed');
			}
		}
	catch(Exception $e) {
		$arrResponse = array('status' => false, 'msg' => $mail->ErrorInfo, 'e' => $e);
		}
	finally {
		header('Content-Type: application/json');
		echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		exit;
		}
	}
/*
 * PHPMailer's SMTPDebug levels:
 * 0 (DEBUG_OFF): No debug output (default).
 * 1 (DEBUG_CLIENT): Mensajes enviados por el cliente.
 * 2 (DEBUG_SERVER): Comandos del cliente y respuestas del servidor.
 * 3 (DEBUG_CONNECTION): Incluye estado de conexión, útil para STARTTLS.
 * 4 (DEBUG_LOWLEVEL): Datos en bajo nivel, mensajes y datos en crudo.
 */
?>
