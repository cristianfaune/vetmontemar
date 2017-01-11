<?php

require("class.phpmailer.php");

$mail = new PHPMailer();

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (isset($_POST['email'])) {
	if (preg_match('(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,})', $_POST['email'])) {
		$msg = 'E-mail address is valid';
	} else {
		$msg = 'Invalid email address';
	}

	$mail->IsSMTP();
	$mail->Host = "srv142.smart.cl";

	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;

	$mail->Username = "testing@vetmontemar.cl";
	$mail->Password = "testing123";

	$mail->From = $email;
	$mail->FromName = $name;
	$mail->AddAddress("testing@vetmontemar.cl");

	$mail->IsHTML(true);

	$mail->Subject = $subject;
	$mail->Body = $message;

	// if the url field is empty
	if(isset($_POST['url']) && $_POST['url'] == ''){

		if(!$mail->Send())
		{
			$text = "El mensaje no se pudo enviar, inténtelo nuevamente por favor.";

			exit;
		}

		$text = "GRACIAS por comunicarte con nosotros, te responderemos muy pronto.";

		echo '<xml>	<someText>'.$text.'</someText> </xml>';

	}

} else {
	die('Invalid entry!');
}


?>
