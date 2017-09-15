<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="part/style.css">

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
			<div><a class="home" href="index.php"><img src="img/navbarLogo.png"></a></div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">About Us</button>
				<div class="dropdown-content">
					<a href="/">My Home</a>
					<a href="dummy.php?title=Our Senior Pastor&image=comingSoon.jpg">Our Senior Pastor</a>
					<a href="dummy.php?title=Mission and Beliefs&image=comingSoon.jpg">Mission and Beliefs</a>
					<a href="dummy.php?title=Latest Announcement&image=comingSoon.jpg">Latest Announcement</a>
					<a href="dummy.php?title=Special Notices&image=comingSoon.jpg">Special Notices</a>
					<a href="location.php">Our Location</a>
				</div>
			</div> 

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Our Services</button>
				<div class="dropdown-content">
					<a href="dummy.php?title=Ibadah Raya&image=ibadahRaya.png">Ibadah Raya</a>
					<a href="dummy.php?title=Doa Malam&image=doaMalam.jpg">Doa Malam</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Be Connected</button>
				<div class="dropdown-content">
					<a href="dummy.php?title=Family Altar&image=comingSoon.jpg">Family Altar</a>
					<a href="dummy.php?title=Upcoming Event&image=comingSoon.jpg">Upcoming Event</a>
					<a href="dummy.php?title=Bible Study Academy&image=comingSoon.jpg">Bible Study Academy</a>
					<a href="dummy.php?title=Menara Doa&image=comingSoon.jpg">Menara Doa</a>
					<a href="dummy.php?title=Plan A Visit&image=comingSoon.jpg">Plan A Visit</a>
					<a href="dummy.php?title=Youth Movement&image=comingSoon.jpg">Youth Movement</a>
					<a href="dummy.php?title=Child Church&image=childChurch.jpg">Child Church</a>
					<a href="dummy.php?title=WBI&image=comingSoon.jpg">WBI</a>
					<a href="dummy.php?title=ManHood&image=comingSoon.jpg">ManHood</a>
					<a href="dummy.php?title=ProM&image=comingSoon.jpg">ProM</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Media</button>
				<div class="dropdown-content">
					<a href="stream.php">Live Streaming</a>
					<a href="dummy.php?title=My News&image=comingSoon.jpg">My News</a>
					<a href="dummy.php?title=Radio&image=comingSoon.jpg">Radio</a>
					<a href="dummy.php?title=Media Downloads&image=comingSoon.jpg">Media Downloads</a>
					<a href="dummy.php?title=Previous Event&image=comingSoon.jpg">Previous Event</a>
					<a href="dummy.php?title=TV&image=comingSoon.jpg">TV</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Social Profeets</button>
				<div class="dropdown-content">
					<a href="dummy.php?title=Lansia / Elderly&image=comingSoon.jpg">Lansia / Elderly</a>
					<a href="dummy.php?title=Bedah Rumah&image=comingSoon.jpg">Bedah Rumah</a>
					<a href="dummy.php?title=Rumah Singgah&image=comingSoon.jpg">Rumah Singgah</a>
					<a href="dummy.php?title=Panti Asuhan&image=comingSoon.jpg">Panti Asuhan</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Get In Touch</button>
				<div class="dropdown-content">
					<a href="dummy.php?title=Renungan Harian&image=comingSoon.jpg">Renungan Harian</a>
					<a href="dummy.php?title=Prayer Request&image=comingSoon.jpg">Prayer Request</a>
					<a href="dummy.php?title=Share A Testimony&image=comingSoon.jpg">Share A Testimony</a>
					<a href="dummy.php?title=Contact Us&image=comingSoon.jpg">Contact Us</a>
					<a href="dummy.php?title=Donation&image=comingSoon.jpg">Donation</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Pastoral Care</button>
				<div class="dropdown-content">
					<a href="dummy.php?title=Pernikahan&image=pastoralCare.jpg">Pernikahan</a>
					<a href="dummy.php?title=Kedukaan&image=pastoralCare.jpg">Kedukaan</a>
					<a href="dummy.php?title=Kunjungan Orang Sakit&image=pastoralCare.jpg">Kunjungan Orang Sakit</a>
					<a href="dummy.php?title=Konseling&image=pastoralCare.jpg">Konseling</a>
					<a href="dummy.php?title=Baptis&image=pastoralCare.jpg">Baptis</a>
				</div>
			</div>

			<div class="icon"><a class="burger" href="javascript:void(0);" onclick="clickToogle()">&#9776;</a></div>
		</div>



		





		<!-- content opening div -->
		<div class="content">
		<!-- content opening div -->