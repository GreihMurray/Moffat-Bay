<?php
    $title = "Login and Registration Page";
    $root = "../../";
    require_once('../border/header.php');
	require("../functions/getUserReservations.php")
?>

<?php header('Access-Control-Allow-Origin: *'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>login.css">

<?php
	if(isset($_SESSION['userEmail'])){
		echo $_SESSION['reservations'];
	} else{
?>

<div class="loginRegistrationForm">
    <?php
    // Default to show login form
    if (!isset($_GET['action']) || $_GET['action'] !== 'register') {
    ?>
        <!-- Login Form -->
		<div class="formBox">
			<h3>Login</h3>
			<form method="post" action="../functions/userLogin.php">
				<label for="email">Email:</label>
				<input type="email" id="emailIn" name="email" required>
				<label for="password">Password:</label>
				<input type="password" id="passwordIn" name="password" required>
				<button type="submit" class="submitButton">Login</button>
			</form>
			<p class="swapText">Don't have an account? <a href="?action=register">Register here</a></p>
		</div>
    <?php
    } else {
    ?>
        <!-- Registration Form -->
		<div class="formBox">
			<h3>Register</h3>
			<form action="../functions/userRegistration.php" method="POST">
				<label for="firstName">Full Name:</label>
				<input type="text" id="firstName" name="firstName" required>
				<label for="lastName">Last Name:</label>
				<input type="text" id="lastName" name="lastName" required>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" id="phoneNumber" name="phoneNumber" required>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
				<label for="confirmPassword">Confirm Password:</label>
				<input type="password" id="confirmPassword" name="confirmPassword" required>
				<button type="submit" class="submitButton">Register</button>
			</form>
			<p class="swapText">Already have an account? <a href="?action=login">Login here</a></p>
		</div>
    <?php
    }}
    ?>
</div>

<?php
    require_once "../border/footer.php";
?>
