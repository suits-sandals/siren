<?php
//Siren Framework v2.0
//File Name: Standard Email Creation
//File Purpose: To construct the standard email
//File Notes: This may or may not be form specific
?>

<?php

class Format_Email {

    public $name = NULL,
           $email = NULL,
           $company = NULL,
           $message = NULL,
           $email_headers = NULL,
           $email_subject = NULL,
           $email_body = NULL;

    public function form_headers()
    {
        $this->email = htmlentities($_POST['input_email'], ENT_QUOTES);

        $this->email_headers = "From: " .  $this->email;

        return $this->email_headers;
    }

    public function form_subject()
    {
        $this->name = htmlentities($_POST['input_name'], ENT_QUOTES);

        $this->email_headers = "Contact From: " .  $this->name;

        return $this->email_headers;
    }

    public function standard_form_body()
    {
        $this->name = htmlentities($_POST['input_name'], ENT_QUOTES);
        $this->email = htmlentities($_POST['input_email'], ENT_QUOTES);
        $this->company = htmlentities($_POST['input_company'], ENT_QUOTES);
        $this->message = htmlentities($_POST['input_message'], ENT_QUOTES);

        $this->email_body = "Name: " . $this->name . "\n"
                    . "Email: " . $this->email . "\n"
                    . "Company: " . $this->company . "\n"
                    . "Message: " . $this->message . "\n";

        return $this->email_body;
    }

    public function get_email(){
        $this->email = htmlentities($_POST['input_email'], ENT_QUOTES);
        return $this->email;
    }


}


?>