<?php include 'part/header.php';?>



<style>
	.streamdesc{
		font-size: 13px;
		text-align: justify;
	}

	.videostream{
		position:relative;
		padding-bottom:28%;
		padding-top:30px;
		height:0;
		overflow:hidden;
	}

	.videostream iframe{
		position:absolute;
		top:20;
		left:0;
		width:100%;
		height:100%;
	}


	@media screen and (max-width: 990px) {
		.title img{
			width: 100%;
			height: auto;
		}

		.videostream{
			padding-bottom:56.25%;
			margin-bottom: 50px;
		}
	}

</style>


<div class="container">
	<div class="title"><img class="center-responsive" src="img/streamTitle.png" height="125px"></div>

	<div class="col-sm-3 streamdesc">
		<hr>
		<h4>WELCOME</h4>
		<p>
			Anda menyaksikan Live Service Gereja Bethany Malang. Isi dari materi khotbah merupakan opini pribadi dari pembicara. Gereja Bethany Malang tidak bertanggung jawab secara hukum terhadap isi atau materi yang disampaikan oleh pembicara.
		</p>
		<hr>
		<h4>REQUIREMENTS</h4>
		<p>
			Requirements: Minimum 512 Kbps ADSL (Speedy/3G) Internet. Web browser with Adobe Flash 9 or later. Click on the Video to view in Full Screen.
		</p>
		<hr>
	</div>
	<div class="col-sm-6 videostream">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/live_stream?channel=UCDbS-b_NMp5jqZw1YfAo_vA" frameborder="0" allowfullscreen="" name="search_iframe"></iframe>
	</div>
	<div class="col-sm-3 center-responsive">
		<h4>LIVE CHANNEL</h4>
		<p>
			<a href="https://www.youtube.com/embed/6jhIss__bIU" target="search_iframe">
				1. Ibadah Raya 1  <br>Sabtu, pk 17.30- 19.00<br>(Streaming)
			</a>		
		</p>

		<p>
			2. Ibadah Raya 2 <br>Minggu, pk 07.00- 08.30
		</p>

		<p>
			<a href="https://www.youtube.com/embed/E_639mf2h8A" target="search_iframe">
				3. Ibadah Raya 3 <br>Minggu, pk 09.00- 11.00<br>(Streaming)
			</a>
		</p>

		<p>
			4. Youth Service <br>Minggu, pk 12.00- 13.30<br>
		</p>

		<p>
			5. Ibadah Raya 4 <br>Minggu, pk 15.00- 16.30<br>
		</p>

		<p>
			<a href="https://www.youtube.com/embed/DklXnBlwjvE" target="search_iframe">
				6. Ibadah Raya 5 <br>Minggu, pk 16.30- 18.00<br>(Streaming)
			</a>
		</p>


	</div>

</div>




<?php include 'part/footer.php';?>