<?php 

require_once('../class/class_noticias_eventos.php');
require_once('../class/helper.php');
require_once('../../plantilla/config.php');
noCache();

$file_add = upload_doc($_FILES['archivo_add'] ,$_POST['ruta']);
$ruta = str_replace("../..","", $_POST['ruta']);
echo "http:".URL_MASTER.$ruta.$file_add;

?>
