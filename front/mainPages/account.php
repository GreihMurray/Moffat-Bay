<?php
    $title = "Login and Registration Page";
    $root = "../../";
    require_once('../border/header.php');
?>

<?php header('Access-Control-Allow-Origin: *'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>login.css">

<div class="formContainer">
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
				<input type="password" id="password" name="password" 
					pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required>
				<label for="confirmPassword">Confirm Password:</label>
				<input type="password" id="confirmPassword" name="confirmPassword" required>
			<div id="message">
				<h3>Password must contain the following:</h3>
				<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
				<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
				<p id="number" class="invalid">A <b>number</b></p>
				<p id="length" class="invalid">Minimum <b>8 characters</b></p>
			</div>
				<button type="submit" class="submitButton">Register</button>
			</form>
			<p class="swapText">Already have an account? <a href="?action=login">Login here</a></p>
		</div>
    <?php
    }
    ?>
</div>
</div>
<!--Password Validation -->
<?php echo
	'<script>
	var myInput = document.getElementById("password");
	var letter = document.getElementById("letter");
	var capital = document.getElementById("capital");
	var number = document.getElementById("number");
	var length = document.getElementById("length");


	myInput.onfocus = function() {
	document.getElementById("message").style.display = "block";
	}


	myInput.onkeyup = function() {
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>'
?>

<?php
    require_once "../border/footer.php";
?>
