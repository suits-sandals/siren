<?php

	//Siren 2.0//
	//Creation and Security scripts for e-mail forms//


	//Vallidation Values
	$collected = false;
	$verifiedToken = false;

	//insert e-mail here
	$sendto = "zacharybradyart@gmail.com";
	
	//Collect and sanitize form data
	//FIRST CHECK IF REQUIRED VALUES ARE SET
	if(isset($_POST['inputname']) && isset($_POST['inputemail'])){
		//Name
		$cname = "Name: " . stripcleantohtml($_POST["inputname"]);
						
		//EMAIL
		$cemail = "\n Email: " . filter_var($_POST["inputemail"], FILTER_SANITIZE_EMAIL);

		//CHECK COMPANY
		if(isset($_POST['inputcompany'])){

			$ccompany = "\n Company: " . stripcleantohtml($_POST["inputcompany"]);

		}
		else{
			$ccompany = "";
		}

		//CHECK MESSAGE
		if(isset($_POST['inputmessage'])){
			$cmessage =  cleantohtml($_POST["inputmessage"]);
		}
		else{
			$cmessage = "No message at this time";
		}

		//Put Together E-mail
		$headers = 'From: '.$cemail;
		$subject ="Contact from:" . $cname . " at " . $ccompany;

		$cbody =  $cname . $ccompany .  $cemail  . "\n \n" . $cmessage;

		//Values are collected
		$collected = true;
	}
	else{
		//Values are not collected
		$collected = false;
	}

	//GENERATE OR CHECK TOKENS
	if($collect == true){
		
		if (verifyFormToken('form1')) {
			$verifiedToken = true;
		} 
		else {
			$verifiedToken = false;
			writeLog('Formtoken');
		}
	}
	else{
		session_start();

   		$newToken = generateFormToken('form1');   
	}

	//The Form
	$displayForm = '<form  action="contact" method="post" enctype="multipart/form-data" name="contact" id="contact">';
	if(isset($newToken)){
		$displayForm .= '<input type="hidden" name="token" value="'.$newToken.'">';
	}
	$displayForm .='<div>'
			.'<label for="inputname">Name:</label>'
			.'<input type="text" id="form_name" name="inputname" required class="required"  onblur="if (this.value == \'\') {this.value = \'Primary Contact\';}"
		 onfocus="if (this.value == \'Primary Contact\') {this.value = \'\';}" />'
		.'</div>'	
		.'<div>'
			.'<label for="inputcompany">Company:</label>'
			.'<input type="text" id="form_company" name="inputcompany" />'
		.'</div>'
		.'<div>'
			.'<label for="inputemail">E-mail:</label>'
			.'<input type="email" id="form_email"  name="inputemail" required class="required email" />'
		.'</div>'
		.'<div>'
			.'<label for="inputmessage">Message:</label>'
			.'<textarea name="inputmessage" ></textarea>'
		.'</div>' 
		.'<div class="submit">'
			.'<input type="submit" value="Submit" class="right"/>'
		.'</div>'
	.'</form>';
	
	
	
	//putting things together
	if($collected == true){
		if($verifiedToken == true){
			if (mail($sendto, $subject, $cbody, $headers)) {
				echo("<p class='text-center'>Request successfully sent!</p>");
			} 
			else {
				echo '<p class="text-center">Request delivery failed...</p>' . $displayForm;
			}
		}
		else{
			echo 'Nice Hack Buddy.';
		}
	}
	else{
		echo $displayForm;
	}
	//Functions

	//Clean strings

	function stripcleantohtml($s){
		return htmlentities(trim(strip_tags(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
	}

	function cleantohtml($s){
		return strip_tags(htmlentities(trim(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
	}

	//End Clean Strings

	//Form Varification
	function verifyFormToken($form) {
		// check if a session is started and a token is transmitted, if not return an error
		if(!isset($_SESSION[$form.'_token'])) { 
			return false;
		}
							
		// check if the form is sent with token in it
		if(!isset($_POST['token'])) {
			return false;
		}
						
		// compare the tokens against each other if they are still the same
		if ($_SESSION[$form.'_token'] !== $_POST['token']) {
			return false;
		}
							
		return true;
	}

	function generateFormToken($form) {
						    
		// generate a token from an unique value
		$token = md5(uniqid(microtime(), true));  
						    	
		// Write the generated token to the session variable to check it against the hidden field when the form is sent
		$_SESSION[$form.'_token'] = $token; 
						    	
		return $token;
	}

	//End Form Varification
?>