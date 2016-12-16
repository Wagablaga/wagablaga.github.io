<!doctype html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="HTT CSS.css" />
<meta charset="utf-8">
<title>Thank you!</title>
<link rel="icon" type="image/x-icon" href="Images/How-To-Tech Logo - Final.png" />

<?php
$to="vanse.harris@mtchs.org";
$subject="HTT Contact Message"; 
$from=$_'emalee.merrel@mtchs.org';
$message="Name: ".$_REQUEST['fullName']."\nPhone: ".$_REQUEST['phoneNumber']."\nComments: ".$_REQUEST['comments']; $spamCheck=$_REQUEST['address'];

if($spamCheck) 
	die("Don't send this email");
else {
	mail($to,$subject,$message,$from); 
}

?>

</head>
<header>
 

 
 

 
</header>
 
 
 
<nav class="main-nav">
 


</nav>
 
 
 
	<div class="content">
 
         
         
         <h1>Thank you for contacting us! </h1>
         <p>
            We appreciate your feedback and will respond to any questions as soon as possible.
         </p>
     
	</div>
<body><h2 ><a href="Home.html" class="dank" > How To Tech</a>
          <img src="Images/How-To-Tech Logo - Final.png" width="50px" height="50px" alt="How to Tech">
          <a href="Home.html" 	 class="meme" > Home 		 </a>
          <a href="Contact.html" class="memes" > Contact </a>
         </h2>
	
            <div class="Thanks"> <h3 class="ThankYou"><a href="Home.html"> Go back to Home page </a>		</h3> 
         
                    
                
            </div>
            
           
            
           
</body>
</html>
