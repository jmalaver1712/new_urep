<?php 

require_once('../class/class_header.php');
require_once('../class/helper.php');
noCache();

if (isset($_POST['accion'])) {

	$file = upload_doc($_FILES['logo'] ,"../../images/web/");

	// EDITAR
	if ($_POST['accion'] == "editar"){
		$editar = $header_bd->editar($_POST, $file);
		if($editar != 0){
			print("<meta http-equiv='refresh' content='2.0;url=../generar.php'>");
		}else{
			?>
			<center>
				<h2> Ha ocurrido un error, intentelo mas tarde </h2>
				<a href="../index.php">Volver al inicio</a>
			</center>
			<?php
		}
	}

	
}

?>
