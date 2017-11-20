<?php 
require_once('../conexion/conexion.php');

class libros_bd extends Conexion{

	public function __construct(){
		parent::__construct();
	}

	public function insertar($datos, $archivo){
		$data = 0;
		$result = $this->_db->query("
			INSERT INTO gaceta 
			(version, mes, ano, descripcion, archivo, visible, orden) VALUES 
			('$datos[version]', '$datos[mes]', '$datos[ano]' ,'$datos[descripcion]', '$archivo', '1', '0');
			");
		if (!$result) {
			printf("Errormessage al Insertar Gaceta : %s\n\n", $this->_db->error);
		}
		else{
			$data = 1;
		}
		return $data;
	}


	public function editar($datos, $archivo){
		$data = 0;
		// Imagen
		if($archivo == ""){
			$archivo = $datos['imagen_old'];
		}else{
			unlink("../../images/gaceta/".$datos['imagen_old']);
		}

		$result = $this->_db->query("UPDATE gaceta SET 
			version = '$datos[version]' , 
			mes = '$datos[mes]' , 
			ano = '$datos[ano]' , 
			descripcion = '$datos[descripcion]' , 
			archivo = '$archivo'
			WHERE id = '$datos[id]'");

		if (!$result) {
			printf("Errormessage al Editar Gaceta : %s\n\n", $this->_db->error);
		}
		else{
			$data = 1;
		}
		return $data;
	}


}

$libros_bd = new libros_bd();

?>
