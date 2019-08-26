<?php
	mb_internal_encoding('ISO-8859-1'); 
	if (empty($_POST)) {
	    return;
	}

	//parse xml string to array
	$xml = simplexml_load_string($_POST['xml']);
	$json = json_encode($xml);
	$xml_array = json_decode($json,TRUE);

	//set mail config
	$to      = 'torbjorn.wallin@gmail.com';
	$subject = 'Jag vill be om offert';
	//$subject = utf8_decode('Offertförfrågan');
	

	$to_poster      = 'torbjorn.wallin@gmail.com';
	//funkar på desktop men inte i telefon
	//$subject_poster = 'Bekräftelse på din offertförfrågan (OVK) via Besiktigaste.se';

	//funkar i  mobil men inte i desktop:
	//$subject_poster = utf8_decode($subject_poster);
	//$subject_poster = utf8_decode('Bekräftelse på din offertförfrågan (OVK) via Besiktigaste.se');

	//funkar varken i desktop el mobil:
	//$subject_poster = iconv('ISO-8859-1', 'UTF-8', $subject_poster);
		
	
	if(isset($xml_array['E-post']) && !empty($xml_array['E-post'])) {
		$userEmail = $xml_array['E-post'];
		$to_poster = $userEmail;
	}
	
	$userName = '';
	if(isset($xml_array['Namn']) && !empty($xml_array['Namn'])) {
		$userName = $xml_array['Namn'];
	}
	
	$timePosted = '';
	if(isset($xml_array['timeStamp']) && !empty($xml_array['timeStamp'])) {
		$timePosted = $xml_array['timeStamp'];
	}

	$serviceid = '';
	$konsult = ''; 
	$msgheader = ''; 
	
	if(isset($xml_array['serviceId']) && !empty($xml_array['serviceId'])) {
		$serviceid = $xml_array['serviceId'];
		switch ($serviceid) {
			case 'ovk':
			   $konsult = 'certifierade OVK-besiktningsmän ';
			   $msgheader = 'offertförfrågan (ovk) ';
			   break;
			case 'energideklaration':
			   $konsult = 'certifierade energiexperter ';
			   $msgheader = 'offertförfrågan (energideklaration) ';
			   break;
			case 'kontakt':
			   $konsult = 'kontakt ';
			   $msgheader = 'kontaktförfrågan ';
			   break;
			default :
			   $konsult = 'certifierade konsulter ';
			   $msgheader = 'certifierade OVK-besiktningsmän ';
		}
	}
	
	$subject_poster = 'Bekräftelse på din ' . $msgheader . '  via Besiktigaste.se';
	//set mail message body
	//$message = "<html><head><meta charset='utf-8'><title>toggleClass demo</title><style>p { margin: 4px; font-size: 16px; font-weight: bolder; }<head/>" /n;
	//$message .= " <body>Offertförfrågan från <b>" . $userName . "</b><br/><br/>";
	
	$message = '<html><head><style>p {color: red; text-align: center;}</style></head>';
	$message .= '<body>' . 'Kontaktförfrågan från <b>' . $userName . '</b><br/><br/>';
	$message .= '<table border="1" bordercolor="grey">';

	$message_poster = '<html><head><style>p {color: red; text-align: center;}</style></head>';
	$message_poster .= '<body>' . 'Hej ' . $userName .  ',<br><br>';
	
	//for all kontakt requests
	if ($konsult == 'kontakt '){ 
     	$message_poster .= 'Tack för ditt meddelande. <br/><br/>';
     	$message_poster .= 'Vi återkommer till dig, i normala fall inom 24 timmar. Hoppas att det är ok.<br/><br/>';
    	$message_poster .= 'Vänliga hälsningar,<br/>';
    	$message_poster .= '.....................................................<br/>';
    	$message_poster .= '<b>Kundtjänst Besiktigaste.se</b><br/>';
    	$message_poster .= 'Telefon:   0730-30 30 30<br/>';
    	$message_poster .= 'Webb: www.besiktigaste.se<br/>';
    	$message_poster .= 'E-post: info@besiktigaste.se<br/>';
    	$message_poster .= '.....................................................<br/><br/>';
	//extract xml to message body
	foreach ($xml_array as $key => $value) {
		if(!is_array($value)) {
			$message .= '<tr><td width=&quot;100px&quot;>' . $key . '</td><td>' . $value . '</td></tr>';
			
			switch ($key) {
				case "timeStamp":
				   break;
				case 'md5Hash':
				   break;
				case 'serviceId':
				   break;
				case 'webformular':
				   break;
				case 'referer':
				   break;
				default :
				   $message_poster .= '';
			}
		}
		else {
		
		//det här borde bara hända för alla som ar arrayer. enposter tas om hand i if-satsen ovan 
			if($key == 'nodes') {
				//$message .= '<td><tr>';
				if(is_array($value['node'])) {
					if(isset($value['node']['code'])) {
						$message .= '<td width="100px" valign="top">' . $value['node']['code'] .'</td><td width="200px" valign="top">' . $value['node']['description'] . '</td></tr>';
					}
					else {
						foreach ($value['node'] as $nkey => $nvalue) {
							$message .= '<td width="100px" valign="top">' . $nvalue['code'] . '</td><td width="200px" valign="top">' . $nvalue['description'] . '</td></tr>';
						}
					}
				}
				//$message .= '</table></body></html>';
			}
		}
	}
	$message .= '</table></body></html>';

	}
	
	// for all service requests 
	else {
  	  $message_poster .= 'Tack för ditt meddelande och förfrågan. Nedan ser du meddelandet du skickade, dubbelkolla gärna att allt stämmer.<br/><br/>';
  	  $message_poster .= 'Vi kommer att vidarebefordra din förfrågan till lokala ' . $konsult . 'som kontaktar dig direkt. ';	

	$message_poster .= 'Det kan ta någon dag, hoppas att det är ok.<br/><br/>';
	$message_poster .= 'Vänliga hälsningar,<br/>';
	$message_poster .= '.....................................................<br/>';
	$message_poster .= '<b>Kundtjänst Besiktigaste.se</b><br/>';
	$message_poster .= 'Telefon:   0730-30 30 30<br/>';
	$message_poster .= 'Webb: www.besiktigaste.se<br/>';
	$message_poster .= 'E-post: info@besiktigaste.se<br/>';
	$message_poster .= '.....................................................<br/><br/>';


	
		
	$message_poster .= '<b>Från:</b> Besiktigaste.se [webformulär] <br/>';
	$message_poster .= '<b>Skickat:</b> ' . $timePosted . ' <br/>';
	//$message_poster .= '<b>Till:</b> <a href=mailto:info@besiktigaste.se>info@besiktigaste.se</a><br/>';
	$message_poster .= '<b>Ämne:</b> Offertfrågan (' . $serviceid . ') via Besiktigaste.se<br/>';
	$message_poster .= '<b>Ditt meddelande:</b><br/><br/>';

	$message_poster .= '<table border="1" width="310px">';

	//extract xml to message body
	foreach ($xml_array as $key => $value) {
		if(!is_array($value)) {
			$message .= '<tr><td width=&quot;100px&quot;>' . $key . '</td><td>' . $value . '</td></tr>';
			
			switch ($key) {
				case "timeStamp":
				   break;
				case 'md5Hash':
				   break;
				case 'serviceId':
				   break;
				case 'webformular':
				   break;
				case 'referer':
				   break;
				default :
				   $message_poster .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
			}
		}
		else {
		
		//det här borde bara hända för alla som ar arrayer. enposter tas om hand i if-satsen ovan 
			if($key == 'nodes') {
				//$message .= '<td><tr>';
				if(is_array($value['node'])) {
					if(isset($value['node']['code'])) {
						$message .= '<tr><td width="100px" valign="top">' . $value['node']['code'] .'</td><td width="200px" valign="top">' . $value['node']['description'] . '</td></tr>';
					}
					else {
						foreach ($value['node'] as $nkey => $nvalue) {
							$message .= '<td width="100px" valign="top">' . $nvalue['code'] . '</td><td width="200px" valign="top">' . $nvalue['description'] . '</td></tr>';
						}
					}
				}
				//$message .= '</table></body></html>';
			}
		}
	}
	$message .= '</table></body></html>';
	$message_poster .= '</table><br><br></body></html>';
	}
	//slut of else clause when not using kontaktform e.g. service form ovk or cex 
	
		
	//set mail headers
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= 'From: Besiktigaste <info@besiktigaste.se>' . "\r\n" .
		'Reply-To: ' . 'info@besiktigaste.se' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
		//    'Reply-To: ' . $userEmail . "\r\n" .
	
	$headers_poster  = "MIME-Version: 1.0\r\n";
	$headers_poster .= "Content-type: text/html; charset=utf-8\r\n";
	$headers_poster .= 'From: Besiktigaste <info@besiktigaste.se>' . "\r\n" .
	    'Reply-To: ' . 'info@besiktigaste.se' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

		
	//send email and check status
	//require("class.phpmailer.php");  
	//$mail = new PHPMailer();  
	//$mail->CharSet = "UTF-8";
	$mailer_status = mail($to_poster, $subject_poster, $message_poster, $headers_poster);
	$mailer_status = mail($to, $subject, $message, $headers);
	//funkar $mailer_status = mail('torbjorn.wallin@gmail.com', 'Hej innehåll', $message, $headers);
	//funkar $mailer_status = mail($to, 'Hej innehåll', $message, $headers);
	//funkar $mailer_status = mail('torbjorn.wallin@gmail.com', 'Hej innehåll', 'meddelande', $headers); 
	//$mailer_status = mail($to, $subject, $message, $headers);
	//$mailer_status = mail('torbjorn.wallin@gmail.com', 'Hej', 'på dig', 'huvud');
	if($mailer_status) {
		header("HTTP/1.0 200 OK");
		echo 'OK';
	}
	else {
		header("HTTP/1.0 500 Unable to send email to the following address.");
		echo 'ERROR';
	}
	//send email2 and check status	
	

?>