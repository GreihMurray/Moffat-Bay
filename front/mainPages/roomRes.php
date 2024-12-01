<!-- Greih Murray, Sam Bachman, Fatih Suljovic, Cody Ferre CSD460 Capstone Software Development -->

<?php
	$title="Reservation";
	$root="../../";
	require_once('../border/header.php');
?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>reserve.css">

<div class="reservContainer">
	<form id="formContain" method="post" action="../createRes.php" >
	<div class="reserveForm">
		<div class="roomInfo">
			<img class="roomImg" src="../images/featureRooms.jpg">
			<p>Deluxe Suite</p>
			<p>151.50</p>
		</div>
		<div class="stayInfo">
			<div class="check">
				<h4 style="padding-right: 20px;">Check In</h4>
				<h4>Check Out</h4>
			</div>
			<div class="date">
				<input type="date" id="dateIn" name="date" value="<?php $dateIn ?>"  required>
				<input type="date" id="dateOut" name="date" value="<?php $dateOut ?>" required>	
				<p>7 Days</p>
			</div>
		</div>
		<div class="deposit">
			<h5>Deposit</h5>
			<p>50.00</p>
		</div>
		<div class="taxes">
			<h5>Taxes</h5>
			<p>79.54</p>
		</div>
		<hr>
		<div class="total">
			<h6>Total</h6>
			<p>$1,190.04</p>
		</div>
		<div class="buttons">
			<button class="confirmbutt">Confirm</button>
			<button class="cancelbutt" onclick="location.href='../mainPages/booking.php'">Cancel</button>
		</div>
	</div>
	</form>
</div>
<script>

	    function dateDiff(k, j) {
        const _MS_PER_DAY = 1000 * 60 * 60 * 24;

        const calc1 = Date.UTC(k.getFullYear(), k.getMonth(), k.getDate());
        const calc2 = Date.UTC(j.getFullYear(), j.getMonth(), j.getDate());

        return Math.floor((calc2 - calc1) / _MS_PER_DAY);

</script>

<?php
	require_once "../border/footer.php";