<!DOCTYPE html>
<html>
<head>
	<title>Car Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body lang="en" data-gr-c-s-loaded="true">
	<div class="Header-div" id="Header">
		<audio id="player" autoplay>
    		<source src="mp3/carSound.mp3" type="audio/mp3">
		</audio>
		<div id="top">
			<div class="navigation">
				<div class="logo" id="play">
					<img src="img/skeri.png">
					<h2>SkeriGati</h2>
				</div>
				
				<ul class="links">
					<li>
						<a href="#Header">Home</a>
					</li>
					<li>
						<a href="#one">Model X</a>
					</li>
					<li>
						<a href="#two">Model XL</a>
					</li>
					<li>
						<a href="#three">Model XS</a>
					</li>
					<li>
						<a href="#footerz">Contact</a>
					</li>
				</ul>


				<div class="menu">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>

			</div>
			<h1 id="title-text">
				<span>S</span>
				<span>K</span>
				<span>E</span>
				<span>R</span>
				<span>I</span>
				<span>G</span>
				<span>A</span>
				<span>T</span>
				<span>I</span>
			</h1>
		</div>
	</div>
	<div class="Section1" id="one">
			<div class="Section1-left">
				<div class="content">
					<h2>X</h2>
					<h3 class="Section-title">MODEL SKERI X</h3>
					<p class="Section-p"> Safety is the most important part of the overall Model X design. The metal structure is a combination of aluminum and steel, for maximum strength in every area. In a roof-crush test, Model X resisted four times its own mass, even with an all-glass roof: that's the same weight as two full-grown African elephants.
					</p>
					<a class="Link-button" href="modelX.html">Read more</a>
				</div>
			</div>
			<div class="Section1-right"></div>
	</div>
	<div class="Section2" id="two">
			<div class="Section2-left">
				<div class="content">
					<h2>XL</h2>
					<h3 class="Section-title">MODEL SKERI XL</h3>
					<p class="Section-p"> Safety is the most important part of the overall Model X design. The metal structure is a combination of aluminum and steel, for maximum strength in every area. In a roof-crush test, Model X resisted four times its own mass, even with an all-glass roof: that's the same weight as two full-grown African elephants.
					</p>
					<a class="Link-button" href="modelXL.html">Read more</a>
				</div>
			</div>
			<div class="Section2-right"></div>
	</div>
	<div class="Section3" id="three">
			<div class="Section3-left">
				<div class="content">
					<h2>XS</h2>
					<h3 class="Section-title">MODEL SKERI XS</h3>
					<p class="Section-p"> Safety is the most important part of the overall Model X design. The metal structure is a combination of aluminum and steel, for maximum strength in every area. In a roof-crush test, Model X resisted four times its own mass, even with an all-glass roof: that's the same weight as two full-grown African elephants.
					</p>
					<a class="Link-button" href="modelXS.html">Read more</a>
				</div>
			</div>
			<div class="Section3-right"></div>
	</div>
	<div class="govno">
		<div class="divider"></div>
		<div class="Footer" id="footerz">
			<div class="Footer-left">
				<div class="content">
					<h3 class="Section-title">Contact information</h3>
					<p class="Section-p"> 
						You can find our shops all over Sarajevo. We are open 27/4. Come and visit us.
					</p>
					<br>
					<p class="Section-p"> 
						Email: Skerigati@info.com
					</p>
					<p class="Section-p"> 
						Phone: +3873378998767
					</p>
				</div>
				<div class="Footer-r">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23013.88013433178!2d18.40023879669913!3d43.8613206588418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sba!4v1574541991871!5m2!1sen!2sba"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
			<div class="Footer-send">
					<form action="index.php" method="post">
					    <label for="fname">First Name</label>
					    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

					    <label for="lname">Last Name</label>
					    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

					    <label for="email">Email</label>
					    <input type="text" id="Email" name="email" placeholder="Your Email.." required>
					    <label for="subject">Subject</label>
					    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea required>

					    <input type="submit" value="Submit" name="submit" id="btn">
					 </form>
			</div>
	</div>
		<div class="divider"></div>
	</div>
	<div class="credits">
		<p class="Section-p"> &copy Adem Dugalic 2019</p>
	</div>
	

	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>





<?php
	require 'PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST['submit'])){
	$name =  $_POST['firstname'];
	$surname =  $_POST['lastname'];
    $email = $_POST['email'];
    $mailSub = "Skerigati";
    $mailMsg = $_POST['message'];


    $mail = new PHPMailer();
     $mail ->IsSmtp();
     $mail ->SMTPDebug = 0;
     $mail ->SMTPAuth = true;
     $mail ->SMTPSecure = 'ssl';
     $mail ->Host = "smtp.gmail.com";
     $mail ->Port = 465; // or 587
     $mail ->IsHTML(true);
     $mail ->Username = "DevIUS.ius@gmail.com";
     $mail ->Password = "**************";
     $mail ->SetFrom("DevIUS.ius@gmail.com");
     $mail ->Subject = $mailSub;
     $mail ->Body = $name." ".$surname."<br>".$email."<br><br>".$mailMsg;
     $mail ->AddAddress("dugalice@gmail.com");


   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $mail->Send();
  }else{
    echo '<script type="text/javascript"> alert("not a valid email") </script> ';
  }


 }
?>
