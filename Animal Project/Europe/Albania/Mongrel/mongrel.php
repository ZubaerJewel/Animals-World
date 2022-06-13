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
 <img src ="Dog_FO3.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Mongrel:<h1></div>

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
<h1 style="text-align:center;color:red">Information about the Mongrel :</h1>


A mixed-breed dog, also called a mutt, mongrel, tyke, cur, bitzer, feist or random-bred dog, is a dog that has characteristics of two or more types of breeds, or is a descendant of feral or pariah dog populations.

This term, along with the term purebred dog stems from a fundamental misunderstanding of the genetics and misinterpretation of Darwinian theory, and should be viewed with the same scepticism as we view the concept of pure races in human populations. The term crossbreed refers to puppies produced by the breeding technique of breeding known dogs of two different purebred dog breeds for some specific reason.

The term mutt generally refers to a dog of unknown descent. Dogs interbreed freely, except where extreme variations in size exist, so mixed-breed dogs vary in size, shape, and colour, making them hard to classify physically.

<h2>Mongrel Facts:</h2>
Kingdom:
Animalia<br>
Phylum:
Chordata<br>
Class:
Mammalia<br>
Order:
Carnivora<br>
Family:
Canidae<br>
Genus:
Canis<br>

Scientific Name:
Canis lupus familiaris<br>
Type:
Mammal<br>
Diet:
Carnivore<br>
Size:
50cm (20in)<br>
Weight:
30kg (65lbs)<br>
Top Speed:
50km/h (31mph)<br>
Lifespan:
15 years<Br>
Lifestyle:
Solitary








</h3></p></body></html>