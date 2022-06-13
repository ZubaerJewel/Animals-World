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
 <img src ="Field-vole.jpg" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Field Vole :<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Field vole :</h1>





The field vole (Microtus agrestis), like all voles, is a type of rodent, belonging to the family Rodentia. Field voles have a coat of gray-brown fur covering the top of their 13 cm (just over 5.1 inch) long bodies, which provides them with camouflage in the grassland that they inhabit. This adaptation helps them to avoid predators, such as owls. Interestingly, their underbellies are, however, gray in color. Field voles can weigh anything from 14 to 50 grams (about 0.5 to just under 1.8 ounces). 

Field voles are also known as short-tailed voles because, as this alternative name implies, their tails only extend a very short distance from their bodies. Indeed, everything about this species seems to be diminutive, with small eyes and little ears.

The field vole is one of the most common animal species in the whole of Europe. Thus conservationists do not consider the species to be under any threat of extinction. The range of the field vole is vast, running from the Atlantic coast to the banks of Lake Baikal. That is to say, they are found in Asia and across Europe, including mainland Britain but notably excluding Ireland.


<h2>Some facts about the
Field vole:</h2>
Adult weight : 0.046 kg (0.1012 lbs)<br>
Maximum longevity : 5 years<br>
Female maturity :36 days<br>
Male maturity : 42 days<br>
Gestation : 21 days<br>
Weaning : 13 days<br>
Litter size : 4<br>
Litters per year : 4<br>
Interval between litters : 20 days<br>
Weight at birth : 0.002 kg (0.0044 lbs)<br>
Weight at weaning : 0.009 kg (0.0198 lbs)<br>
Body mass : 0.025 kg (0.055 lbs)<br>
Temperature : 37.85 C (100.13 F)<br>
Source: AnAge, licensed under .


</h3></p></body></html>