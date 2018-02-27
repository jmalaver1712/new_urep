<?php 

require_once('../class/class_noticias_eventos.php');
require_once('../class/helper.php');
noCache();

if (isset($_POST['accion'])) {

	// ORDEN
	if ($_POST['accion'] == "ordenar"){
		$orden = $noticias_eventos_bd->orden($_POST);
		if($orden != 1){
			?>
			<center>
				<h2> Ha ocurrido un error, intentelo mas tarde </h2>
				<a href="../index.php">Volver al inicio</a>
			</center>
			<?php
		}
	}

	$file = upload_doc($_FILES['imagen'] ,"../../images/noticias_eventos/");
	$galeria_array = $_FILES['galeria'];
	$imagenes =  transpose($galeria_array);


	// INSERTAR
	if ($_POST['accion'] == "agregar"){

		$insertar = $noticias_eventos_bd->insertar($_POST, $file);
		if($insertar != 0){
			if(isset($_FILES['galeria'])){

				foreach($imagenes as $imagen_gal){
					if ($imagen_gal['name'] != "") {
						$file_gal = upload_doc($imagen_gal ,"../../images/noticias_eventos/galeria/");
						$insertar_gal = $noticias_eventos_bd->insertar_galeria($insertar, "imagen" ,$file_gal);
						sleep(2);
					}
				}
				
			}
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
		$editar = $noticias_eventos_bd->editar($_POST, $file);
		if($editar != 0){

			if(isset($_FILES['galeria'])){

				foreach($imagenes as $imagen_gal){
					if ($imagen_gal['name'] != "") {
						$file_gal = upload_doc($imagen_gal ,"../../images/noticias_eventos/galeria/");
						$editar_gal = $noticias_eventos_bd->insertar_galeria($editar, "imagen" ,$file_gal);
						sleep(2);
					}
				}
				
			}

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

	if ($_POST['accion'] == "upload_doc"){
		$file_add = upload_doc($_FILES['archivo_add'] ,"../../images/noticias_eventos/galeria/");
		echo $file_add;
	}

	
	
}

// ELIMINAR 
if (isset($_GET['accion']) && $_GET['accion'] = "delete"){
	$eliminar = $noticias_eventos_bd->eliminar($_GET['id']);
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
