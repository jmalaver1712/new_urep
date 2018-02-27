<?php 
require_once('../class/class_egresados.php');
require_once('../class/class_egresados_urep.php');

$select = $egresados->am_usuario();
foreach ($select as $key) {
	// $new_cod = $key['idnumber'];
	$new_cod = $egresados_urep->nuevoCodigo($key['idnumber']);
	echo $new_cod;
	$new_pass = $egresados_urep->pass($new_cod);
	echo "-".$new_pass;
	// $clave = "PaulaCielo";
	// $new_pass = $egresados_urep->m_decrypt($key['password'], $clave);
	// $update = $egresados->up_am_usuario($key['idnumber'],$new_pass);
}
?>