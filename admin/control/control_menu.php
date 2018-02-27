<?php 
require_once('../class/class_menu.php');
echo "<pre>";
print_r($_POST);
echo "</pre>";
// exit();
if (isset($_POST['accion'])) {

	if (!isset($_POST['url'])) {
		$max_url = $menu_db->select_max('url');
		$max_orden = $menu_db->select_max('orden');
		$_POST['id'] = "";
		$_POST['url'] = $max_url+10;
		$_POST['orden'] = $max_orden+1;
	}

	if (isset($_POST['submenu'])) {
		if ($_POST['submenu'] == 1){
			if (!copy("../../images/web/menu/default.png", "../../images/web/menu/".$_POST['texto'].".png")) {
				echo "Error al copiar $fichero...\n";
			}
		}
	}


	if ($_POST['accion'] == "agregar"){
		$insertar = $menu_db->insertar($_POST);
		if(is_numeric($insertar)){
			print("<meta http-equiv='refresh' content='4.0;url=../generar.php'>");
		}else{
			?>
			<center>
				<h2> Ha ocurrido un error, intentelo mas tarde </h2>
				<a href="../index.php">Volver al inicio</a>
			</center>
			<?php
		}
	}
	if ($_POST['accion'] == "editar"){
		$editar = $menu_db->editar($_POST);
		if(is_numeric($editar)){
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
if (isset($_GET['accion'])) {
	if ($_GET['accion'] == "eliminar"){
		$eliminar = $menu_db->eliminar($_GET['id']);
		if(is_numeric($eliminar)){
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