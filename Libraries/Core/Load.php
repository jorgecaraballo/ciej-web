<?php
// Load
$controllerFile = 'Controllers/'.ucfirst($controller).'.php'; // Solo la primera letra de la primera palabra es colocada en mayúscula. 
if (file_exists($controllerFile)) { // Aquí se usa las clases cargadas por el autoload. 
	require_once($controllerFile);
	$controller = new $controller(); // Si es el controlador Logout.php, en el constructor redirige, por lo tanto hasta aquí llega.
	if (method_exists($controller, $method)) {
		// En PHP, si se define una función que no recibe ningún parámetro pero se llama con un argumento, 
		// el valor del argumento se ignorará y no se producirá ningún error. 
		// Por lo tanto, siempre se invocará el método del controlador a continuación con el argumento $params, 
		// pero este método no siempre estará definido para recibir dicho argumento $params.
		// Por lo tanto, si el método no espera recibir ningún argumento, simplemente $params se ignorará
		// y no se producirá nngún error. 
		$controller->{$method}($params);
		}
	else { // Acá se "requiere" la clase "manualmente".
		require_once('Controllers/Error.php');
		}
	}
else { // Acá se "requiere" la clase "manualmente".
	require_once('Controllers/Error.php');
	}
?>
