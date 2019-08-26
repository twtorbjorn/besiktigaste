<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
		$mobiltelefon = trim($_POST["mobiltelefon"]);
        // Check that data was sent to the mailer.
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "hello@example.com";
        // Set the email subject.
        $subject = "New contact from $name";
        // Build the email content.
        $email_content = "Namn: $name\n";
        $email_content .= "Epostadress: $email\n\n";
		$email_content .= "Mobiltelefon: $mobiltelefon\n\n";
        $email_content .= "Meddelande:\n$message\n";
        // Build the email headers.
        $email_headers = "Reply-To: $name <$email>";
        // Send the email.
        if ( mail($recipient, $subject, $email_content, $email_headers)) {
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