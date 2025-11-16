<?php
class Visitas extends Controllers { // Esta clase Controllers está en ../Libraries/Core/Controllers.php (el autoload la carga)
	public $sqlite;
	public $db = __DIR__.'/../Storage/visitas/';
	public $responseData = array();
	public function __construct($cookie) {
		parent::__construct();
		}
	public function fueraDelConstructor($cookie) {
		$this->db = $this->db.$cookie.'.db';
		if (!is_file($this->db)) {
				$this->sqlite = new SQLite3($this->db)
				or die('Problemas para crear la base de datos.
'.$this->db.'
'.$this->sqlite->lastErrorMsg);

				$this->responseData['messages'][] = 'Se creó la base de datos '.$this->db.' correctamente. ';

				$q = "CREATE TABLE IF NOT EXISTS visitas ("
						."id INTEGER PRIMARY KEY AUTOINCREMENT, "
						//."titulo TEXT NOT NULL, "
						//."tarea TEXT NOT NULL, "
						//."status INT NOT NULL, "
						."udate INT NOT NULL);";
				if ($result = $this->sqlite->query($q)) {
						$this->responseData['messages'][] = 'Parece que la tabla visitas se creó correctamente.';
						}
				else {
						$this->responseData['messages'][] = 'Hubo un error al momento de crear la tabla visitas. '.$this->sqlite->lastErrorMsg;
						}
				}
		else {
				$this->sqlite = new SQLite3($this->db)
				or die('Problemas para crear la base de datos.
'.$this->db.'
'.$this->sqlite->lastErrorMsg);
				}
		}
	public function getVisitas() {
		$q = "SELECT COUNT(*) AS count FROM visitas";
		try {
		if ($this->sqlite->exec($q) === true) {
				if ($result = $this->sqlite->query($q)) {
						while ($row = $result->fetchArray()) {
								$this->responseData['messages'][] = $row;
								$this->responseData['visitas'] = $row[0];
								}
						}
				}
		else {
				$this->responseData['messages'][] = 'Problemas para consultar las visitas.
'.$q.'
'.$this->sqlite->lastErrorMsg();
		}
			$arrResponse = array('status' => true, 'data' => $this->responseData);
		}
		catch (Exception $ex) {
			$arrResponse = array('status' => false, 'data' => $this->responseData, 'ex' => get_object_vars($ex));
			}
		finally {
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			exit;
			}
		}
	public function postVisitas() {
		$udate = time();
		$q = "INSERT INTO visitas (udate) VALUES ($udate);";
		try {
			if ($this->sqlite->exec($q) === true) {
					$this->responseData['messages'][] = 'Se registró la visita correctamente.';
					}
			else {
					$this->responseData['messages'][] = 'Problemas para registrar la visita.
'.$q.'
'.$this->sqlite->lastErrorMsg();
				}
			$arrResponse = array('status' => true, 'data' => $this->responseData);
			}
		catch (Exception $ex) {
			$arrResponse = array('status' => false, 'data' => $this->responseData, 'ex' => get_object_vars($ex));
			}
		finally {
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			exit;
			}
		}
	public function __destruct() {
			//header('Content-type: application/json; charset=utf-8');
			if ($this->sqlite) {
					if ($this->sqlite->close()) {
							//http_response_code(200);
							$this->responseData['messages'][] = 'Desconexión exitosa de la base de datos.';
							}
					else {
							//http_response_code(500);
							$this->responseData['messages'][] = 'Error al desconectar de la base de datos.';
							}
					}
			else {
					//http_response_code(200);
					$this->responseData['messages'][] = 'No hay base de datos que desconectar. Podría ser un error. ';
					}
			//echo json_encode($this->responseData, JSON_PRETTY_PRINT);
			}
	}
?>
