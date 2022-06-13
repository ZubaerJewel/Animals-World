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
 <img src ="Cattle.png" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About the Albanian Cattle :<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Cattle:</h1>



The cattle, a member of bos genus family, are the national animal of Andorra. The cattle have a rectangular shape, with female being different from their male counterparts. They are the most widespread domesticated animals in the world. There are various breeds of Andorraes national animal such as the Jersey, Hereford, shorthorn Holstein Friesian among many others. The color of cows also vary, with each breed having a distinctive color unique from others.

Different breeds of cows do well in the various regions depending on the climate. There are those that do well in highlands where the climate is cool and wet, while others can do in lowlands where the climate is warm and wet. Still, there are those that can survive in hot and dry environments. Climatic conditions, therefore, determine the distribution of the national animal of Andorra.
<h2>Facts About Cattle Of Andorra :</h2>
Common name: Cattle<br>
Scientific name: Bos taurus<br>
Average weight: 1000-3000 pounds depending on the breed<br>
Diet: Herbivores<br>
Average lifespan: 18-22 years<br>
Gestation period: 9 months<br><br><br>
Milk cattle have a more rectangular body than beef cattle. The beef cattle also might have a hump, which is unlikely in the case of the dairy cattle. On the other hand, female dairy cattle have a large udder while the female beef cattle have a small one. Different varieties of cattle have been used in various social events like initiation and also in agricultural shows. Perhaps this is why the cattle was declared the national animal symbol of Andorra. Citizens of Andorra also enjoy a lot of benefits from the cattle. Such benefits like milk, beef, skins and hides are enjoyed by many people.
Many people find it best to spend most of their time in the company of cattle. This is because cattle are social animals that are calm and friendly. This, with other uses of cattle products has made the cattle to qualify as the national symbol of Andorra.



</h3></p></body></html>