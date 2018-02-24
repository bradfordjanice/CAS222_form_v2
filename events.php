<!--
File Name: events.php
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
  
<script src="js/menu.js"></script>

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
  <a target="_self" href="#events" class="active">Events</a>
  <a target="_self" href="registration.php">Registration</a>
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
    <h2>Heading 2 (h2)</h2>

    <p>Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in sem a ante bibendum dignissim sed nec leo. Donec id dui sapien. Nullam dapibus tincidunt tellus auctor ornare. Vestibulum vehicula ac tortor quis dignissim. Nulla at libero dignissim ante cursus auctor vel eget est. Mauris vel justo ut urna accumsan venenatis. Donec eu rhoncus odio.</p>
    
    <h3>Heading 3 (h3)</h3>

    <p>Proin dictum, augue vitae faucibus auctor, ante sem venenatis nulla, bibendum accumsan felis felis ac erat. Etiam dignissim dolor sed vestibulum vehicula. Fusce ac quam non neque dictum fringilla in sed elit. In rutrum in velit blandit suscipit. Aenean semper ut justo id ultrices. Ut ut lorem nec nisi semper sollicitudin sed a elit. Vivamus mollis ligula eget egestas suscipit. Mauris consequat eget metus vitae venenatis. Duis eu ultrices odio.</p>
    
    <ul>
      <li>List item</li>
      <li>List item</li>
      <li>List item</li>
    </ul>
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