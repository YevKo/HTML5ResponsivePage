<?php
/**
* This script handles an email sending to the website's administrator. 
* Data passed from the contact form with POST request.
*
* @param name 		- name of the sender (optional)
* @param email 		- email address of teh sender
* @param comment 	- message of the sender
* @param topic 		- theme of the message
*/

	// obtain posted variables
	$name 		= $_POST["name"];
	$email 		= $_POST["email"];
	$comment 	= $_POST["comment"];
	$topic		= $_POST["topic"];

	if (empty($email) OR empty($comment) OR empty($topic)) {
		// Set a 400 (bad request) response code and exit.
		http_response_code(400);
		die("Some of the arguments was not passed");

	} else {
		// Organize email
		$emailTo="youremail@gmail.com";
		$subject="ALittleStore: regarding " . $topic;
		$headers="From: " . $name . " ". $email;
		$body=$comment;

		if (!mail($emailTo, $subject, $body, $headers)) { 
			die("Error sending Mail");
		}
	}
?>

