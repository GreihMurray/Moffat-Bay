<!-- Greih Murray, Sam Bachman, Fatih Suljovic, Cody Ferre CSD460 Capstone Software Development -->
 
 <?php
	$title="Booking Page";
	$root="../../";
	require_once('../border/header.php');
?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>book.css">

<div class="bookContainer">
	<div class="bookingBox">
	<img src="../images/bookingMainBox.jpg" alt="Image of the interior of cabin">
	<button>View Gallery</button>
	</div>

<div class="bookingRow">
    <div class="bookingRowBox">
        <img src="../images/featureRooms.jpg">
        Feature Rooms
    </div>
    <div class="bookingRowBox">
        m temporibus culpa illo! Rem atque ab iusto?
    </div>
    <div class="bookingRowBox">
		<input id="calendar-selectrange" hidden="hidden">
		<script>
            let fp = flatpickr('#calendar-selectrange',{
                "mode": "range",
                "inline": true,
                onValueUpdate: [function(date, dateStr){
                    let startDate = dateStr;
                    startDate = startDate.slice(0,10);
                    let endDate = dateStr.slice(14,25);
                    document.getElementById("startDate").value = startDate;
                    document.getElementById("endDate").value = endDate;
                    getPrice();

                }]
            });
        </script>
        <button class="bookingBoxButton">Book Now</button>
    </div>
    <div class="bookingRowBox">
        Calendar
        <button class="bookingBoxButton">Check Availability</button>
    </div> 
</div>
</div>
<?php
	require_once "../border/footer.php";