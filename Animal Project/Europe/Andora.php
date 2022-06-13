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
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>

<html>
<head>

     

 <a href="http://localhost/animals_world/MainPage.php">
 <img src ="animals.jpeg" width="920" height="250"><br><h2 class="btn btn-warning">[Click Here or Image For<b style="color:green"> HOME PAGE</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">Main List of Animals in Andorra:<h1></div>

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
 <p> <div style="background-color:lightgreen">

<ul>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Andorra/Barbastelle%20Bat/barbastelle_bat.php">Barbastelle</a></li>

<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Andorra/Cattle/cattle.php">Cattle</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Andorra/Field%20vole/field_vole.php">Field Vole</a></li>

<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Andorra/Long-tailed%20field%20mouse/field_mouse.php">Field mouse</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Andorra/Red%20fox/red_fox.php">Red Fox</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Andorra/Roe%20deer/roe_deer.php">Roe Deer</a></li>
<li><a href="http://localhost/animals_world/Animal%20Project/Europe/Andorra/Wild%20boar/wild_boar.php">Wild Boar</a></li>

</ul></p></body></html>

