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
    <h1><b style= "font-size:260%">ANIMALS WORLD</b>.</h1>
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
 <img src ="animals.jpeg" width="920" height="250"><br><h2 class="btn btn-warning">[Click Here or Image For<b style="color:green"> HOME PAGE</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">Main List of Animals in Albania:<h1></div>

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
				
				}
	 </style>
</head>

<body id="head1">
 <p><h2 class="head4"> <div style="background-color:lightgreen">

<ul>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Barn%20Owl/barn_owl.php">Barn Owl</a></li>

<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Brown%20Bear/brown_bear.php">Brown Bear</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Crab/crab.php">Crab</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Deer/deer.php">Deer</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Fox/fox.php">Fox</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Mongrel/mongrel.php">Mongrel</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Vulture/vulture.php">Vulture</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Wild%20Boar/wild_boar.php">Wild Boar</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Wolf/wolf.php">Wolf</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Albania/Wolverine/wolverine.php">Wolverine</a></li>
</ul></h2></p></body></html>

