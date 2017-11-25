<?php

if(isset($_POST['send'])) {
	// Prepare the email
	$to = 'jeff@madbomberlabs.com';
	
	$firstname = $_POST["firstName"];
	$from = $_POST["email"];
	$subject = "Message from MadBomberLabs.com";
	$tel = $_POST["tel"];
	$message = $_POST["message"];
	
	$header = "From: $firstname <$mail_from>";
	
	// Send the email
	$sent = mail($to,$subject,$tel,$message,$header,$firstname,$from);
	if($sent) {
		echo 'Your message has been sent successfully! We will contact you as soon as possible.';
	}else{
		echo 'Sorry, your message could not send. Try again, or use the contact information provided.';
	}
}
?>