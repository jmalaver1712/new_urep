<?php 
require_once('../conexion/conexion.php');

class header_bd extends Conexion{

	public function __construct(){
		parent::__construct();
	}


	public function editar($datos, $logo){
		$data = 0;
		// logo
		if($logo == ""){
			$logo = $datos['logo_old'];
		}else{
			unlink("../../images/web/".$datos['logo_old']);
		}

		$result = $this->_db->query("UPDATE header SET 
			titulo = '$datos[titulo]' , 
			logo = '$logo' , 
			descripcion = '$datos[descripcion]' 
			WHERE id = '$datos[id]'");

		if (!$result) {
			printf("Errormessage al Editar Header : %s\n\n", $this->_db->error);
		}
		else{
			$data = $datos['id'];
		}
		return $data;
	}

}

$header_bd = new header_bd();
?>
