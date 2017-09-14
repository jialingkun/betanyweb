<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grha Bethany Malang</title>
</head>
<body>

	<script>
		/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
		function clickToogle() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}

		function clickSubToogle(e) {
			var x = e.getElementsByTagName('div')[0];
			if (x.className === "dropdown-content") {

				var y = document.getElementsByClassName("submenu");
				for (i = 0; i < y.length; i++) {
					y[i].className = "dropdown-content";
				}

				x.className += " submenu";
			} else {
				x.className = "dropdown-content";
			}
		}
	</script>

	<!-- wraper opening div -->
	<div class="wrapper">
	<!-- wraper opening div -->







		<div class="topnav" id="myTopnav">
			<div><a class="home" href="index.php"><img src="navbarLogo.png"></a></div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">About Us</button>
				<div class="dropdown-content">
					<a href="#">My Home</a>
					<a href="#">Our Senior Pastor</a>
					<a href="#">Mission and Beliefs</a>
					<a href="#">Latest Announcement</a>
					<a href="#">Special Notices</a>
					<a href="#">Our Location</a>
				</div>
			</div> 

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Our Services</button>
				<div class="dropdown-content">
					<a href="#">Ibadah Raya</a>
					<a href="#">Doa Malam</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Be Connected</button>
				<div class="dropdown-content">
					<a href="#">Family Altar</a>
					<a href="#">Upcoming Event</a>
					<a href="#">Bible Study Academy</a>
					<a href="#">Menara Doa</a>
					<a href="#">Plan A Visit</a>
					<a href="#">Youth Movement</a>
					<a href="#">Child Church</a>
					<a href="#">WBI</a>
					<a href="#">ManHood</a>
					<a href="#">ProM</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Media</button>
				<div class="dropdown-content">
					<a href="#">Live Streaming</a>
					<a href="#">My News</a>
					<a href="#">Radio</a>
					<a href="#">Media Downloads</a>
					<a href="#">Previous Event</a>
					<a href="#">TV</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Social Profeets</button>
				<div class="dropdown-content">
					<a href="#">Lansia / Elderly</a>
					<a href="#">Bedah Rumah</a>
					<a href="#">Rumah Singgah</a>
					<a href="#">Panti Asuhan</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Get In Touch</button>
				<div class="dropdown-content">
					<a href="#">Renungan Harian</a>
					<a href="#">Prayer Request</a>
					<a href="#">Share A Testimony</a>
					<a href="#">Contact Us</a>
					<a href="#">Donation</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Pastoral Care</button>
				<div class="dropdown-content">
					<a href="#">Pernikahan</a>
					<a href="#">Kedukaan</a>
					<a href="#">Kunjungan Orang Sakit</a>
					<a href="#">Konseling</a>
					<a href="#">Baptis</a>
				</div>
			</div>

			<div class="icon"><a class="burger" href="javascript:void(0);" onclick="clickToogle()">&#9776;</a></div>
		</div>



		





		<!-- content opening div -->
		<div class="content">
		<!-- content opening div -->