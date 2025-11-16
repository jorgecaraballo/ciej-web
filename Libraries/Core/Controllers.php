<?php
class Controllers {
	protected $model;
	protected $views;
	public function __construct() {
		$this->views = new Views();
		$this->loadModel(); // Cargamos el modelo del controlador, si existe. 
		}
	public function loadModel() { // Cargamos el modelo del controlador, si existe. 
		$model = get_class($this).'Model'; // get_class($this): Obtiene el nombre de la clase actual.
		$routClass = 'Models/'.$model.'.php';
		//echo '$routClass: <b>'.$routClass.'</b><br>';
		if (file_exists($routClass)) { // Solo si existe, lo requiere, e instancia un objeto. 
			require_once($routClass);
			$this->model = new $model();
			}
		}
	public function getNombreMetodo() {
		// Usar debug_backtrace para obtener el nombre del método
		$trace = debug_backtrace(); // debug_backtrace(): Proporciona un array de información sobre la pila de llamadas.
		return $trace[1]['function']; // $trace[1] contiene el contexto donde se llamó. Accede al segundo elemento del array (donde se encuentra el método actual) y obtiene su nombre. Permite obtener el nombre del método actual en el contexto de una clase de manera efectiva y sencilla. 
		}
	public function getCookies() {
		echo json_encode(cookies(), JSON_UNESCAPED_UNICODE); // "Nos aseguramos que los caracteres especiales vayan de forma correcta."
		exit;
		}
	}
?>
