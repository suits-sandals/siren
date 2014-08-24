<?php
session_start();
ini_set('display_errors', 1); 
//Siren Framework v3.3
//File Name: Form Results
//File Purpose: The contact form handling
//File Notes:
?>

<?php 
	//Load Libraries
	require('libraries/vendor/autoload.php');

	require_once('includes/header.php'); 
?>

<?php

	//Get captcha information and check it
	$captcha_code = $_SESSION['phrase'];
	$captcha_input = $_POST['input_captcha'];

	if($captcha_code == $captcha_input){

		//Set upvallidation for submitted form
		$v = new Valitron\Validator($_POST);
		$v->rule('required', ["input_name", "input_email", "input_message"]);
		$v->rule('email', "input_email");

		if($v->validate()) {
			//Assign email recipient
			$sendto = "zachary@sasbranding.com";

			//Create headers
			$headers = "From: " .  $_POST['input_email'];

			$subject = "Email from" . $_POST['input_name'];

			//Create Email Message
	        $body = "Name: " . $_POST['input_name'] . "\n"
				. "Email: " . $_POST['input_email'] . "\n"
				. "Company: " . $_POST['input_company'] . "\n"
				. "Message: " . $_POST['input_message'] . "\n";

			//Deliver Message
			mail($sendto, $subject, $body, $headers);

			//Mail reciepts
			mail($_POST['input_email'], 'Reciept of Submission', "Your Message: \n" . $body, 'From: ' . $sendto);

			//Display Results
			echo '<h2>Submission Successful</h2>';
			//Print body and change newline characters to line break
			echo '<div>Reciept of message:';
				echo ' <p>' .  str_replace("\n", "</br>",$body) . '</p>';
			echo '</div>';


		} else {
		    echo '<h1>Submission Failed</h1>';
		    echo '<p> Errors are listed below. Please return to the form and try again</p>';
		    echo '<ul>';
			   	foreach($v->errors() as $error){
			   		echo '<li>' . $error[0] . '</li>';
			   	}
		   	echo '</ul>';
		}
	} else {
		 echo '<h1>Submission Failed</h1>';
		    echo '<p>Your input for the Captcha was incorrect. Please return to the form and try again.</p>';
	}
?>

<?php require_once('includes/footer.php'); ?>