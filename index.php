<?php include 'inc/top.php'; ?>


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

		<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
			    	<img src="images/team.jpg" class="d-block w-100" alt="first_slide"> 
			    </div>
			    <div class="carousel-item">
			      	<img src="images/lineout.jpg" class="d-block w-100" alt="second_slide">
			    </div>
			    <div class="carousel-item">
			      	<img src="images/scrum.jpg" class="d-block w-100" alt="third_slide">
			    </div>
			    <div class="carousel-item">
			      	<img src="images/ruck.jpg" class="d-block w-100" alt="fourth_slide">
			    </div>
			    <div class="carousel-item">
			      	<img src="images/team2.jpg" class="d-block w-100" alt="fifth_slide">
			    </div>
			</div>
		</div> -->

	<!-- 	<figure class="row">
			<div class="col-md-12">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
					    	<img src="images/team.jpg" class="d-block w-100" alt="first_slide"> 
					    </div>
					    <div class="carousel-item">
					      	<img src="images/lineout.jpg" class="d-block w-100" alt="second_slide">
					    </div>
					    <div class="carousel-item">
					      	<img src="images/scrum.jpg" class="d-block w-100" alt="third_slide">
					    </div>
					    <div class="carousel-item">
					      	<img src="images/ruck.jpg" class="d-block w-100" alt="fourth_slide">
					    </div>
					    <div class="carousel-item">
					      	<img src="images/team2.jpg" class="d-block w-100" alt="fifth_slide">
					    </div>
					</div>
				</div>
	  		</div>
		</figure> -->

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
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<script src="js/menu-highlighter.js"></script>
	<script>
		$('.carousel').carousel()
	</script>

</body>

</html>