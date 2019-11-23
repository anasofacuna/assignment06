<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Assignment 6: Full Brochure Website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/override.css">
</head>

<body>
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<header class="text-center">
					<h1>UR Women's Rugby</h1>
				</header>
			</div>
		</div>
		<div class="row">
			<nav class="navbar text-left">
				<ul>
					<li class="col-md-4"><a href="index.php" class="btn btn-danger btn-lg btn-block">Team Homepage</a></li>
					<li class="col-md-4"><a href="info.php" class="btn btn-danger btn-lg btn-block" role="button" aria-pressed="true">What is Rugby?</a></li>
					<li class="col-md-4"><a href="signup.php" class="btn btn-danger btn-lg btn-block">Join Us!</a></li>
				</ul>
			</nav>
		</div>


		<div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="images/team.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/lineout.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/ruck.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		</div>

		<main>
			<div class="row">
				<div class="col-md-4">
					<h2 class="text-left">Who are we?</h2>
					<p class="text-left">Our team name is the Sledgehammers, and we are the Women’s Rugby club at the University of Rochester! We are a part of the National Small College Rugby Organization (NSCRO), and play both home and away games against nearby schools in that league. We have both a fall and spring season, practice on Mondays and Thursdays from 8-10pm on the Southside field, and our games are on Saturday mornings. We have also qualified for national tournaments in years past, which has taken us to places like Ohio and Pennsylvania!</p>
				</div>

				<div class="col-md-4">
					<h2 class="text-left">Who can play?</h2>
					<p class="text-left">We are happy to welcome anyone to the team! No experience is required, and most of our current members had never touched a rugby ball before joining. We work together as a team on strengthening our basic skills, and challenge each other to consistently improve our fitness capabilities. We are not a varsity sport, so time commitments are not as extreme, and we do not hold tryouts or make any cuts- we believe rugby is a sport for everybody!</p>
				</div>

				<div class="col-md-4">
					<h2 class="text-left">Will you get hurt?</h2>
					<p class="text-left">Rugby is a contact sport, but safety is our top priority. We will teach you how to play correctly and safely, and will work on refining those skills before putting you in any situation you might be uncomfortable in. Like any sport, injuries can happen, but the more we practice properly, the more those situations are avoided.</p>
				</div>
			</div>
		</main>

		<?php include 'inc/foot.php'; ?>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="js/menu-highlighter.js"></script>
	<script>
		$('.carousel').carousel()
	</script>

</body>

</html>