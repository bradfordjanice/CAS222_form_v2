<!--
File Name: registration.php
Date: 02/13/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events template
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

<style>
  /* use to outline blocks while styling and debugging */
  { outline: 1px solid red !important } 
</style>
    
</head>

<body>

<header>
  <?php include 'php/header.php'; ?>
</header>

<nav class="topnav" id="myTopnav">
  <a target="_self" href="index.php">Home</a>
  <a target="_self" href="events.php">Events</a>
  <a target="_self" href="#registration" class="active">Registration</a>
  <a target="_self" href="contact.php">Contact</a>
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
    <h2>Registration</h2>
    
    <p class="note">If you are 18 years or younger, your parent or guardian must register for you.</p>
    
    <form id="regForm" name="input" method="POST" action="php/reg_form_processor.php" target="_self">
    
      First name:<br>
      <input type="text" name="firstName" id="firstName"><br>

      Last name:<br>
      <input type="text" name="lastName" id="lastName"><br>

      Age:<br>

      <input type="text" name="age" id="age"><br>

      <h3>Saturday Events</h3>
      
      Athlete or Volunteer?<br>
      
      <input type="radio" name="satRole" id="satAthlete">
      <label for="satAthlete">Athlete</label><br>
      
      <input type="radio" name="satRole" id="satVolunteer">
      <label for="satVolunteer">Volunteer</label><br>
      
      Event:<br>
      
      <input type="radio" name="satEvent" id="lcTri">
      <label for="lcTri">Long Course Triathlon</label><br>
      
      <input type="radio" name="satEvent" id="olympicTri">
      <label for="olympicTri">Olympic Triathlon</label><br>
      
      <input type="radio" name="satEvent" id="10K">
      <label for="10K">10K</label><br>
      
      <input type="radio" name="satEvent" id="halfMar">
      <label for="halfMar">Half Marathon</label><br>
            
      <h3>Sunday Events</h3>
      
      Athlete or Volunteer?<br>
      
      <input type="radio" name="sunRole" id="sunAthlete">
      <label for="sunAthlete">Athlete</label><br>
      
      <input type="radio" name="sunRole" id="sunVolunteer">
      <label for="sunVolunteer">Volunteer</label><br>
      
      Event:<br>
      <input type="radio" name="sunEvent" id="sprintTri">
      <label for="sprintTri">Sprint Triathlon</label><br>
      
      <input type="radio" name="sunEvent" id="tryTri">
      <label for="tryTri">Try-a-Tri</label><br>
      
      <input type="radio" name="sunEvent" id="splashDash">
      <label for="splashDash">Splash-n-Dash</label><br>

      <h3>Contact Information</h3>
      
      Street:<br>
      
      <input type="text" name="street" id="street"><br>
      
      City:<br>
      
      <input type="text" name="city" id="city"><br>
      
      State:<br>
      
      <select name="state" id="state">
        <option value="" selected="selected"></option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </select>
      <br>
      
      Phone:<br>
      
      <input type="text" name="phone" id="phone"><br>
      
      Email:<br>
      
      <input type="email" name="email" id="email"><br>
      
      <input type="submit" value="Send">
      <input type="reset" value="Cancel">
      
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