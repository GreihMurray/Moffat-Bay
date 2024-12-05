<!-- Greih Murray, Sam Bachman, Fatih Suljovic, Cody Ferre CSD460 Capstone Software Development -->

<?php
$title = "Booking Page";
$root = "../../";
require_once('../border/header.php');
?>

<link rel="stylesheet" type="text/css" href="<?php echo css ?>attractions.css">
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


			<div style="width: 80%; height: 50%; margin-left: auto; margin-right:auto; margin-top: 2em; margin-bottom: 2em">
                <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="attraction-carousel carousel-item active">
                            <img src="../images/marina.png" class="d-block w-100 carousel_img" alt="Main Box Image">
							<h2>Moffat Bay Marina</h2>
							<p>
								For aquatic pursuits you should visit the nearby Moffat Bay Marina! 
								Here they offer boat tours, canoe and kayak rentals, jet ski rentals,
								scuba diving lessons, and more!
							</p>
                        </div>
                        <div class="attraction-carousel carousel-item">
                            <img src="../images/statepark.jpg" class="d-block w-100 carousel_img" alt="Main Box Image">
							<h2>Moffat Bay State Park</h2>
							<p>
								An outdoor adventurest's dream, the nearby Moffat Bay State park
								offers days worth of hiking trails, stunning vistas from its many viewing areas,
								guided tours, rock climbing, and to top it all off, it is also an 
								internationally recognized dark sky park!
							</p>
                        </div>
                        <div class="attraction-carousel carousel-item">
                            <img src="../images/mall.jpg" class="d-block w-100 carousel_img" alt="Main Box Image">
							<h2>Moffat Mall</h2>
							<p>
								Looking for the perfect gift? Look no further than Moffat Mall,
								the largest mall in the state, home to more than 300 individual stores
								and activities!
							</p>
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
            
<?php
require_once "../border/footer.php";