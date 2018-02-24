<?php

/*
File Name: contact_form_processor.php
Date: 02/13/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events

TO DO:
Look into making this a function
Use isset() to see if $_POST has data in it:  if (isset($_POST['Send'])) {}
Strip bad characters and see if it is empty
*/

// sanitize form data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// see what information is in $_POST
//print_r($_POST);

// error reporting
//error_reporting(E_ALL);

// check that the user has fille in the form and clicked submit
if (isset($_POST)) {

  // define variables and set to empty values
  $firstName = $lastName = $email = $contactRole = $comment = "";

  // sanitize data and assign to variables
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']);
    $email = test_input($_POST['email']);
    $contactRole = test_input($_POST['contactRole']);
    $comment = test_input($_POST['comment']);
    $comment = wordwrap($comment, 70);
  }
  
  // variables for email
  $from = 'From: Ace in the Hole';
  $to = 'janice.bradford@pcc.edu';
  $subject = 'Multisport Event Contact Form Information';

  // compose email body
  $body = "From: " . $firstName . " " . $lastName . "\n\n";
  $body .= "E-mail: " . $email . "\n\n";
  $body .= "Role: " . $contactRole . "\n\n";
  $body .= "Comment: " . $comment . "\n";

  // send email
  if ($_POST['sendEmail']) {
    if (mail($to, $subject, $body, $from)) {
        $message = 'Your message has been sent.  Thank you!';
        echo"<script type='text/javascript'>alert('$message');</script>";
    } else {
        $message = 'Something went wrong, please try again!';
        echo"<script type='text/javascript'>alert('$message');</script>";
    }
  }

//exit();
}

?>
