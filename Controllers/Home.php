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
class Home extends Controllers { // Esta clase Controllers está en ../Libraries/Core/Controllers.php (el autoload la carga)
	public function __construct() {
		parent::__construct();
		}
	public function home() {
		$data['page_title'] = 'Página principal';
		$data['page_name'] = $this->getNombreMetodo();
		$data['controller'] = get_class($this);
		$this->views->getView($this, $this->getNombreMetodo(), $data);
		}
	public function datosFormulario() { // For testing purposes
		/*$_POST['name'];
		$_POST['email'];
		$_POST['subject'];
		$_POST['message'];*/
		$arrResponse = array('status' => true, 'msg' => 'OK', 'data' => array('name' => $_POST['name'], 'email' => $_POST['email'], 'subject' => $_POST['subject'], 'message' => $_POST['message']));
		$this->respuesta($arrResponse);
		}
	public function insertaContacto() {
		$fecha = date("Y-m-d H:i:s"); 
		$lastInsert = $this->model->insertaContacto($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'], $fecha, $_POST['categoryText'], $_POST['reasonText']);
		//$arrResponse = array('status' => true, 'msg' => 'OK', 'data' => $lastInsert);
		//$this->respuesta($arrResponse);
		$this->enviarEmail();
		}
	public function enviarEmail() {
		try {
			enviarEmail();
			}
		catch (Exception $e) {
			$arrResponse = array('status' => false, 'msg' => 'Hubo algún error tratando de enviar el correo', 'e' => $e);
			$this->respuesta($arrResponse);
			}
		}
	public function factorComunVisitas($params) {
		$ob = new HomeVisitas;
		$ob->fueraDelConstructor(strlen($params) > 0 ? $params : get_class($this));
		return $ob;
		}
	public function getVisitas($params) {
		$ob = $this->factorComunVisitas($params);
		$ob->getVisitas();
		}
	public function postVisitas($params) {
		$ob = $this->factorComunVisitas($params);
		$ob->postVisitas();
		}
	public function respuesta($arrResponse) {
		header('Content-Type: application/json');
		echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		exit;
		}
	}
?>
