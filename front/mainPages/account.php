<?php
    $title = "Login and Registration Page";
    $root = "../../";
    require_once('../border/header.php');
    $loggingIn = true;
?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>login.css">

<div class="loginRegistrationForm">
    <!-- Login Form -->
    <?php
        if($loggingIn) {
    ?>
    <div class="formBox">
        <h3>Login</h3>
        <form action="/login" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="submitButton">Login</button>
        </form>
        <p>Don't have an account? <a href="?action=register">Register here</a></p>
    </div>
    <?php
        } else {
    ?>
    <!-- Registration Form -->
    <div class="formBox">
        <h3>Register</h3>
        <form action="/register" method="POST">
            <label for="registerName">Full Name:</label>
            <input type="text" id="registerName" name="registerName" required>
            <label for="registerEmail">Email:</label>
            <input type="email" id="registerEmail" name="registerEmail" required>
            <label for="registerPassword">Password:</label>
            <input type="password" id="registerPassword" name="registerPassword" required>
            <label for="registerConfirmPassword">Confirm Password:</label>
            <input type="password" id="registerConfirmPassword" name="registerConfirmPassword" required>
            <button type="submit" class="submitButton">Register</button>
        </form>
    </div>
    <?php
        }
    ?>
</div>

<?php
    require_once "../border/footer.php";
?>