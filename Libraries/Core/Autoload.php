<?php
spl_autoload_register(function($class) { // En Libraries/Core se van a guardar clases. 
	//echo $class;
	if (file_exists('Libraries/'.'Core/'.$class.'.php')) {
		require_once('Libraries/'.'Core/'.$class.'.php');
		//echo '<br><b style="color: darkgreen;">Se requirió la clase '.LIBS.'Core/'.$class.'.php</b>';
		}
	else {
		echo '<br><b style="color: red;">No se encontró el archivo '.'Libraries/'.'Core/'.$class.'.php</b>';
		}
	});
?>
