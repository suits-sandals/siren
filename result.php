<?php

//Siren Framework v2.0
//File Name: Contact Page
//File Purpose: Handles and Displays Font Results
/*File Notes: 
 - Can be edited to handle additional forms
 - cleans text and uses a token key for validation

 */

//Default Email to Send To
$sendto = 'zachary@sasbranding.com';

// Make sure our token was supplied
if(isset($_POST['form_key']) || $formKey->validate())
{
    // Require the necessary class
    require_once 'scripts/format-class.php';

    // Create a new instance of the class
    $format_obj = new Format_Email();

    // Sanitize the action
    $action = htmlentities($_POST['form_name'], ENT_QUOTES);
    $form_name = str_replace("_", "",ucfirst(htmlentities($_POST['form_name'], ENT_QUOTES)));


    //Get the right body information
    $body_array = array(
        'contact' => 'standard_form_body'
    );

    // Make sure the array key exists
    if( array_key_exists($action, $body_array) )
    {
        // Call the right data
        $headers = $format_obj->form_headers();
        $subject = $format_obj->form_subject();
        $body = $format_obj->$body_array[$action]();

        if (mail($sendto, $subject, $body, $headers)) {
            //Create results
            $result_header = '<h1>Successful Submission</h1>';
            $result_message ="<p>The " . $form_name . " form has been submitted successfully. You should recieve a confirmation email shortly. Thank you. </p>" . $body;

            //Mail reciepts
            mail($format_obj->get_email(), 'Reciept of Submission to the Form: ' . $form_name, "Your Message: \n" . $body, 'From: ' . $sendto);
        } 
        else {
            //Create results
            $result_header = '<h1>Submission Failed</h1>';
            $result_message ="<p>Sorry, your submission for the " . $form_name . " failed. Please try again. </p>"
                ."<a href=".$action." class='button'>Go Back</a>";
        }

        

    }
    else
    {
        //Create results
        $result_header = '<h1>Form Submission Was Invalid</h1>';
        $result_message ="<p>Your submission for the " . $form_name . " form has been deemed invalid. </p>"
                        ."<a href=".$action." class='button'>Go Back</a>";

    }

}
else
{
    //Create results
    $result_header = '<h1>Form Submission Was Invalid</h1>';
    $result_message ="<p>Your submission for the " . $form_name . " form has been deemed invalid. </p>"
                    ."<a href=".$action." class='button'>Go Back</a>";
}

//Display Result
echo $result_header;
echo $result_message;


?>