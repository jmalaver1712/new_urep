<?php 
require_once('../conexion/conexion.php');

class libros_bd extends Conexion{

	public function __construct(){
		parent::__construct();
	}

	public function insertar($datos, $imagen){
		$data = 0;
		$fecha_publicacion = date("Y-m-d");
		
		$result = $this->_db->query(" 
			INSERT INTO libros 
			(nombre, autores, isbn_impresa, ano_impresa, isbn_digital, ano_digital, abstract, programa_academico, APA, IEEE, imagen, visible, orden) VALUES
			($datos[nombre], $datos[autores], $datos[isbn_impresa], $datos[ano_impresa], $datos[isbn_digital], $datos[ano_digital], $datos[abstract], $datos[programa_academico], $datos[APA], $datos[IEEE], $imagen)
			");
		if (!$result) {
			printf("Errormessage al Insertar libros : %s\n\n", $this->_db->error);
		}
		else{
			$data = 1;
		}
		return $data;
	}


	public function editar($datos, $imagen){
		$data = 0;
		// Imagen
		if($imagen == ""){
			$imagen = $datos['imagen_old'];
		}else{
			unlink("../../images/libros/".$datos['imagen_old']);
		}

		// Importancia
		if($datos['importancia'] == "1"){
			$importancia = 1;
		}else{
			$importancia = 0;
		}
		
		$result = $this->_db->query("UPDATE libros SET 
			tipo = '$datos[tipo]'
			WHERE id = '$datos[id]'");

		if (!$result) {
			printf("Errormessage al Editar libros : %s\n\n", $this->_db->error);
		}
		else{
			$data = 1;
		}
		return $data;
	}


	public function eliminar($id){
		$data = 0;
		$registro = $this->select($id);

		$result = $this->_db->query("UPDATE libros SET visible = '0' WHERE id = $id ");
		if (!$result) {
			printf("Errormessage al Eliminar libros : %s\n\n", $this->_db->error);
		}
		else{
			// unlink("../../images/libros/".$registro[0]['imagen']);
			$data = 1;
		}
		return $data;
	}

}

$libros_bd = new libros_bd();
?>
