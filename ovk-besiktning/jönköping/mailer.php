<?php
	if (empty($_POST)) {
	    return;
	}

	//parse xml string to array
	$xml = simplexml_load_string($_POST['xml']);
	$json = json_encode($xml);
	$xml_array = json_decode($json,TRUE);

	//set mail config
	$to      = 'torbjorn.wallin@gmail.com';
	$subject = 'Offertförfrågan';
	
	if(isset($xml_array['userEmail']) && !empty($xml_array['userEmail'])) {
		$userEmail = $xml_array['userEmail'];
	}
	
	$userName = '';
	if(isset($xml_array['userName']) && !empty($xml_array['userName'])) {
		$userName = $xml_array['userName'];
	}

	//set mail message body
	$message = '<html><body>Offertförfrågan från <b>' . $userName . '</b><br/><br/>';

	//extract xml to message body
	foreach ($xml_array as $key => $value) {
		if(!is_array($value)) {
			$message .= $key . ': ' . $value . "<br/>";
		}
		else {
			if($key == 'nodes') {
				$message .= '<br/>';
				if(is_array($value['node'])) {
					if(isset($value['node']['code'])) {
						$message .= $value['node']['code'] . ': ' . $value['node']['description'] . "<br/>";
					}
					else {
						foreach ($value['node'] as $nkey => $nvalue) {
							$message .= $nvalue['code'] . ': ' . $nvalue['description'] . "<br/>";
						}
					}
				}
				$message .= '<br/></body></html>';
			}
		}
	}

	//set mail headers
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= 'From: ny.kund@besiktigaste.se' . "\r\n" .
	    'Reply-To: ' . $userEmail . "\r\n" .
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