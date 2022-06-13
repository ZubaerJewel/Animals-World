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
 <img src ="Australian_mist.png" width="700" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About Australian Mist:<h1></div>

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

<h1 style="text-align:center;color:red">Information about the Australian Mist:</h1>
<h3>Australian Mist:</h3>

The Australian Mist (or spotted Australian mist) was bred in Australia in the 1700s to produce a short-haired catwith a spotted coat.

The Australian Mist is thought to be a mix-bred cat with mainly Burmese and Abyssinian cat blood-lines. Today the spotted part of the Australian mists name has been dropped, as the cats today often have more of a mottled than spotted coat.

The Australian Mist is mainly bred in Australia, however, more breeders of the Australian Mist are starting to appear in the United Kingdom and North America.

The Australian mist is known to have an excellent temperament and adores humancompanionship. The Australian mist is known to be trustworthy, gentle and extremely affectionate to both humans and other household animals and the Australian mist is even known to be friendly towards strangers.

The Australian mist is known to be around the same size and shape of the Burmese cat and has even evolved with some of the Burmese cat's playful and curious traits.




<h3>Australian Mist Facts:</h3>

Common Name:
Australian Mist<br>
Origin:
Australia<br>
Average Size:
60cm (2ft)<br>
Average Weight:
4.5kg (10lbs)<br>
Average Lifespan:
14 years<br>
Group:
Shorthair<br>

Colour:
Brown, Blue, Chocolate, Lilac, Caramel, Gold, Peach<br>
Average Litter Size:
4<br>
Temperament:
Affectionate, gentle and trustworthy<br>



<h3>Reference:</h3> https://a-z-animals.com/animals/australian-mist/

</h4></p></body></html>