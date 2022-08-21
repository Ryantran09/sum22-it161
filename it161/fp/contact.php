<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Mia's Boutique Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <h1>Mia's Boutique Contact Form</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html">Home</a>
       <a href="contact.php" class="active">Contact Us</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
       <h2 class="subheader">Contact Form</h2>
        <?php
         include 'includes/multiple.php';
         ?>
         <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
         <p class="clear-recaptcha"></p>
         <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "mia.anhpham@gmail.com";  //place your/your client's email address here
        $toName = "Mia Pham"; //place your client's name here
        $website = "Mia's Boutique";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    
     <footer>
      <p><small>&copy; 2022 by 
          <a href="contact.php">Duy Tran</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
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