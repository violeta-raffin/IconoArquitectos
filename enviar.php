<?php

	var_dump($_POST);
	$name    = stripslashes($_POST['name']);
	$email   = stripslashes($_POST['email']);
	$message = stripslashes($_POST['message']);
	$tel     = stripslashes($_POST['tel']);
	$from    = 'Formulario Web'; 

	$to = 'consultas@iconoarquitectos.com'; 
	// $to = 'maildeprueba@gmail.com';

	$subject = "Mensaje desde el anuncio: 'Renová tus ambientes'";
	$body    = "Nombre: $name\n E-Mail: $email\n Tel: $tel\n Mensaje:\n $message";

	if (mail ($to, $subject, $body, $from)) 
	{ 
		echo '<SCRIPT>window.location="../gracias.php";</SCRIPT>';
	} 
	else 
	{ 
		echo '<SCRIPT>window.location="../error.php";</SCRIPT>';
	}



?>