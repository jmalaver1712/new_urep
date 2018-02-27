<?php 
require_once('../conexion/conexion.php');

class noticias_eventos_bd extends Conexion{

	public function __construct(){
		parent::__construct();
	}


	public function caracteres($url){
		
		$url = strtolower($url);
     //Reemplazamos caracteres especiales latinos
		$find = array('á','é','í','ó','ú','â','ê','î','ô','û','ã','õ','ç','ñ','Á','É','Í','Ó','Ú','Â','Ê','Î','Ô','Û','Ã','Õ','Ç','Ñ');
		$repl = array('a','e','i','o','u','a','e','i','o','u','a','o','c','n','a','e','i','o','u','a','e','i','o','u','a','o','c','n');
		$url = str_replace($find, $repl, $url);
     //Añadimos los guiones bajos
		$find = array(' ', '&amp;', '\r\n', '\n','+');
		$url = str_replace($find, '_', $url);
     //Eliminamos y Reemplazamos los demas caracteres especiales
		$find = array('/[^a-z0-9\_&lt;&gt;]/', '/[\_]+/', '/&lt;{^&gt;*&gt;/');
		$repl = array('', '_', '');
		$url = preg_replace($find, $repl, $url);

		return $url;
	}


	public function items($id_noticias_eventos, $items){
		$data = 0;
		$result_1 = $this->_db->query("DELETE FROM item_noticias_eventos WHERE id_noticias_eventos = $id_noticias_eventos");
		if (!$result_1) {
			printf("Errormessage al Insertar noticias_eventos : %s\n\n", $this->_db->error);
		}
		foreach ($items as $key => $value) {
			$result_2 = $this->_db->query("
				INSERT INTO item_noticias_eventos (id_item, id_noticias_eventos, visible, orden) VALUES ('$value', '$id_noticias_eventos', '1', '0');
				");

			if (!$result_2) {
				printf("Errormessage al Insertar noticias_eventos : %s\n\n", $this->_db->error);
			}


		}
		$data = 1;
		return $data;
	}



	public function insertar($datos, $imagen){
		$data = 0;
		$fecha_publicacion = date("Y-m-d");

		$titular = strtoupper($datos['titular']);
		$name = $this->caracteres($datos['titular']);

		$result = $this->_db->query("
			INSERT INTO noticias_eventos 
			(tipo, titular, name, enlace, importancia, imagen, fecha_publicacion, resumen, noticia, visible, orden) VALUES 
			('$datos[tipo]', '$titular', '$name','$datos[enlace]', '$datos[importancia]', '$imagen', '$fecha_publicacion', '$datos[resumen]', '$datos[noticia]', '1', '0')
			");
		if (!$result) {
			printf("Errormessage al Insertar noticias_eventos : %s\n\n", $this->_db->error);
		}	
		else{
			$data = $this->_db->insert_id;
			if(isset($datos['item'])){
				$name = $this->items($data, $datos['item']);
			}
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

		$titular = strtoupper($datos['titular']);
		$name = $this->caracteres($datos['titular']);

		$result = $this->_db->query("UPDATE noticias_eventos SET 
			tipo = '$datos[tipo]' , 
			titular = '$titular' , 
			name = '$name' , 
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
			if(isset($datos['item'])){
				$name = $this->items($datos['id'], $datos['item']);
			}
			$data = $datos['id'];
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
