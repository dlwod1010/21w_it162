<?php include 'includes/header.php';?>
    <!-- START LEFT COL -->
  <p></p>
  
  <?php
          /*
          * Below are 2 different forms to be re-used       
          * 
          * Only use one at a time, comment out the other!       
          *
          */

          include 'includes/contact_include.php'; #site keys & code here
      
          $toAddress = "jiaelee1010@gmail.com";  //place your/your client's email address here
          $toName = "Jiae Lee"; //place your client's name here
          $website = "coderjlee";  //place NAME of your client's website

          // echo loadContact('simple.php');#demonstrates a simple contact form
          echo loadContact('multiple.php');#demonstrates multiple form elements

  ?>
  
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>
    <p>TBC..</p>
    
</aside>
<!-- END RIGHT COL -->
<?php include 'includes/footer.php';?>
