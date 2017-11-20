<?

require_once 'class.phpmailer.php';
require_once 'class.smtp.php';

//CICLO DE RECIBIR DATOS
$numero_post = count($_POST);
$tags = array_keys($_POST);
$valores = array_values($_POST);

// Fecha Hoy
// $fec_hoy = date("Y-m-d");

//Tomamos Valores POST
if($numero_post > 0){
		//Tomamos Valores
	for($i=0;$i < $numero_post ;$i++){
		${$tags[$i]}=$valores[$i];
	}
}

	$mail = new PHPMailer(); // create a new object
	
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPKeepAlive = true; 
	
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	// $mail->Host = "outlook.office365.com";
	$mail->Host = "smtp.gmail.com";
	
	// $mail->Port = 587;
	$mail->Port = 465;

	$mail->IsHTML(true);
	
	$mail->Username = "salaemisionur@gmail.com";
	$mail->Password = "Tricaster123";
	$mail->SetFrom("salaemisionur@gmail.com");

	$msj = $nombres_apellidos." - ".$celular." - ".$email." - ".$programa;

	$asunto = "Email Prueba";

	$para = $email;

	$mail->Subject = $asunto;
	$mail->Body = $msj;
	$mail->AddAddress($para);
	$mail->CharSet = 'UTF-8';

	 if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	 } else {
		echo "El mensaje se ha enviado";

		print("<meta http-equiv='refresh' content='2.1; url=../index.html' />");
	 }
	 ?>