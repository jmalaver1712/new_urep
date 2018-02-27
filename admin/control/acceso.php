<?php 

if ($_POST['user'] == "root" && $_POST['password'] == "toor") {
	print("<meta http-equiv='refresh' content='0.1;url=../inicio.php'>");
}
else{
	print("<meta http-equiv='refresh' content='0.1;url=../index.php'>");
}
?>