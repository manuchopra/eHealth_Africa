<?php

	// site owner
	$site_name = 'manuchopra.in';
	$sender_domain = 'hello@manuchopra.in';
	$to = 'mchopra42@icloud.com';
	
	
	// contact form fields
	$name = "Manu Chopra";
	$email = "mchopra@cs.stanford.edu";
	$subject = "Daily Task Completed" ;
	$message = "Please increase my score" ;
	
	
	// check for error
	$error = false;
	
	if ( $name === "" ) { $error = true; }
	
	if ( $email === "" ) { $error = true; }
	
	if ( $subject === "" ) { $error = true; }
	
	if ( $message === "" ) { $error = true; }
	
	
	// if no error, then send mail
	if ( $error == false )
	{
		$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
		
		$headers = "From: " . $site_name . ' <' . $sender_domain . '> ' . "\r\n";
		$headers .= "Reply-To: " . $name . ' <' . $email . '> ' . "\r\n";
		
		$mail_result = mail( $to, $subject, $body, $headers );
		
		if ( $mail_result == true )
		{
			echo 'success';
		}
		else
		{
			echo 'unsuccess';
		}
		// end if
	}
	else
	{
		echo 'error';
	}
	// end if

?>