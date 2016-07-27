<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" href="images/fav.png" type="image/x-icon"> -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/textrotator.js"></script>
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/responsive-500px.css">
  <link rel="stylesheet" type="text/css" href="css/responsive-800px.css">
  <link rel="stylesheet" href="css/w3.css">
  <script type="text/javascript" src="js/testimonial.js"></script>
  <link rel='stylesheet prefetch' href='css/flickity.css'>
  <!--<script type="text/javascript" src="js/navcolorchange.js"></script>-->
  
  <title>Gallery</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
		<link rel="stylesheet" href="./dist/css/material-photo-gallery.css">
		<link rel="stylesheet" type="text/css" href="css/gallery.css">
		<script src="./dist/js/material-photo-gallery.js"></script>
</head>
	<body>
		<?php include'includes/header2.php';?>
		<div class="gallery_content">
		<div class="main-title">
           <div class="bg-image" style="margin-top:-36px;">
              <img src="images/logo.png" class="header-image">
            </div>
            <h2 class="title">GALLERY</h2>
        </div>
		<div class="m-p-g">
			<div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
				<img src="http://unsplash.it/600/400?image=940" data-full="http://unsplash.it/1200/800?image=940" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/640/450?image=906" data-full="http://unsplash.it/1280/900?image=906" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/550/420?image=885" data-full="http://unsplash.it/1100/840?image=885" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/650/450?image=823" data-full="http://unsplash.it/1300/900?image=823" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/600/350?image=815" data-full="http://unsplash.it/1200/700?image=815" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/560/500?image=677" data-full="http://unsplash.it/1120/1000?image=677" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/670/410?image=401" data-full="http://unsplash.it/1340/820?image=401" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/620/340?image=623" data-full="http://unsplash.it/1240/680?image=623" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/790/390?image=339" data-full="http://unsplash.it/1580/780?image=339" class="m-p-g__thumbs-img" />
			</div>

			<div class="m-p-g__fullscreen"></div>
		</div>

		</div>
		<div class="col-xs-12 col-md-12 col-sm-12" style="padding:2em;"></div>
		<?php include'includes/footer.php'; ?>
		<script>
			var elem = document.querySelector('.m-p-g');

			document.addEventListener('DOMContentLoaded', function() {
				var gallery = new MaterialPhotoGallery(elem);
			});
		</script>
	</body>
</html>