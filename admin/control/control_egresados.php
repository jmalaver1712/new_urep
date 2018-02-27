<?php 
require_once('../class/class_egresados.php');

if ($_POST['accion'] == "update"){
	$update = $egresados->actualizar($_POST);
	if ($update == 1) {
		print("<meta http-equiv='refresh' content='0.1;url=../../pages/egresados.php'>");
		exit();
	}
}

?>