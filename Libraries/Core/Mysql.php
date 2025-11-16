<?php
class Mysql {
	private $conexion;
	private $strquery;
	private $arrValues;
	function __construct() {
		try {
			$this->conexion = DB::connectDB();
			}
		catch(PDOException $ex) {
			error_log('Connection error - '.$ex, 0);
			echo '<p><b style="color: red;">Database Connection error</b></p>';
			echo "<pre>$ex</pre>";
			echo $ex->getMessage();
			exit;
			}
		}
	// Inserta un registro
	public function insert(string $query, array $arrValues) {
		$this->strquery = $query;
		$this->arrValues = $arrValues;
		$insert = $this->conexion->prepare($this->strquery);
		$resInsert = $insert->execute($this->arrValues);
		if ($resInsert) {
			$lastInsert = $this->conexion->lastInsertId();
			}
		else {
			$lastInsert = 0;
			}
		return $lastInsert;
		}
	// Inserta varios registros
	public function insert_multiple(string $query, array $arrValues) {
		$this->strquery = $query;
		$this->arrValues = $arrValues;
		$stmt = $this->conexion->prepare($this->strquery);
		$arrIds = array();
		forEach ($this->arrValues as $a) {
			if($stmt->execute($a)) {
				$arrIds[] = $this->conexion->lastInsertId();
				}
			else {
				$arrIds[] = $this->conexion->errorInfo();
				}
			}
		return $arrIds; 
		}
	// Busca un registro (fetch)
	public function select(string $query, array $arrValues) {
		$this->strquery = $query;
		$this->arrValues = $arrValues;
		$result = $this->conexion->prepare($this->strquery); // Declaración preparada.
		$result->execute($this->arrValues); // bindParam automático y ejecuta.
		$data = $result->fetch(PDO::FETCH_ASSOC); // Devuelve un array asociativo con los datos del registro (si lo encuentra). Si no encuentra el registro, entonces devuelve false
		return $data;
		}
	// Busca todos los registros (fetchall)
	public function select_all(string $query, array $arrValues) {
		$this->strquery = $query;
		$this->arrValues = $arrValues;
		$result = $this->conexion->prepare($this->strquery); // Declaración preparada.
		$result->execute($this->arrValues);
		$data = $result->fetchall(PDO::FETCH_ASSOC); // Esto devuelve un array cuyos elementos son objetos (arrays asociativos) o un array vacío. 
		return $data;
		}
	// Actualiza registro
	public function update(string $query, array $arrValues) {
		$this->strquery = $query;
		$this->arrValues = $arrValues;
		$update = $this->conexion->prepare($this->strquery);
		$resUpdate = $update->execute($this->arrValues);
		return $resUpdate;
		}
	// Borra un registro
	public function delete(string $query, array $arrValues) {
		$this->strquery = $query;
		$this->arrValues = $arrValues;
		$result = $this->conexion->prepare($this->strquery);
		$result->execute($this->arrValues);
		return $result;
		}
	}
?>
