<?php
require_once("conexion.php");
require_once("clases.php");

$inscribir = new inscribir();

$user = $inscribir->insertar_usuario();

print("<meta http-equiv='refresh' content='0.01; url=../index.php?rta=$user' />");	

?>