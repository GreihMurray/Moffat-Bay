<!-- Greih Murray, Sam Bachman, Fatih Suljovic, Cody Ferre CSD460 Capstone Software Development -->

<?php
$title = "Booking Page";
$root = "../../";
require_once('../border/header.php');
?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>book.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>



<div class="bookContainer">
    <div class="bookingBox">
        <img src="../images/bookingMainBox.jpg" alt="Image of the interior of cabin">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> View
            Gallery </button> <!-- gallery button -->
    </div>

    <!-- Featured room box -->
    <div class="bookingRow">
        <div class="bookingRowBox">
            <h5 style="text-align: center;">Check Availability</h5>
            <div id="availability-calendar"></div>
			<script>
                document.addEventListener('DOMContentLoaded', function () {
                    flatpickr("#availability-calendar", {
                        mode: "range",
                        inline: true,
                        minDate: "today",
                        dateFormat: "Y-m-d",
                    });
                });
            </script>
        </div>
		<div class="bookingRowBox">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookingModal">
                Book a Room
            </button>
        </div>
    </div>
</div>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
		<form action="../createRes.php" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalTitle">Choose Your Room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Room Options -->
				<select name="room" id="roomChoice" required>
                <div class="list-group mb-3">
					<!-- Room 1 -->
                    <option href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Room 1: Standard Room<br><br></h5>
                        <p class="mb-1">A cozy room with two Full beds and a forest view.</p>
                        <small>$126.00/night</small>
                    </option>
                    <!-- Room 2 -->
                    <option href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Room 2: Standard Room</h5>
                        <p class="mb-1">A cozy room with a queen-sized bed and a forest view.</p>
                        <small>$141.75/night</small>
                    </option>
                    <!-- Room 3 -->
                    <option href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Room 3: Family Room</h5>
                        <p class="mb-1">Perfect for families this room features two queen-sized beds and a kitchen.
                        </p>
                        <small>$157.50/night</small>
                    </option>
                    <!-- Room 4 -->
                    <option href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Room 4: Deluxe Suite</h5>
                        <p class="mb-1">A spacious suite with a king-sized bed, balcony and lake view.</p>
                        <small>$168.00/night</small>
                    </option>
					</select>
					</form>
                </div>
                <!-- Calendar Section -->
                <h5 class="mb-3">Check Availability</h5>
                <input id="availability-calendar" class="form-control" placeholder="Select your dates">
            <div class="modal-footer">
                <a href="../mainPages/booking.php" <button type="button" class="btn btn-secondary">Cancel</button></a>
               <a href="../mainPages/roomRes.php" <button type="button" class="btn btn-primary">Submit</button></a>
            </div>
			</div>
                <button type="button" onclick="location.href='../mainPages/booking.php'"class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="location.href='../mainPages/roomRes.php'" class="btn btn-primary">Submit</button>
            </div>
		</form>
        </div>
    </div>
</div>

<!-- gallery modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/Rooms1.jpg" class="d-block w-100" alt="Main Box Image">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/Rooms2.jpg" class="d-block w-100" alt="Feature Rooms">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/Rooms3.jpg" class="d-block w-100" alt="Feature Rooms">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/Rooms4.jpg" class="d-block w-100" alt="Feature Rooms">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/Garden.jpg" class="d-block w-100" alt="Feature Rooms">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/backsidePool.jpg" class="d-block w-100" alt="Another Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
require_once "../border/footer.php";