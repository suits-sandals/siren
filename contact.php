<?php
	//Siren Framework v3.3
	//File Name: Contact Page
	//File Purpose: The Main Contact Page
	//File Notes:

	session_start();
	ini_set('display_errors', 1); 
	//Load Libraries
	require_once('libraries/Doctrine/SplClassLoader.php');

	//Create Captcha
	$loadCaptcha = new SplClassLoader('Gregwar', 'libraries/');
	$loadCaptcha->register();
	$builder = new Gregwar\Captcha\CaptchaBuilder;
	$builder->build();
	$_SESSION['phrase'] = $builder->getPhrase();
?>

<?php 
	require_once('includes/header.php'); 
?>



<section>

	<form  action="result" method="post" enctype="multipart/form-data" name="contact" id="contact">
		<input type="hidden" name="form_name" value="contact" />
        <fieldset class="field-container">
			<label for="input_name">Name:</label>
			<input type="text" id="form_name" name="input_name" required class="required" />

		</fieldset>	
		<fieldset class="field-container" >
			<label for="input_company">Company:</label>
			<input type="text" id="form_company" name="input_company" />
		</fieldset>
		<fieldset class="field-container" >
			<label for="input_email">Email:</label>
			<input type="email" id="form_email"  name="input_email" required class="required email" />
		</fieldset>
		<fieldset class="field-container" >
			<label for="input_message">Message:</label>
			<textarea name="input_message" ></textarea>
		</fieldset> 
		<fieldset>
			<div>
				<img src="<?php echo $builder->inline(); ?>" />
			</div>
			<label for="input_captcha">Input what you see:</label>
			<input type="text" name="input_captcha" />
		</fieldset>
		<div class="submit">
			<input type="submit" value="Submit"/>
		</div>
	</form>
</section>





<?php require_once('includes/footer.php'); ?>