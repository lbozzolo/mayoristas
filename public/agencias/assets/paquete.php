<?php

if(!$_POST) exit;

// Email verification, do not edit.
function isEmail($email_contact ) {
	return(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email_contact ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_paquete     = $_POST['name_paquete'];
$email_paquete    = $_POST['email_paquete'];
$message_paquete = $_POST['message_paquete'];
$verify_contact   = $_POST['verify_contact']

if(trim($name_paquete) == '') {
	echo '<div class="error_message">Ingresa tu Nombre.</div>';
	exit();
} else if(trim($email_paquete) == '') {
	echo '<div class="error_message">Ingrese un mail válido.</div>';
	exit();
} else if(!isEmail($email_paquete)) {
	echo '<div class="error_message">Ingrese un mail válido.</div>';
	exit();
} else if(trim($message_paquete) == '') {
	echo '<div class="error_message">Por favor ingrese su mensaje.</div>';
	exit();
}

if(get_magic_quotes_gpc()) {
	$message_paquete = stripslashes($message_paquete);
}


//$address = "HERE your email address";
$address = "fernandoalf@hotmail.com";


// Below the subject of the email
$e_subject = 'Has sido contactado por ' . $name_paquete . '.';

// You can change this if you feel that you need to.
$e_body = "Has sido contactado por $name_contact $lastname_contact con el siguiente mensaje." . PHP_EOL . PHP_EOL;
$e_content = "\"$message_paquete\"" . PHP_EOL . PHP_EOL;
$e_reply = "Puedes contactar $name_paquete via email, $email_paquete";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email_paquete" . PHP_EOL;
$headers .= "Reply-To: $email_paquete" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$user = "$email_paquete";
$usersubject = "Muchas Gracias";
$userheaders = "From: fernandoalf@hotmail.com\n";
$usermessage = "Gracias por contactar con ELYSIUM TRAVEL. Le contestaremos en breve!";
mail($user,$usersubject,$usermessage,$userheaders);

if(mail($address, $e_subject, $msg, $headers)) {

	// Success message
	echo "<div id='success_page' style='padding:25px 0'>";
	echo "<strong >Email enviado.</strong><br>";
	echo "Muchas gracias <strong>$name_contact</strong>,<br> Su mensaje ha sido enviado. Nos pondremos en contacto con usted en breve.";
	echo "</div>";

} else {

	echo 'ERROR!';

}
