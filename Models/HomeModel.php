<?php
class HomeModel extends Mysql {
	public function __construct() {
	        parent::__construct();
	        }
	public function insertaContacto(string $name, string $email, string $subject, string $message, string $fecha) {
		$q = "INSERT INTO contacto (name, email, subject, message, fecha) VALUES (?,?,?,?,?)";
		$arrValues = array($name, $email, $subject, $message, $fecha);
		return $this->insert($q, $arrValues);
		}
	}
?>
