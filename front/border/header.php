<!--Greih Murray, Sam Bachman, Fatih Suljovic, Cody Ferre CSD460 Capstone Software Development -->
<?php
	session_start();
	define("css", $root . "front/css/");
	define("links", $root . "front/border/links");
	define("images", $root . "front/images/");	
	define("view", $root . "front/");
	require "links.php";	
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo css ?>temp.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<title><?php echo $title?></title>
</head>
<body>
	<!-- Title -->
	<div class="header">
		<div class="topTitle">
			<img src="../images/Fish.jpg" href="<?php echo $home ?>" width="5%" height="5%" style="margin-left: 2em; margin-right: -10em;">
			<a href="<?php echo $home ?>"<h1>Moffat Bay Lodge<h1></a>
		</div>
	<a id="menu" class="menu" onclick="onMenuClick()"></a>
		<i class="fa fa-bars"></i>
		<!-- Navbar -->
	<div id="navBar" class="nav">
	
		<a id="book" href="<?php echo $pages["Booking"]?>">Booking</a>
		<a id="attract" href="<?php echo $pages["Attractions"]?>">Attractions</a>
		<a id="about" href="<?php echo $pages["About"]?>">About Us</a>
		<a id="account" href="<?php echo $pages["Account"]?>">Login/Register</a>
		<a id="reservationLookup" href="<?php echo $pages["ReservationLookup"]?>">Reservation Lookup</a>
		<?php
			if(isset($_SESSION["customer"])){
				unset($pages["LoginRegist"]);
			}
			if(isset($_SESSION["customer"])){
		?>
				<a href="<?php echo controller?>logout.php"><h2>Logout</h2></a>
				<?php
			}
			?>
	</div>
	</div>