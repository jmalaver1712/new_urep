<?php 
require_once('conexion/conexion.php');
require_once('class/datos_db_xml.php');
require_once('../plantilla/config.php');

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

print("<meta http-equiv='refresh' content='2.0;url=index.php'>");

?>
