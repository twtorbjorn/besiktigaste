<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection
    // Only process POST reqeusts.
	mb_internal_encoding('ISO-8859-1'); 
	if (empty($_POST)) {
	    return;
	}
	
	
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
		$mobiltelefon = trim($_POST["mobiltelefon"]);
        $formpage = strip_tags(trim($_POST["formURL"]));
		$konsult = strip_tags(trim($_POST["serviceId"]));


        // Check that data was sent to the mailer.
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "torbjorn.wallin@gmail.com";
        // Set the email subject.
        $subject = "New contact from $name";
        
		// Build the email sender.		
		$subject_poster = 'Bekräftelse på ditt meddelande (' . $serviceid . ') via Besiktigaste.se';
		
		// Build the email content.		
        $email_content = "Här kommer ett meddelande som skickats via ett formulär på besiktigaste.se. Nedan följer de kontaktuppgifter som personen skickade.\n\n\n";
        $email_content .= "Namn: $name\n";
        $email_content .= "Epostadress: $email\r\n";
		$email_content .= "Mobiltelefon: $mobiltelefon\r\n";
        $email_content .= "Meddelande:\n$message\n\n\n";
		// $email_content .= "Tjänst:$konsult\n";
		// $email_content .= "Referer:$referer\n";
		// $email_content .= "Webpage:$formpage\n";
		
        // Build the email headers alt 1
        $email_headers = "Reply-To: $name <$email>";
		
		// Build the email headers alt 2
		$headers_poster  = "MIME-Version: 1.0\r\n";
		$headers_poster .= "Content-type: text/html; charset=utf-8\r\n";
		$headers_poster .= 'From: Besiktigaste <info@besiktigaste.se>' . "\r\n" .
	    'Reply-To: ' . 'info@besiktigaste.se' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

		
		// Email confirmation
		$receiver_subject = 'Tack för ditt meddelande';
		$receiver_content = 'Vi återkommer inom kort till dig.';
		
        // Send the email.
        if ( mail($recipient, $subject, $email_content, $headers_poster) && mail($email, $receiver_subject, $receiver_content, $headers_poster) ) { //mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Tack för ditt meddelande! Vi kontaktar dig inom kort";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Någonting gick fel. Meddelandet skickades inte, prova gärna igen.";
        }
		
		
		
		
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
?>