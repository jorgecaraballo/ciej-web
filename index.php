<?php
require_once('Config/Config.php'); // Las constantes están en scope para todo lo que viene a continuación.
require_once('Helpers/Helpers.php');
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrUrl = explode("/", $url);

/*print_r($url);
print_r('<pre>');
print_r($arrUrl);
print_r('</pre>');*/

$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = '';

if (!empty($arrUrl[1])) {
	if ($arrUrl[1] != '') {
		$method = $arrUrl[1];
		}
	}
	
if (!empty($arrUrl[2])) {
	if ($arrUrl[2] != '') {
		for ($i = 2; $i < count($arrUrl); $i++) {
			$params .= $arrUrl[$i] != '' ? $arrUrl[$i].',' : '';
			}
		$params = trim($params, ',');
		//echo $params.'<br>';
		}
	}
	
require_once('Libraries/Core/Autoload.php'); // Para requerir las clases que están en ../Libraries/Core/
require_once('Libraries/Core/Load.php'); // Carga el controlador si existe y ejecuta el método si existe. 
// Se usa las variables $controller, $method y $params que están en scope con el archivo ../Load.php

?>
