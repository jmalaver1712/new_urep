<?php 

function upload_doc($file ,$directorio){
    $copiarFichero = false;
    if (is_uploaded_file ($file['tmp_name']))
    {
        $nombreFichero = $file['name'];
        $copiarFichero = true;
    //Renombrar el Archivo
        $exp = explode(".", $nombreFichero);
        $extension = end($exp);
        $idUnico = time();
        $nombreFichero = $idUnico.".".$extension;
    }
    // No se ha introducido ningún fichero
    else if ($file['name'] == ""){
        $nombreFichero = '';
    }
    // El fichero introducido no se ha podido subir
    else
    {
        $errores["imagen"] = "¡No se ha podido subir el fichero!";
        $error = true;
    }     

    // Mover foto a su ubicación definitiva
    if ($copiarFichero){
        move_uploaded_file($file['tmp_name'], $directorio . $nombreFichero);
    }
    return $nombreFichero;
}


function transpose($array) {
    $transposed_array = array();
    if ($array) {
        foreach ($array as $row_key => $row) {
            foreach ($row as $column_key => $element) {
                $transposed_array[$column_key][$row_key] = $element;
            }
        }
        return $transposed_array;
    }
}


function noCache() {
    header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
}

?>
