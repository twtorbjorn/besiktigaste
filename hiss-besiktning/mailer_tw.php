<?php



	//set mail config
	$to      = 'isa.neuton@gmail.com';
	$subject = 'Offertförfrågan';
	
	//set mail message body
	$message = 'Offertf&ouml;fr&aring;gan fr&aring;n <b>' . $userName . '</b><br/><br/>';

	

	//set mail headers
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= 'From: ny.kund@besiktigaste.se' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	//send email and check status
	$mailer_status = mail($to, $subject, $message, $headers);
	if($mailer_status) {
		header("HTTP/1.0 200 OK");
		echo 'OK';
	}
	else {
		header("HTTP/1.0 500 Unable to send email to the following address.");
		echo 'ERROR';
	}
?>