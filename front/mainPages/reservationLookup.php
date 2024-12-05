<!-- Greih Murray, Sam Bachman, Fatih Suljovic, Cody Ferre CSD460 Capstone Software Development -->

<?php
$title = "Reservation Lookup";
$root = "../../";
require_once('../border/header.php');
require_once('../functions/getUserReservations.php');

$error = '';
$reservations = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);

    if (!empty($email)) {
        $reservations = userReservations($email);

        if (empty($reservations)) {
            $error = "No reservations found for this email.";
        }
    } else {
        $error = "Please enter a valid email.";
    }
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>reservationLookup.css">

<div class="lookupContainer">
    <h2>Reservation Lookup</h2>
    <form id="lookupContain" method="post">
        <div class="lookupForm">
            <label for="email">Enter Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <button class="submitButton" type="submit">Search</button>
        </div>
    </form>

    <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if ($reservations): ?>
        <div class="lookupView">
            <h3>Reservation Results</h3>
            <?php foreach ($reservations as $reservation): ?>
                <div class="lookupItem">
                    <p><strong>Room Size:</strong> <?php echo htmlspecialchars($reservation['room_size']); ?></p>
                    <p><strong>Number of Guests:</strong> <?php echo htmlspecialchars($reservation['guest_count']); ?></p>
                    <p><strong>Check-In Date:</strong> <?php echo htmlspecialchars($reservation['check_in']); ?></p>
                    <p><strong>Check-Out Date:</strong> <?php echo htmlspecialchars($reservation['check_out']); ?></p>
                    <hr>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php
require_once "../border/footer.php";
?>