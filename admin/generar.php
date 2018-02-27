<?php 
require_once('conexion/conexion.php');
require_once('class/datos_db_xml.php');
require_once('../plantilla/config.php');
require_once('class/helper.php');
noCache();


// GENERAR XML GACETA
$todos_gaceta = $datos_bd->all_regs('gaceta', "version");
$gaceta = $get_xml->generar_xml($todos_gaceta, "gaceta");
echo $gaceta."<br>";

// GENERAR XML LIBROS
$todos_libros = $datos_bd->all_regs('libros', "orden");
$libro = $get_xml->generar_xml($todos_libros, "libros");
echo $libro."<br>";

// GENERAR XML PROGRAMAS
$todos_programas = $datos_bd->all_programas();
$programa = $get_xml->generar_xml($todos_programas, "programas");
echo $programa."<br>";

// GENERAR XML CURSOS
$todos_cursos = $datos_bd->all_programas_cursos();
$cursos = $get_xml->generar_xml($todos_cursos, "cursos");
echo $cursos."<br>";

// GENERAR XML NOTICIAS
$todos_noticias_eventos = $datos_bd->all_regs('noticias_eventos', "fecha_publicacion");
$noticias_eventos = $get_xml->generar_xml($todos_noticias_eventos, "noticias_eventos");
echo $noticias_eventos."<br>";

$todos_noticias_eventos_galeria = $datos_bd->all_regs('noticias_eventos_galeria', "orden");
$noticias_eventos_galeria = $get_xml->generar_xml($todos_noticias_eventos_galeria, "noticias_eventos_galeria");
echo $noticias_eventos_galeria."<br>";

// GENERAR XML MENU
$todos_menu = $datos_bd->all_regs('menu', "id");
$menu = $get_xml->generar_xml($todos_menu, "menu");
echo $menu."<br>";

// GENERAR XML MENU
$todos_header = $datos_bd->all_regs('header', "id");
$header = $get_xml->generar_xml($todos_header, "header");
echo $header."<br>";

// GENERAR XML ITEMS
$todos_item = $datos_bd->all_regs('item', "orden");
$item = $get_xml->generar_xml($todos_item, "item");
echo $item."<br>";

foreach ($todos_item as $item) {
	// GENERAR XML NOTICIAS
	$todos_noticias_eventos = $datos_bd->noticias_eventos($item['id'], "fecha_publicacion");
	$noticias_eventos = $get_xml->generar_xml($todos_noticias_eventos, $item['nombre']);
	echo $noticias_eventos."<br>";
}

// GENERAR XML ITEMS_NOTICIAS_EVENTOS
$todos_item_noticias_eventos = $datos_bd->all_regs('item_noticias_eventos', "orden");
$item_noticias_eventos = $get_xml->generar_xml($todos_item_noticias_eventos, "item_noticias_eventos");
echo $item_noticias_eventos."<br>";


print("<meta http-equiv='refresh' content='2.0;url=inicio.php'>");

?>
