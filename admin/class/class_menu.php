<?php 
require_once('../conexion/conexion.php');
class menu_db extends Conexion{
	public function __construct(){
		parent::__construct();
	}


	public function insertar($datos){
		$data = 0;
		$result = $this->_db->query("
			INSERT INTO menu 
			(id, nivel, texto, url, visible, orden) 
			VALUES ('$datos[id]', '$datos[nivel]', '$datos[texto]', '$datos[url]', '1', '0')
			");
		if (!$result) {
			printf("Errormessage al Insertar menu : %s\n\n", $this->_db->error);
		}	
		else{
			$data = $this->_db->insert_id;
		}
		return $data;
	}


	public function editar($datos){
		$data = 0;
		$result = $this->_db->query("
			UPDATE menu SET
			id = '$datos[id]', 
			nivel = '$datos[nivel]',
			texto = '$datos[texto]', 
			url = '$datos[url]'
			WHERE id_menu = '$datos[id_menu]'");
		if (!$result) {
			printf("Errormessage al Editar menu : %s\n\n", $this->_db->error);
		}
		else{
			$data = $datos['id_menu'];
		}
		return $data;
	}


	public function eliminar($id){		
		$result = $this->_db->query("UPDATE menu SET visible = '0' WHERE id_menu = $id");
		if (!$result) {
			printf("Errormessage al Eliminar menu : %s\n\n", $this->_db->error);
		}
		else{
			$data = $id;
		}
		return $data;
	}

	public function select_max($field){		
		$result = $this->_db->query("SELECT MAX($field) as max FROM menu WHERE $field REGEXP '^[0-9]'");
		if (!$result) {
			printf("Errormessage al Select Max menu : %s\n\n", $this->_db->error);
		}
		else{
			foreach ($result as $key) {
				$data = $key['max'];
			}
		}
		return $data;
	}
	
}
$menu_db = new menu_db();
?>
