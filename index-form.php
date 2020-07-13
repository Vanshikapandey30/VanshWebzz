<?php
	$name= $_POST['name'];
	$visitor_email= $_POST['email'];
	$visitor_mobileno= $_POST['mobileno'];
	$message = $_POST['message'];

	$email_form= 'pandeyvanshi3028@gmail.com';

	$email_subject= 'New form message';

	$email_body= "User Name: $name.\n";
			"User Email: $visitor_email.\n";
			 "User mobileno: $visitor_mobileno.\n";
			   "User Message: $message.\n";
	
	$to= "vanshikamitadt@gmail.com";
	$headers= "Form: $email_from \r\n";
	$headers= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: index.html");
?>












