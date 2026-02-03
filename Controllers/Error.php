<?php
class Errors extends Controllers { // Esta clase Controllers está en ../Libraries/Core/Controllers.php (el autoload la carga)
	public function __construct() {
		error_reporting(E_ALL);
		ini_set('display_errors', true);
		parent::__construct();
		}
	public function notFound() {
		$this->views->getView($this, 'error');
		}
	}
$notFound = new Errors();
$notFound->notFound();
?>
