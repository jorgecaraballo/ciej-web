<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

// Zona horaria
date_default_timezone_set('America/Caracas');

// Podemos usar la función nativa de PHP define para definir constantes, pero lo haremos como se muestra a continuación:

const BASE_URL = 'http://192.168.11.113:8121/'; // Ejemplo en testing localmente en un servidor Apache

// Datos de conexión a Base de Datos
const DB_HOST = 'localhost';
const DB_NAME = 'EL NOMBRE DE TU BASE DE DATOS';
const DB_USER = 'TU USUARIO DE BASE DE DATOS';
const DB_PASSWORD = 'EL PASSWORD DE TU USUARIO DE BASE DE DATOS';
const DB_CHARSET = 'utf8mb4';

// Delimitadores decimal y millar.
const SPD = ',';
const SPM = '.';

//Simbolo de moneda
const SMONEY = "$";

// Datos envío de correo
const NOMBRE_REMITENTE = 'CIEJ';
const EMAIL_REMITENTE = 'DIRECCIÓN DE EMAIL DESDE DONDE ENVIARÁS CORREOS';
const EMAIL_PASSWORD_REMITENTE = 'PASSWORD DEL EMAIL DESDE DONDE SE ENVIARÁ CORREO';
const EMAIL_HOST = 'SMTP DEL EMAIL DESDE DONDE SE ENVIARÁ CORREO'; // Inicialmente no soporta OAUTH2 sino el método tradicional

const NOMBRE_EMPRESA = NOMBRE_REMITENTE;
const WEB_EMPRESA = BASE_URL;

const COOKIES = array('color' => array('cname' => 'ciejtema', 'cvalue' => 'azul', 'exdays' => 365),
		'claroscuro' => array('cname' => 'ciejclaroscuro', 'cvalue' => 'oscuro', 'exdays' => 365));
?>
