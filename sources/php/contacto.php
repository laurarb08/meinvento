<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'laura.rb08@gmail.com';
$subject = 'Mensaje de Visitante'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status)
	{ echo "<script language='javascript' type='text/javascript'>
		alert('Gracias por haberte puesto en contacto!');
		window.location = '../../en/contacto.html';
		</script>";
	}
else
	{echo "<script language='javascript' type='text/javascript'>
		alert('Ups! Hubo un error, por favor contáctame en laura.rb08@gmail.com');
		window.location = '../../en/contacto.html';
	</script>";
	}
?>
