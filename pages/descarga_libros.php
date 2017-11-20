
<?php
require_once('../plantilla/config.php');

$data = array();
// GENERAR XML DESCARGAS
$todos_descargas_libros = $get_xml->registros_all_xml('descargas_libros.xml');
foreach ($todos_descargas_libros as $descargas_libros) {
    $cont = 0;
    foreach ($descargas_libros as $key => $value) {
         $data[$cont][$key] = $value;
    }
    $cont++;
}

$data[] = $_POST;
$descargas_libros = $get_xml->generar_xml($data, "descargas_libros");

print("<meta http-equiv='refresh' content='0.1;url=libros.php'>");
?>
