<!--
File Name: contact.php
Date: 02/13/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events
-->

<!DOCTYPE html>

<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content="Janice Bradford">
<base target="_blank"> <!-- open all links not marked "_self" in a new tab -->

<title>Ace in the Hole</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
  
<script src="js/menu.js"></script>
<script src="js/contactForm.js"></script>
  
<?php include 'php/contact_form_processor.php'; ?>
  
<style>
  /* use to outline blocks while styling and debugging
  { outline: 1px solid red !important } */
</style>
    
</head>

<body>

<header>
  <?php include 'php/header.php'; ?>
</header>

<nav class="topnav" id="myTopnav">
  <a target="_self" href="index.php">Home</a>
  <a target="_self" href="events.php">Events</a>
  <a target="_self" href="registration.php">Registration</a>
  <a target="_self" href="#contact" class="active">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction(); return false;">&#9776;</a>
</nav>

<main>

  <article id="weather">
    <p>weather feed</p>
  </article>

  <article id="photographs">
    <p>photographs</p>
  </article>

  <article id="content">
    <h2>Contact Ace in the Hole</h2>
    
    <p>(Placeholder for information about Ace in the Hole.)</p>
    
    <p class="note">Please fill in this form completely.  We will get back to you within 24 hours.</p>
    
    <!-- what page are we on? -->
    <!-- <?php echo $_SERVER['PHP_SELF']; ?> -->
    
    <form id="contactForm" name="contactForm" action="<?= $_SERVER['REQUEST_URI'] ?>" onsubmit="return validateContactForm()" method="POST" target="_self">
      
      <p class="lbl">First name:</p>
      <input type="text" name="firstName" id="firstName" tabindex="1"><br>

      <p class="lbl">Last name:</p>
      <input type="text" name="lastName" id="lastName" tabindex="2"><br>
      
      <p class="lbl">Email:</p>
      <input type="email" name="email" id="email" tabindex="3"><br>
      
      <p class="lbl">I'm an:</p>
      <input type="radio" name="contactRole" value="Athlete" tabindex="4">
      <label for="contactAthlete">Athlete</label><br>
      
      <input type="radio" name="contactRole" value="Volunteer" tabindex="4">
      <label for="contactVolunteer">Volunteer</label><br>
      
      <input type="radio" name="contactRole" value="Other" tabindex="4">
      <label for="contactOther">Other</label><br>
      
      <p class="lbl">Questions or Comments:</p>
      <textarea type="text" id="comment" name="comment" tabindex="5" maxlength="1500"></textarea><br>

      <input class="sendBtn" type="submit" name="sendEmail" value="Send" tabindex="6">
      <input class="cancelBtn" type="reset" value="Cancel" tabindex="7">
    
    </form>

  </article>

  <aside id="packet">
    <p>packet pickup info</p>
  </aside>

  <aside id="social">
    <p>social media feed</p>
  </aside>

</main>

<footer>
  <?php include 'php/footer.php'; ?>
</footer>

</body>

</html>