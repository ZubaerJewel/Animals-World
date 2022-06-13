<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="http://localhost/animals_world/style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! Welcome to <b style= "font-size:260%">ANIMALS WORLD</b>.</h1>
    </div>


    <p>
	   	   <b onclick="history.go(-1);"><h1 class="btn btn-danger">Go Back<br><<--------<<</h1></b>
        <a href="http://localhost/animals_world/reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="http://localhost/animals_world/login.php" class="btn btn-danger">Sign Out of Your Account</a>
		<a href="http://localhost/animals_world/login.php" class="btn btn-warning">Sign In of Your Account</a>
    </p>
</body>
</html>

<html>
<head>

     

 <a href="http://localhost/animals_world/MainPage.php">
 <img src ="animals.jpeg" width="920" height="250"><br><h2 class="btn btn-warning">[Click HERE or Image For<b style="color:green"> HOME PAGE</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">THE NATURAL BEAUTIES OF THE WORLDS FOR ANIMALS</h1></div>

<style>
     #head1{background-color: green;}
	 .head2{
	            color:green;
				text-align: center;
				}
				.head3{
	            
				text-align: center;
				}
			
				.head4{
	            color:black;
				text-align:justify;
				padding-right:20px;
				padding-left:20px;
				
				}
			
	 </style>
</head>

<body id="head1">
 <p><h4 class="head4"> <div style="background-color:lightgreen">
<h1> World Animal Day 2018 - Tiny's Story</h1>
World Animal Day is celebrated every year around the world on October the 4th on the day of the feast of Francis of Assisi,
 the patron saint of animals. The aim of the day is to bring awareness to animal species across the globe to not only highlight
 the plight of species in the wild, but to also improve animal welfare standards for every animal no matter how big or small.
 In order to celebrate World Animal Day 2018, I would like to share with you one particular animal that is very special to me personally.
<ul>
  <li><a href="./Animal%20Project/Asia.php">Asia</a></li>
  <li><a href="http://localhost/animals_world/Animal%20Project/Europe/Europe.php">Euroupe</a></li>
  <li>North America</li>
  <li>South America</li>
  <li><a href="http://localhost/animals_world/Animal%20Project/Australia/australia.php">Australia</a></li>
  <li>Africa</li>
  <li>Antartica</li>
</ul>
</body>
</html>