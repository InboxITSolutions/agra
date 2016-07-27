<!DOCTYPE html>
<html>
<head>
  <title>Agra Indian Cusine</title>
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
  <link type="text/css" rel="stylesheet" href="css/lightgallery.css" /> 
  <script type="text/javascript" src="js/hovereffect.js"></script>
</head>

<body >
  <?php include'includes/header2.php';?>
  	<div class="col-xs-12 col-md-12 col-sm-12 about">
      <div class="main-title">
            <div class="bg-image" style="margin-top:-36px; opacity:0.2 !important;">
              <img src="images/logo.png" class="header-image">
            </div>
            <h2 class="title">EVENTS</h2>
      </div>
  		<div class="col-xs-12 col-md-12 col-sm-12 show-hide">
  			<button class="show-recent activeabout">RECENT</button>
        <button class="show-upcomming">UPCOMMING</button>
  		</div>
  		<div class="col-xs-12 col-md-12 col-sm-12 recent">

      	<div class="col-xs-12 col-md-12 col-sm-12 program">
          <div class="col-xs-12 col-md-4 col-sm-4 poster">
            <img src="images/music.jpg" alt="music poster">
          </div>
          <div class="col-xs-12 col-md-8 col-sm-8 description">
            <h3 class="heading">Music Mantra</h3>
            <p>Every SATURDAY | MONDAY | THRUSDAY | FRIDAY</p>
            <time>5:00 PM to 9:00 PM</time>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12 program">
          <div class="col-xs-12 col-md-4 col-sm-4 poster">
            <img src="images/sanjeev.jpeg" alt="sanjeev kapoor">
          </div>
          <div class="col-xs-12 col-md-8 col-sm-8 description">
            <h3 class="heading">Sanjeev kapoor's Special</h3>
            <p>Star chef comming this month. Special food with special guest.</p>
            <time>AUGUST-10- 2016 // 11:00 AM ONWARDS </time>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12 program">
          <div class="col-xs-12 col-md-4 col-sm-4 poster">
            <img src="images/hour.jpg" alt="happy hour">
          </div>
          <div class="col-xs-12 col-md-8 col-sm-8 description">
            <h3 class="heading">happy hour</h3>
            <p>lucky table with surprising gifts</p>
            <p>buy '2 plate' and get special gifts</p>
            <time>EVERYDAY // 3:00 PM TO 5:00 PM </time>
          </div>
        </div>

  		</div>
  		<div class="col-xs-12 col-md-12 col-sm-12 upcomming" style="display:none;">      
        <div class="col-xs-12 col-md-12 col-sm-12 program">
          <div class="col-xs-12 col-md-4 col-sm-4 poster">
            <img src="images/night.jpg" alt="night">
          </div>
          <div class="col-xs-12 col-md-8 col-sm-8 description">
            <h3 class="heading">celebrate with us</h3>
            <p>Star chef comming this month. Special food with special guest.</p>
            <time>november-10- 2016 // 11:00 AM ONWARDS </time>
          </div>
        </div>
      </div>
  	</div>
  	<?php include'includes/footer.php';?>

<script type="text/javascript">
$(document).ready(function(){
 $(".show-recent").click(function(){
 	$(".recent").show(1);
 	$(".upcomming").hide(1);
  jQuery(".show-recent").addClass("activeabout");
  jQuery(".show-upcomming").removeClass("activeabout");
 });

 $(".show-upcomming").click(function(){
 	$(".upcomming").show(1);
 	$(".recent").hide(1);
  jQuery(".show-upcomming").addClass("activeabout");
  jQuery(".show-recent").removeClass("activeabout");
 });
});
</script>

</body>
</html>