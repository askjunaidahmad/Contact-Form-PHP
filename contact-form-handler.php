<?php

	$name = $_POST['name'];
	$visitor_email = $_POST ['email'];
	$visitor_message = $_POST ['message'];



	$email_from = 'askjunaidahmad@gmail.com';

	$email_subject = "New Contact Form Submit";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
					"Message: $visitor_message.\n";


	$to = "jugnutours@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html")


?>