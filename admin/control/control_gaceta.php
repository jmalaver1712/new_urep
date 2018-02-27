<?php 

require_once('../class/class_gaceta.php');
require_once('../class/helper.php');
noCache();

if (isset($_POST['accion'])) {

	$file = upload_doc($_FILES['imagen'] ,"../../images/gaceta/");

	// INSERTAR
	if ($_POST['accion'] == "agregar"){
		$insertar = $gaceta_bd->insertar($_POST, $file);
		if($insertar == 1){
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
	
	// EDITAR
	if ($_POST['accion'] == "editar"){

		$editar = $gaceta_bd->editar($_POST, $file);
		if($editar == 1){
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


// ELIMINAR 
if (isset($_GET['accion']) && $_GET['accion'] = "delete"){
	$eliminar = $gaceta_bd->eliminar($_GET['id']);
	if($eliminar == 1){
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





?>
