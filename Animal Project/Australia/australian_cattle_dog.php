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
 <img src ="dog.PNG" width="500" height="250"><br><h2 class="btn btn-warning">[Click here or Image For<b style="color:green"> HOME</b>]</h2></a>
<h1 class="head2"><div style="background-color:black">About Australian Cattle Dog:<h1></div>

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

<h1 style="text-align:center;color:red">Information about Australian Cattle Dog:</h3>

<h3>Australian Cattle Dog:</h3>

Like many herding dogs, Cattle Dogs have high energy levels and active minds. They need plenty of exercise and a job to do, so non-working dogs need to participate in dog sports, learning tricks, or other activities that engage their body and mind.

Some individuals find repetitive training frustrating and dull, so owners should aim to make training sessions varied and more exciting in order to keep their doginterested. Cattle Dogs who do not receive the appropriate exercise and entertainment will invent their own, often destructive, activities. These dogs are, by nature, wary. They are naturally cautious, and grow more so as they age. Their cautious nature towards strangers makes them perfect guard dogs, when trained for this task.

Cattle Dogs drive cattle by nipping at their heels or tails, but they have also been known to herd other animals.







<h3>Australian Cattle Dog Facts:</h3>


Common Name:
Australian Cattle Dog<br>
Origin:
Australia<br>
Average Size:
50cm (20in)<br>
Average Weight:
20kg (45lbs)<br>
Average Lifespan:
15 years<br>
Group:
Herd Dog<br>

Colour:
Grey, Red, Black<br>
Average Litter Size:
5<br>
Temperament:
Strong minded yet loyal and loving<br>
Training:
Should be trained from an early age and respond best to firm and fair training<br>









<h3>Reference:</h3> https://a-z-animals.com/animals/australian-cattle-dog/

</h4></p></body></html>