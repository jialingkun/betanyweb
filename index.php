<?php include 'part/header.php';?>

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
<div class="responsive-timer">
	<div class="timer-wrapper center">
		<h5 id="timerLabel">Watch Our Live Services In</h5>
		<div id="days">0 <br>days</div>
		<div id="hours">11 <br>hours</div>
		<div id="mins">28 <br>mins</div>
		<div id="secs">19 <br>secs</div>
		<a href="stream.php" id="streaming" class="hide"><button type="button" class="btn btn-danger">WATCH NOW!</button></a>
		<a href=" https://www.youtube.com/channel/UCDbS-b_NMp5jqZw1YfAo_vA"><button type="button" class="btn btn-primary">PREVIOUS BROADCASTS</button></a>
	</div>
</div>
<script>
	var dueDays = [];
	var dueHours = [];
	var dueMinutes = [];
	var dueTotalSeconds = [];
	var endHours = [];
	var endMinutes = [];
	var endTotalSeconds = [];

	//date 1
	dueDays[0] = 6; //0 Sunday, 1 Monday, 2 Tuesday ,......, 6 Saturday
	//17:30
	dueHours[0] = 17; //24 Hour format, ex 1 pm = 13
	dueMinutes[0] = 30;
	//19:00
	endHours[0] = 19;
	endMinutes[0] = 0;

	//date 2
	dueDays[1] = 0; // 0 Sunday

	dueHours[1] = 9;
	dueMinutes[1] = 0;

	endHours[1] = 11;
	endMinutes[1] = 0;

	//date 3
	dueDays[2] = 0; // 0 Sunday

	dueHours[2] = 16;
	dueMinutes[2] = 30;

	endHours[2] = 18;
	endMinutes[2] = 30;

	// get today date
	var nowDate = new Date();
	var nowTotalSeconds;

	var duetimesdiff = [];
	var endtimesdiff = [];

	var duedaysdiff = [];
	var enddaysdiff = [];

	var nearestDueDay;
	var nearestEndDay;
	var nearestDay;
	var nearestDueTime;
	var nearestEndTime;

	var secTime;
	var ticker;

	getSeconds();
	

	function getSeconds(){
		nowTotalSeconds = (nowDate.getHours()*60*60)+(nowDate.getMinutes()*60)+nowDate.getSeconds();

		for(i=0;i<dueDays.length;i++){
			//find different between today date time and due date time
			dueTotalSeconds[i] = (dueHours[i]*60*60)+(dueMinutes[i]*60);
			duetimesdiff[i] = dueTotalSeconds[i]-nowTotalSeconds;
			if (duetimesdiff[i]>0) {
				duedaysdiff[i] = dueDays[i] - nowDate.getDay();
			}else{
				duedaysdiff[i] = dueDays[i] - nowDate.getDay()-1;
			}
			if (duedaysdiff[i]<0) {
				duedaysdiff[i] += 7;
			}
			if (duetimesdiff[i] <= 0) { 
				duetimesdiff[i] += (24*60*60);
			}

			//find different between today date time and end date time
			endTotalSeconds[i] = (endHours[i]*60*60)+(endMinutes[i]*60);
			endtimesdiff[i] = endTotalSeconds[i]-nowTotalSeconds;
			if (endtimesdiff[i]>0) {
				enddaysdiff[i] = dueDays[i] - nowDate.getDay();
			}else{
				enddaysdiff[i] = dueDays[i] - nowDate.getDay()-1;
			}
			if (enddaysdiff[i]<0) {
				enddaysdiff[i] += 7;
			}
			if (endtimesdiff[i] <= 0) { 
				endtimesdiff[i] += (24*60*60);
			}
		}

		nearestDueDay = Math.min.apply(Math, duedaysdiff);
		nearestEndDay = Math.min.apply(Math, enddaysdiff);

		if (nearestDueDay<nearestEndDay) {
			nearestDay = nearestDueDay;
		}else{
			nearestDay = nearestEndDay;
		}

		var tempDueTimes = [];
		var tempEndTimes = [];
		for(i=0;i<duedaysdiff.length;i++){
			if (duedaysdiff[i] <= nearestDay) {
				tempDueTimes.push(duetimesdiff[i]);
			}
		}

		for(i=0;i<enddaysdiff.length;i++){
			if (enddaysdiff[i] <= nearestDay) {
				tempEndTimes.push(endtimesdiff[i]);
			}
		}

		nearestDueTime = Math.min.apply(Math, tempDueTimes);
		nearestEndTime = Math.min.apply(Math, tempEndTimes);

		if (nearestDueTime<nearestEndTime) {
			startTimer(false,nearestDueTime);
		}else{
			startTimer(true,nearestEndTime);
		}


		// console.log(Math.floor(nearestDueTime / (60 * 60)));
		// console.log(Math.floor(nearestEndTime / (60 * 60)));
	}


	function startTimer(isLive,secs){
		if (isLive == true) {
			document.getElementById("timerLabel").innerHTML = "We Are Now Live Streaming! <br> End In:";
			document.getElementById("streaming").className = "";
		}else{
			document.getElementById("timerLabel").innerHTML = "Watch Our Live Services In";
			document.getElementById("streaming").className = "hide";
		}
		secTime = parseInt(secs);
		ticker = setInterval("tick()",1000);
		tick();
	}

	function tick() {
		var secs = secTime;
		if (secs>0) {
			secTime--;
		}
		else {
			clearInterval(ticker);
			getSeconds();
		}

		var hours= Math.floor(secs/3600);
		secs %= 3600;
		var mins = Math.floor(secs/60);
		secs %= 60;

 		//update the time display
 		document.getElementById("days").innerHTML = nearestDay + "<br>days";
 		document.getElementById("hours").innerHTML =hours + "<br>hours";
 		document.getElementById("mins").innerHTML = mins + "<br>mins";
 		document.getElementById("secs").innerHTML = secs + "<br>secs";
 	}


 </script>


 <?php include 'part/footer.php';?>