<?php 

require_once('../conexion/conexion.php');

class egresados extends Conexion{

	public function __construct(){
		parent::__construct();
	}

	public function am_usuario(){
		$data = array();
		$result = $this->_db->query("
			SELECT idnumber, password FROM am_usuario 
			");

		if (!$result) {
			printf("Errormessage Todos los AM_USUARIO: %s\n\n", $this->_db->error);
		}else{
			foreach ($result as $key => $value) {
				$data[$key] = $value;
			}
		}
		return $data;
	}

	public function up_am_usuario($codigo,$new_pass){
		$data = 0;
		$result = $this->_db->query("UPDATE am_usuario SET password = '$new_pass' WHERE idnumber = '$codigo' ");
		if (!$result) {
			printf("Errormessage Todos los AM_USUARIO_PASS: %s\n\n", $this->_db->error);
		}else{
			$data = 1;
		}
		return $data;
	}


	public function m_decrypt($data, $key){
		$cipher = "rijndael-256";
		$mode = "cbc";
		return (string)
		mcrypt_decrypt(
			$cipher,
			substr(md5($key),0,mcrypt_get_key_size($cipher, $mode)),
			base64_decode($data),
			$mode,
			substr(md5($key),0,mcrypt_get_block_size($cipher, $mode))
		);
	}

	public function actualizar($datos){

		$data = 0;
		$fecha_update = date("Y-m-d");
		$result = $this->_db->query("
			INSERT INTO egresado_act(
			codigo_new, fecha_nacimiento, lugar_nacimiento, email, dir_domicilio, telefono , celular , estado_civil, n_hijos, entidad_labora, dir_labora, email_labora, tel_labora , relacion_laboral, sector_laboral, ascensos_laborales, especializacion_mejora, area_laboral, rango_salarial, otros_estudios, tipo_estudios, temas , logros_laborales, fecha_update
			)
			VALUES(
			'$datos[Id_Nuevo]',
			'$datos[fecha_nacimiento]',
			'$datos[lugar_nacimiento]',
			'$datos[email]',
			'$datos[dir_domicilio]',
			'$datos[telefono]',
			'$datos[celular]',
			'$datos[estado_civil]',
			'$datos[n_hijos]',
			'$datos[entidad_labora]',
			'$datos[dir_labora]',
			'$datos[email_labora]',
			'$datos[tel_labora]',
			'$datos[relacion_laboral]',
			'$datos[sector_laboral]',
			'$datos[ascensos_laborales]',
			'$datos[especializacion_mejora]',
			'$datos[area_laboral]',
			'$datos[rango_salarial]',
			'$datos[otros_estudios]',
			'$datos[tipo_estudios]',
			'$datos[temas]',
			'$datos[logros_laborales]',
			'$fecha_update'
			)
			");

		if (!$result) {
			printf("Errormessage Actualizar Egresados: %s\n\n", $this->_db->error);
		}else{
			echo '
			<script type="text/javascript">
			alert("Información actualizada correctamente");
			</script>
			';
			$data = 1;
		}
		return $data;

	}

	public function seleccionar($id){
		$data = array();
		$result = $this->_db->query(" SELECT * FROM egresado_act WHERE codigo_new = '$id' ORDER BY id DESC LIMIT 1");
		if (!$result) {
			printf("Errormessage Select Egresados: %s\n\n", $this->_db->error);
		}else{
			foreach ($result as $key => $value) {
				$data[$key] = $value;
			}
		}
		return $data;
	}

}

$egresados = new egresados();

?>