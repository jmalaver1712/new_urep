<?php
class inscribir extends Conexion{

    public function __construct(){
        parent::__construct();
    }

    // DATOS DEL USUARIO LOGIN
	public function datos_usuario(){

		$data = array();

		//CICLO DE RECIBIR DATOS
		$numero_post = count($_POST);
		$tags = array_keys($_POST);
		$valores = array_values($_POST);
		// Fecha Hoy
		$fec_hoy = date("Y-m-d");

		//Tomamos Valores POST
		if($numero_post > 0){
			//Tomamos Valores
			for($i=0;$i < $numero_post ;$i++){
				${$tags[$i]}=$valores[$i];
				$data[$tags[$i]] = $valores[$i];
			}
		}

		$data['fecha'] = date("Y-m-d H:i:s"); 
		return $data;
	}


	public function valida_usuario(){
		$data = $this->datos_usuario();		

		$datos_add = $this->_db->query("SELECT count(*) FROM registrados WHERE email = '$data[email]' OR celular = '$data[celular]'");
		if (!$datos_add) {
			printf("Errormessage Valida Usuario: %s\n", $this->_db->error);
		}else{
			$row = $datos_add->fetch_all(MYSQLI_ASSOC);
			$val = count($row); 
		}

		return $val;
	}


	public function insertar_usuario(){
		$valida_usuario = $this->valida_usuario();
		
		$data = 0; 

		if($valida_usuario == 0){

			$user = $this->datos_usuario();

			$qr = "INSERT INTO registrados (nombres, apellidos, email, n_identidad, celular, programa, informacion, fecha)
			VALUES ('$user[nombres]', '$user[apellidos]', '$user[email]', '$user[n_identidad]', '$user[celular]', '$user[programa]', '$user[informacion]', '$user[fecha]')";
			$datos_add = $this->_db->query($qr);

			if (!$datos_add) {
				printf("Errormessage Insertar Usuario: %s\n", $this->_db->error);
			}else{
				$data = 1;
				$envio = $this->enviar_mail($user);
			}

			// $qr1 = "INSERT INTO am_usuario_curso (codigo_curso, per_aca, idnumber, moodle_rol_id, estado, grupo)
			// VALUES ('$data[codigo_curso]', '$data[per_aca]', '$data[n_identidad]', '5', 'A', '1')";
			// $datos_add2 = $this->_db->query($qr1);

			// $datos_add3 = $this->_db->query("CALL estudiantes()");
			
			// $datos_add3 = $this->_db->query("CALL matricular_estudiantes(2017003)");	
		}

		return $data;
	}

	public function enviar_mail($user){

		// Destinatario
		$para  = $user[email];

		// título
		$título = 'Corporacion Universitaria Republicana - Concurso de Beca';
		?>
		// mensaje
		$mensaje = "
		<html>
			<head>
				<title>Corporación Universitaria Republicana</title>
			</head>
			<body>
				<center>
					<img src="http://localhost/WEB/new_urep/images/web/logo.png" width="30%">
					<h3>Gracias por contactarse con Nosotros </h3>
					<p>En las próximas horas un asesor se comunicará con Usted</p>
				</center>
			</body>
		</html>
		";
		<?php
		// Para enviar un correo HTML, debe establecerse la cabecera Content-type
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$cabeceras .= 'From: Corporacion Universitaria Republicana <informacion@urepublicana.edu.co>' . "\r\n";

		// Enviarlo
		mail($para, $título, $mensaje, $cabeceras);
	}


	public function reporte(){
		$data = array();
		$datos = $this->_db->query("SELECT nombres, apellidos, email, n_identidad, celular, programa, informacion, fecha FROM registrados");
		if (!$datos) {
			printf("Errormessage Valida Usuario: %s\n", $this->_db->error);
		}else{
			$row = $datos->fetch_all(MYSQLI_ASSOC);
			foreach ($row as $key) {
				$data[] = $key;
			}
		}

		return $data;
	}


	/*	
	public function consultar_usuario($n_identidad){
		$data = array();

		$datos = $this->_db->query("SELECT username, password FROM am_usuario WHERE n_identidad = '$n_identidad' LIMIT 1");
		if (!$datos) {
			printf("Errormessage Valida Usuario: %s\n", $this->_db->error);
		}else{
			$row = $datos->fetch_all(MYSQLI_ASSOC);
			foreach ($row as $key) {
				foreach ($key as $value) {
					$data[] = $value;
				}
			}
		}

		return $data;
	}
	*/

}

$letras = array();
for ($i=65;$i<=90;$i++) {
  $letras[] = chr($i);                 
}

?>