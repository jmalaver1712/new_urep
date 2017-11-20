<?php 
require_once('../conexion/conexion.php');

class noticias_eventos_bd extends Conexion{

	public function __construct(){
		parent::__construct();
	}

	public function insertar($datos, $imagen){
		$data = 0;
		$fecha_publicacion = date("Y-m-d");
		
		$result = $this->_db->query("
			INSERT INTO noticias_eventos 
			(tipo, titular, enlace, importancia, imagen, fecha_publicacion, resumen, noticia, visible, orden) VALUES 
			('$datos[tipo]', '$datos[titular]', '$datos[enlace]', '$datos[importancia]', '$imagen', '$fecha_publicacion', '$datos[resumen]', '$datos[noticia]', '1', '0')
			");
		if (!$result) {
			printf("Errormessage al Insertar noticias_eventos : %s\n\n", $this->_db->error);
		}
		else{
			$data = $this->_db->insert_id;
		}
		return $data;
	}


	public function orden($datos){
		$data = 0;
		$result = $this->_db->query("
			UPDATE noticias_eventos SET 
			orden = '$datos[orden]'  
			WHERE id = '$datos[id]'
		");
		if (!$result) {
			printf("Errormessage al Cambiar Orden noticias_eventos : %s\n\n", $this->_db->error);
		}
		else{
			$data = 1;
		}
		return $data;
	}


	public function insertar_galeria($id, $tipo, $imagen){
		$data = 0;
		$result = $this->_db->query("
			INSERT INTO noticias_eventos_galeria 
			(id_noticia_evento, tipo_galeria, url_galeria) VALUES ('$id', '$tipo', '$imagen');
			");
		if (!$result) {
			printf("Errormessage al Insertar noticias_eventos_galeria : %s\n\n", $this->_db->error);
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
			unlink("../../images/noticias_eventos/".$datos['imagen_old']);
		}

		// Importancia
		if($datos['importancia'] == "1"){
			$importancia = 1;
		}else{
			$importancia = 0;
		}

		$result = $this->_db->query("UPDATE noticias_eventos SET 
			tipo = '$datos[tipo]' , 
			titular = '$datos[titular]' , 
			enlace = '$datos[enlace]' , 
			importancia = '$importancia' , 
			imagen = '$imagen' , 
			resumen = '$datos[resumen]' , 
			noticia = '$datos[noticia]' 
			WHERE id = '$datos[id]'");

		if (!$result) {
			printf("Errormessage al Editar noticias_eventos : %s\n\n", $this->_db->error);
		}
		else{
			$data = 1;
		}
		return $data;
	}


	public function eliminar($id){
		$data = 0;
		$registro = $this->select($id);

		$result = $this->_db->query("UPDATE noticias_eventos SET visible = '0' WHERE id = $id ");
		if (!$result) {
			printf("Errormessage al Eliminar noticias_eventos : %s\n\n", $this->_db->error);
		}
		else{
			// unlink("../../images/noticias_eventos/".$registro[0]['imagen']);
			$data = 1;
		}
		return $data;
	}


	public function select($id){
		$data = array();
		$result = $this->_db->query("SELECT * FROM noticias_eventos WHERE id = '$id'");
		if (!$result) {
			printf("Errormessage Todos los ".$table.": %s\n\n", $this->_db->error);
		}else{
			$regs = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($regs as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}

}

$noticias_eventos_bd = new noticias_eventos_bd();
?>
