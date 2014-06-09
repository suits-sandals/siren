<?php
//Siren Framework v2.0
//File Name: Contact Page
//File Purpose: The Main Contact Page
//File Notes: Loads the email-script to display form and handled validation
?>

<?php require_once('includes/header.php'); ?>



<section>

	<form  action="result" method="post" enctype="multipart/form-data" name="contact" id="contact">
		<input type="hidden" name="form_name" value="contact" />
        <?php $formKey->outputKey(); ?>  
		<div class="field-container">
			<label for="input_name">Name:</label>
			<input type="text" id="form_name" name="input_name" required class="required" />

		</div>	
		<div class="field-container" >
			<label for="input_company">Company:</label>
			<input type="text" id="form_company" name="input_company" />
		</div>
		<div class="field-container" >
			<label for="input_email">Email:</label>
			<input type="email" id="form_email"  name="input_email" required class="required email" />
		</div>
		<div class="field-container" >
			<label for="input_message">Message:</label>
			<textarea name="input_message" ></textarea>
		</div> 
		<div class="submit">
			<input type="submit" value="Submit"/>
		</div>
	</form>
</section>





<?php require_once('includes/footer.php'); ?>