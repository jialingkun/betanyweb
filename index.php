<?php include 'part/header.php';?>

<script>
// Set the date we're counting down to
var countDownDate = new Date();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
    	clearInterval(x);
    	document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

<style>

	/*override boostrap carousel style*/
	.carousel-inner{
		background-color: black;
	}
	
	.carousel-inner > .item > img {
		margin: 0 auto;
	}
</style>

<div id="quicklinktab" class="sidenav">
	<div class="quicklinks-tab" onclick="clickQuickLinkTab()">Quick Links</div>
	<div class="sidenav-menu">
		<a href="menu.php?id=21">Service Timing</a>
		<a href="stream.php">Live Streaming</a>
		<a href="/">Upcoming Event</a>
		<a href="/">Announcement</a>
		<a href="menu.php?id=64">Contact Us</a>
	</div>
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="img/slider1.jpg" alt="Welcome">
		</div>

		<div class="item">
			<img src="img/slider2.jpg" alt="Welcome">
		</div>

		<div class="item">
			<img src="img/slider3.jpg" alt="Welcome">
		</div>

		<div class="item">
			<img src="img/slider4.jpg" alt="Welcome">
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="timer-wrapper center">
	<h5>Watch Our Live Services In</h5>
	<div>0 <br>days</div>
	<div>11 <br>hours</div>
	<div>28 <br>mins</div>
	<div>19 <br>secs</div>
	<button type="button" class="btn btn-danger hide">WATCH NOW!</button>
	<a href=" https://www.youtube.com/channel/UCDbS-b_NMp5jqZw1YfAo_vA"><button type="button" class="btn btn-primary">PREVIOUS BROADCASTS</button></a>
</div>




<?php include 'part/footer.php';?>