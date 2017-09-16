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

		function clickQuickLinkTab() {
			var x = document.getElementById("quicklinktab");
			if (x.className === "sidenav") {
				x.className += " responsive";
			} else {
				x.className = "sidenav";
			}
		}
	</script>

	<!-- wraper opening div -->
	<div class="wrapper">
	<!-- wraper opening div -->







		<div class="topnav" id="myTopnav">
			<div><a class="home" href="/"><img src="img/navbarLogo.png"></a></div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">About Us</button>
				<div class="dropdown-content">
					<a href="/">My Home</a>
					<a href="menu.php?id=12">Our Senior Pastor</a>
					<a href="menu.php?id=13">Mission and Beliefs</a>
					<a href="menu.php?id=14">Latest Announcement</a>
					<a href="menu.php?id=15">Special Notices</a>
					<a href="location.php">Our Location</a>
				</div>
			</div> 

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Our Services</button>
				<div class="dropdown-content">
					<a href="menu.php?id=21">Ibadah Raya</a>
					<a href="menu.php?id=22">Doa Malam</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Be Connected</button>
				<div class="dropdown-content">
					<a href="menu.php?id=31">Family Altar</a>
					<a href="menu.php?id=32">Upcoming Event</a>
					<a href="menu.php?id=33">Bible Study Academy</a>
					<a href="menu.php?id=34">Menara Doa</a>
					<a href="menu.php?id=35">Plan A Visit</a>
					<a href="menu.php?id=36">Youth Movement</a>
					<a href="menu.php?id=37">Child Church</a>
					<a href="menu.php?id=38">WBI</a>
					<a href="menu.php?id=39">ManHood</a>
					<a href="menu.php?id=310">ProM</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Media</button>
				<div class="dropdown-content">
					<a href="stream.php">Live Streaming</a>
					<a href="menu.php?id=42">My News</a>
					<a href="menu.php?id=43">Radio</a>
					<a href="menu.php?id=44">Media Downloads</a>
					<a href="menu.php?id=45">Previous Event</a>
					<a href="menu.php?id=46">TV</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Social Profeets</button>
				<div class="dropdown-content">
					<a href="menu.php?id=51">Lansia / Elderly</a>
					<a href="menu.php?id=52">Bedah Rumah</a>
					<a href="menu.php?id=53">Rumah Singgah</a>
					<a href="menu.php?id=54">Panti Asuhan</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Get In Touch</button>
				<div class="dropdown-content">
					<a href="menu.php?id=61">Renungan Harian</a>
					<a href="menu.php?id=62">Prayer Request</a>
					<a href="menu.php?id=63">Share A Testimony</a>
					<a href="menu.php?id=64">Contact Us</a>
					<a href="menu.php?id=65">Donation</a>
				</div>
			</div>

			<div class="dropmenu" onclick="clickSubToogle(this)">
				<button class="dropbtn">Pastoral Care</button>
				<div class="dropdown-content">
					<a href="menu.php?id=71">Pernikahan</a>
					<a href="menu.php?id=72">Kedukaan</a>
					<a href="menu.php?id=73">Kunjungan Orang Sakit</a>
					<a href="menu.php?id=74">Konseling</a>
					<a href="menu.php?id=75">Baptis</a>
				</div>
			</div>

			<div class="icon"><a class="burger" href="javascript:void(0);" onclick="clickToogle()">&#9776;</a></div>
		</div>



		





		<!-- content opening div -->
		<div class="content">
		<!-- content opening div -->