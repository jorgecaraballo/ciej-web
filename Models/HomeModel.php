<?php
class HomeModel extends Mysql {
	public function __construct() {
	        parent::__construct();
	        }
	public function insertaContacto(string $name, string $email, string $subject, string $message, string $fecha, string $category_text, string $reason_text) {
		$q = "INSERT INTO contacto (name, email, subject, message, fecha, category_text, reason_text) VALUES (?,?,?,?,?,?,?)";
		$arrValues = array($name, $email, $subject, $message, $fecha, $category_text, $reason_text);
		return $this->insert($q, $arrValues);
		}
	}
?>
