<!-- Greih Murray, Sam Bachman, Fatih Suljovic, Cody Ferre CSD460 Capstone Software Development -->

 <?php
	$title="About Us";
	$root="../../";
	require_once('../border/header.php');
?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>about.css">

<div class="aboutContain">
	<div class="storyBox">
		<h5>Our Story</h5>
		<img class="storyImg" src="../images/Story.jpg " alt="Our Story">
		<div class="story">
			<p>We started this lodge back in 1960's as a family gathering location, each year we would gather and do activities for the summer at this lodge.
			   When my parents passed the lodge to me, I wanted to share the experiences from my family to yours, 
			   so everyone could enjoy their summers like I did as a child.</p>
		</div>
	</div>
	<div class="historyBox">
		<h5>History of Lodge</h5>
		<img class="historyImg" src="../images/lodge.jpeg">
		<div class="history">
			<p>This lodge was built back in 1935 by Roy Dinklehiemerschmit, 
			he had built it as his family home and passed it on to his kids where it has stayed in the family eversince. 
			Being used for the family as a location to hold gatherings and as a summer home away from home for us all. </p>
		</div>
	</div>
	<div class="contactBox">
		<h6>Let us Contact You!</h6>
		<form method="post">
			<label for="name">Name</label>
			<input type="text" id="nameIn" name="name" required>
			<label for="email">Email</label>
			<input type="email" id="emailIn" name="email" required>
			<label for="contact">Reason for Contact</label>
			<input type="text" id="contactIn" name="contact" required>
			<button type="submit" class="submitButton">Submit</button>
		</form>
	</div>
</div>

<?php
	require_once "../border/footer.php";