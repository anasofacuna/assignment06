<?php include 'inc/top.php'; ?>

		<main>
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-left">Any questions? Interested in playing? Talk to us!</h2>
			</div>
		</div>

		<div class="row">	
			<div class="col-md-12">
				<p class="headernewsletter">We're happy to answer any questions or concerns you may have, and keep you updated on our team information.</p>
			</div>
		</div>
		
		<form method="post" class="form" action="new.php">
			<fieldset>
				<div>
					<label for="name">Name: </label>
					<div>
						<input type="text" name="name" id="name">
					</div>
				</div>

				<div>
					<label for="email">E-mail: </label>
					<div>
						<input type="email" name="email" id="email">
					</div>
				</div>

				<div>
					<label for="comment">Any questions or comments?</label>
					<div>
						<input type="text" name="comment" id="comment">
					</div>
				</div>

				<div class="submitbutton">
					<input type="submit" class="btn btn-success" name="submit" value="Submit">
				</div>
			</fieldset>
		</form>

		<h2 class="text-left">While you're here, check out our social media accounts!</h2>
		<p>You can find us on Facebook at <a href="https://www.facebook.com/urwomensrugby/">UR Women's Rugby</a> for photos and game schedules, and Instagram at <a href="https://www.instagram.com/ur_womens_rugby/">@ur_womens_rugby</a> for our very own rugby memes</p>

		</main>

		<?php include 'inc/foot.php'; ?>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="js/menu-highlighter.js"></script>
</body>

</html>