<?php include 'includes/header.php';?>
<!-- <!DOCTYPE html>
<html>
<head>
<title>Jiae's WEB120 Portal site</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/forms.css" />
</head>

<body>

<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Jiae Lee - SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" >Welcome</a></li>
      <li><a href="big.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp.php">Final Project</a></li>
      <li><a href="contactme.php" class="selected">Contact Jiae</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
<section>
  <h2 class="subheader">Contact Jiae</h2> -->
      <?php
          /*
          * Below are 2 different forms to be re-used       
          * 
          * Only use one at a time, comment out the other!       
          *
          */

          include 'includes/contact_include.php'; #site keys & code here
      
          $toAddress = "jiaelee1010@gmail.com";  //place your/your client's email address here
          $toName = "Jiuen Lee"; //place your client's name here
          $website = "Dondduk";  //place NAME of your client's website

          echo loadContact('simple.php');#demonstrates a simple contact form
          //echo loadContact('multiple.php');#demonstrates multiple form elements

      ?>
</section>
<footer>
  <p><small>&copy; <?=date('Y')?> by <a href="contactme.php" target="_blank">Jiae Lee</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>
