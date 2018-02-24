/*
File Name: contactForm.js
Date: 02/19/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events

TO DO:
Put funcions for processing both forms in this file?
Can I strip out dangerous characters here?
Can I call the PHP from here?
*/

/* CONTACT FORM */

function validateContactForm() {
  var missingInfo = false;
  var msg = "";
  
  if (document.forms["contactForm"]["firstName"].value == "") {
    msg = msg + "First name\n";
    missingInfo = true;
  }
  if(document.forms["contactForm"]["lastName"].value == "") {
    msg = msg + "Last name\n";
    missingInfo = true;
  }
  if (document.forms["contactForm"]["email"].value == "") {
    msg = msg + "Email address\n";
    missingInfo = true;
  }
  if (document.forms["contactForm"]["contactRole"].value == "") {
    msg = msg + "Are you an athlete, volunteer, or other?\n";
    missingInfo = true;
  }
    if (document.forms["contactForm"]["comment"].value == "") {
    msg = msg + "Your comment or question\n";
    missingInfo = true;
  }
  if(msg !== "") {
    alert("Please enter the following information:\n" + msg);
    return false;
  }
}