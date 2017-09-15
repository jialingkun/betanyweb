<?php include 'part/header.php';?>

<div class="container">
<div class="title center-responsive">
	<h1><?php echo $_GET["title"] ?></h1>
</div>

	<div class="center">
	<img src= <?php echo "\"img/".$_GET["image"]."\"" ?>  width="70%">
	</div>

</div>




<?php include 'part/footer.php';?>