<?php
class HomeModel extends Mysql {
	public function __construct() {
	        parent::__construct();
	        }
	public function insertaContacto(string $name, string $email, string $subject, string $message) {
		$q = "INSERT INTO contacto (name, email, subject, message) VALUES (?,?,?,?)";
		$arrValues = array($name, $email, $subject, $message);
		return $this->insert($q, $arrValues);
		}
	}
?>
