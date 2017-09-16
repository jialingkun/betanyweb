<?php include 'part/header.php';?>

<?php 
switch ($_GET["id"]) {
	case 12:
	$title = "Our Senior Pastor";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 13:
	$title = "Mission and Beliefs";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 14:
	$title = "Latest Announcement";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 15:
	$title = "Special Notices";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;


	case 21:
	$title = "Ibadah Raya";
	$image = "ibadahRaya.png";
	$desc = "";
	break;
	case 22:
	$title = "Doa Malam";
	$image = "doaMalam.jpg";
	$desc = "";
	break;


	case 31:
	$title = "Family Altar";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 32:
	$title = "Upcoming Event";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 33:
	$title = "Bible Study Academy";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 34:
	$title = "Menara Doa";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 35:
	$title = "Plan A Visit";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 36:
	$title = "Youth Movement";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 37:
	$title = "Child Church";
	$image = "childChurch.jpg";
	$desc = "";
	break;
	case 38:
	$title = "WBI";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 39:
	$title = "ManHood";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 310:
	$title = "ProM";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;


	case 42:
	$title = "My News";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 43:
	$title = "Radio";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 44:
	$title = "Media Downloads";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 45:
	$title = "Previous Event";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 46:
	$title = "TV";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;


	case 51:
	$title = "Lansia / Elderly";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 52:
	$title = "Bedah Rumah";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 53:
	$title = "Rumah Singgah";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 54:
	$title = "Panti Asuhan";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;


	case 61:
	$title = "Renungan Harian";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 62:
	$title = "Prayer Request";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 63:
	$title = "Share A Testimony";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 64:
	$title = "Contact Us";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;
	case 65:
	$title = "Donation";
	$image = "comingSoon.jpg";
	$desc = "Untuk sementara, halaman web ini belum tersedia.";
	break;

	case 71:
	$title = "Pernikahan";
	$image = "pastoralCare.jpg";
	$desc = "";
	break;
	case 72:
	$title = "Kedukaan";
	$image = "pastoralCare.jpg";
	$desc = "";
	break;
	case 73:
	$title = "Kunjungan Orang Sakit";
	$image = "pastoralCare.jpg";
	$desc = "";
	break;
	case 74:
	$title = "Konseling";
	$image = "pastoralCare.jpg";
	$desc = "";
	break;
	case 75:
	$title = "Baptis";
	$image = "pastoralCare.jpg";
	$desc = "";
	break;

	default:
	$title = "Page Not Found";
	$image = "slider2.jpg";
	$desc = "";
	break;
}



?>

<div class="center">
	<img class="menu-img" src= <?php echo "\"img/".$image."\"" ?>>
</div>
<div class="container container-menu">
	<div class="title center-responsive">
		<h1><?php echo $title ?></h1>
	</div>
	<div class="desc">
		<p>
			<?php echo $desc ?>
		</p>
	</div>

	

</div>




<?php include 'part/footer.php';?>