<!-- Greih Murray, Sam Bachman, Fatih Suljovic, Cody Ferre CSD460 Capstone Software Development -->

<?php
	$title="Landing Page";
	$root="../../";
	require_once('../border/header.php');
?>

	<link rel="stylesheet" type="text/css" href="<?php echo css ?>land.css">
	
	<div class="gallery">
		<img src="../images/lodge.jpeg">
	</div>
	<div class="container">
		<div class="offer">
			<h2>What we Offer at Moffat Bay Lodge</h2>
				<p>Take in the beautiful scenary of Moffat Lake, where you can participate in activities such as Snorkling, Kayaking, Fishing, and Hunting. 
			   At night, relax by our campfire as we sing and share stories around the campfire.</p>
		</div>
		<div class="container_2">
			<div class="card">
				<div class="top_card">
					<div class="attra">
						<a href="<?php echo $pages["Attractions"]?>">
						<div class="card_img">
							<img src="../images/kayak.jpg">
						</div>
						<h3>Attractions</h3>
						</a>
					</div>
					<div class="story">
						<div class="card_img">
							<a href="<?php echo $pages["About"]?>">
							<img src="../images/Story.jpg " alt="Our Story">
						</div>
						<h3>Our Story</h3>
						</a>
					</div>
				</div>
				<div class="bottom_card">
					<a href="https://www.google.com/maps">
					<div class="card_img2">
						<img src="../images/map.jpg " alt="map of lodge">
					</div>
					<h3>Where we are</h3>
					<h3>1600 Moffat Bay Isle</h3>
					<h3>London, Michigan, 78957</h3>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php
	require_once "../border/footer.php";