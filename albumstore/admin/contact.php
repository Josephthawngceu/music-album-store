<?php
session_start();



include("confs/connection.php");
?>
 
 <!doctype html>
 <html>
 <head>
  <title>J*M Album Store</title>
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
  <h1>J*M Album Store</h1>
  <ul class="menu">
 <li><a href="home.php">Home</a></li>
 <li><a href="index.php">Album List</a></li>
 <li><a href="aboutus.php">Aboutus</a></li>
 <li><a href="faq.php">FAQ</a></li>
 <li><a href="contact.php">Contactus</a></li>
 </ul>
   
   <div class="contact-form">
    <h2> Please Contact Us</h2>
    <form action="submit-contact.php" method="post">
     <label for="user_name">User Name </label>
     <input type="text" name="user_name" id="user_name">
     
     <label for="user_email">Email</label>
     <input type="text" name="user_email" id="user_email">
     
     <label for="subject">Subject</label>
     <input type="text" name="subject" id="subject">
     
     <label for="content">Content</label>
     <textarea name="content" id="content"></textarea>
     
     <br><br>
     <input type="submit" value="Submit">
      
     
    </form>
   </div>
   
   <div class="footer">
   &copy;<?php echo date("Y")?>. All right reserved.
   </div>
   
   
   </body>
 </html>

