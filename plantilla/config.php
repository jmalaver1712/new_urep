<?php 

class get_xml {

	public function valida_n($num){
		$patron = "/^[[:digit:]]+$/";
		if (preg_match($patron, $num)) {
			return $num;
		} else {
			return 0;
		}
	}

	// OBTENER TODOS LOS REGISTROS 
	public function registros_all_xml($name_xml){
		$data = array();	
		$xml = simplexml_load_file("../datos/".$name_xml, null, true);
		// echo $xml->item[0]->nombre; // mostrara Juan Carlos
		foreach ($xml->item as $registro) {
			$data[] = $registro;
		}
		return $data;
	}

	// OBTENER UN REGISTRO - ID
	public function reg_detail_xml($campo ,$id, $name_xml, $limit){
		if (is_null($limit)) {
			$limit = 1000;
		}
		$data = array();
		$all_regs = $this->registros_all_xml($name_xml);
		$aux = 0;
		foreach ($all_regs as $reg) {
			foreach ($reg as $key => $value) {
				if($key == $campo && $value == $id && $aux < $limit){
					$data[] = $reg;
					$aux++;
				}	
			}
		}

		return $data;
	}


	public function array_to_xml($array, &$xml_user_info) {
	    foreach($array as $key => $value) {
	        if(is_array($value)) {
	            if(!is_numeric($key)){
	                $subnode = $xml_user_info->addChild("$key");
	                $this->array_to_xml($value, $subnode);
	            }else{
	                $subnode = $xml_user_info->addChild("item");
	                $this->array_to_xml($value, $subnode);
	            }
	        }else {
	            $xml_user_info->addChild("$key",htmlspecialchars("$value"));
	        }
	    }
	}

	public function generar_xml($array, $name) {
		$xml_user_info = new SimpleXMLElement("<?xml version='1.0' encoding='UTF-8' ?><".$name."></".$name.">");
		$this->array_to_xml($array,$xml_user_info);
		$xml_file = $xml_user_info->asXML('../datos/'.$name.'.xml');

		if($xml_file){
			$rest = 'XML '.$name.'.xml Fue generado Correctamente';
		}else{
			$rest = 'XML Error al generar';
		}
		return $rest;
	}

}

$get_xml = new get_xml();

/*
BUSCAR EN XML
$libros = simplexml_load_file("php/libros.xml", null, true);
$result = $libros->xpath('//id_libro[.="' .$id_libro. '"]/ancestor::item');
*/
?>
