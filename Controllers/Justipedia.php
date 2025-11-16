<?php
require_once('Controllers/Visitas.php');
class HomeVisitas extends Visitas {
	public function __construct() {
		$routClass = 'Models/VisitasModel.php';
		//echo '$routClass: <b>'.$routClass.'</b><br>';
		if (file_exists($routClass)) { // Solo si existe, lo requiere, e instancia un objeto.
			require_once($routClass);
			$this->model = new VisitasModel();
			}
		}
	}
class Justipedia extends Controllers { // Esta clase Controllers está en ../Libraries/Core/Controllers.php (el autoload la carga)
	public function __construct() {
		parent::__construct();
		}
	public function justipedia() {
		$data['page_title'] = get_class($this);
		$data['page_name'] = $this->getNombreMetodo();
		$data['controller'] = get_class($this);
		$this->views->getView($this, $this->getNombreMetodo(), $data);
		}
	public function getVisitas($params) { // En los controladores, considerar validación de entrada
		// Validar y sanitizar $params antes de usar
		$params = filter_var($params, FILTER_SANITIZE_STRING);
		$ob = new HomeVisitas;
		if (strlen($params) > 0) {
			$ob->fueraDelConstructor($params);
			}
		else {
			$ob->fueraDelConstructor(get_class($this));
			}
		$ob->getVisitas();
		}
	public function postVisitas($params) {
		$ob = new HomeVisitas;
		if (strlen($params) > 0) {
			$ob->fueraDelConstructor($params);
			}
		else {
			$ob->fueraDelConstructor(get_class($this));
			}
		$ob->postVisitas();
		}
	}
?>
