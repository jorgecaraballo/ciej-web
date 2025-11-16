<?php
class Views {
	function getView($controller, $view, $data = '') {
		$controller = get_class($controller);
		if ($controller == 'Home') {
			$view = 'Views/'.$view.'.php'; // Si el controlador es Home, los archivos están en la raíz de Views
			}
		else {
			$view = 'Views/'.$controller.'/'.$view.'.php'; // El nombre del controlador es el nombre de la subcarpeta dentro de Views.
			}
		require_once($view); // Requiere un archivo con contenido html, por lo tanto muestra dicho contenido. 
		}
	}
?>
