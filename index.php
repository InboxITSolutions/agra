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
  <script type="text/javascript" src="js/lg-thumbnail.min.js"></script>
</head>
<body>
<?php
  
  include 'database/conn.php';

  function getBanner(){
  $query = mysql_query("SELECT * FROM banner LIMIT 1");

  while ($row= mysql_fetch_assoc($query)) {
    $src = $row['src'];
    ?>
    <video autoplay loop muted>
            <source src="video/<?php echo $src; ?>" type="video/mp4"/>
          </video>
    <?php
  }
}

  function getCategory(){

  $query = mysql_query("SELECT * FROM category");

  while ($row= mysql_fetch_assoc($query)) {
    $cat_name= $row['name'];
    $image_name= $row['image_name'];
    ?>
    <a href="#" data-toggle="modal" data-target="#<?php echo $cat_name; ?>">
                <div class="col-xs-12 col-md-3 col-sm-3 starters">
                  <div class="menu-icon"><img src="images/category/<?php echo $image_name; ?>"></div>
                  <div class="menu-name"><h3><?php echo $cat_name; ?></h3></div>
                </div>
              </a>
       <div id="<?php echo $cat_name; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span class="modal-title"><h2><?php echo $cat_name; ?></h2></span>
                  </div>
                  <div class="modal-body">
                    <p>Samosa</p>
                    <p>Tiika</p>
                    <p>Chaat</p>
                    <p>Pakouda</p>
                    <p>Raita</p>
                    <p>Bhajee</p>
                    <p>Lolly pop</p>
                    <p>Kabab</p>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
              </div>
            </div>

    <?php
  }
}

function getEvents(){
 $query = mysql_query("SELECT * FROM event LIMIT 4");

  while ($row= mysql_fetch_assoc($query)) {
    $name = $row['name'];
    $desc = $row['description'];
    ?>
    <div class="flip-3d col-xs-12 col-md-3 col-sm-12">
                    <figure>
                      <img src="images/events/<?php echo $name; ?>" alt>
                      <figcaption>
                        <?php echo $desc; ?>
                      </figcaption>
                    </figure>
                  </div>
    <?php
  }
}

function getTestimonial(){
 $query = mysql_query("SELECT * FROM testimonial");

  while ($row= mysql_fetch_assoc($query)) {
    $name = $row['name'];
    $comment = $row['comment'];
    $client_name = $row['client_name'];
    $position = $row['position'];
    ?>
    <div class="gallery-cell">
                <div class="testimonial">
                  <img class="testimonial-avatar" src="images/testimonial/<?php echo $name; ?>">
                  <q class="testimonial-quote"><?php echo $comment; ?></q>
                  <span class="testimonial-author"><?php echo $client_name; ?>,<?php echo $position; ?></span>
                </div>
              </div>
    <?php
  }
}



?>
  <section id="video">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="video-background">
          <?php getBanner(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include'includes/header2.php';?>
<section id="landing">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-sm-12 home">
        <img src="images/logo3.png">
        <div id="rotate" > 
                  <div>Desi Food</div> <div>Expereinced Chef</div> <div>Awesome taste</div> 
                  <div>Reasonable Price</div> 
                </div>
                <ul class="social">
                	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true" style="padding:6px 10px;"></i></a></li>
                	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                	<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
        </div>
       
   </section>

   <section id="special">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12 section2-wrapper">
          <div class="col-xs-12 col-md-5 col-sm-5 box box--origin-top">
                    <div class="origin"></div>

                      <table>
                          <tr><td class="special-heading" align="center">
                            TODAY'S <i class="fa fa-cutlery" aria-hidden="true" style="color:#fff; font-size:x-large;"></i> SPECIAL
                          </td></tr>
                          <tr><td class="special-item">Lorem Ipsum doler <i class="fa fa-angle-right " aria-hidden="true"></i></td></tr>
                          <tr><td class="special-item">Lorem Ipsum doler <i class="fa fa-angle-right " aria-hidden="true"></i></td></tr>
                          <tr><td class="special-item">Lorem Ipsum doler <i class="fa fa-angle-right " aria-hidden="true"></i></td></tr>
                          <tr><td class="special-item">Lorem Ipsum doler <i class="fa fa-angle-right " aria-hidden="true"></i> <br/></td></tr>
                        <tr><td class="special-button"><a href="#"><span>See More</span></a></td></tr>
                      </table>
            </div>  
          <div class="col-xs-12 col-md-7 col-sm-7 about-us">
            <h3 >taste the quality...</h3>
            <p> Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p> 
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
            <a href="about.php" style="text-align:center;"><button class="button" ><span>About Us </span></button></a>
          </div>
        </div>
      </div>
    </div>
   </section>
   
   <section id="menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12 menu-items">
          
          <div class="main-title">
           <div class="bg-image" style="margin-top:-36px;opacity:0.2 !important;">
              <img src="images/logo-white.png" class="header-image">
            </div>
            <h2 class="title">MENU</h2>
          </div>
             <?php getCategory(); ?>
              <div class="col-xs-12 col-md-12 col-sm-12">
            <a href="menu.php" style="text-align:center;"><button class="button" style="color:#fff; margin-top: -3%;"><span>SEE MENU</span></button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

   <section id="events">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12 events">
           <div class="main-title">
           <div class="bg-image" style="margin-top:-36px;">
              <img src="images/logo.png" class="header-image">
            </div>
            <h2 class="title">EVENTS</h2>
            </div>
              <div>
                <?php getEvents(); ?>
              </div> 
              <div class="col-xs-12 col-md-12 col-sm-12">
            <a href="event.php" style="text-align:center;"><button class="button" style="margin: 5% 0% 3% 0%;"><span>SEE EVENTS</span></button></a>
            </div>   
        </div>
      </div>
    </div>
   </section>
   <section id="tableboook">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12 book-table">
            <div class="main-title">
            <div class="bg-image" style="margin-top:-36px;opacity:0.2 !important;">
              <img src="images/logo-white.png" class="header-image" >
            </div>
            <h2 class="title" style="font-size:12.286mm !important;">BOOK A TABLE</h2>
            </div>
              <form action="#" method="post">
                <div class="col-xs-12 col-md-3 col-sm-3 col-md-offset-1 form-group-1" ><input type="text" placeholder="  &#xf007;&nbsp; Name"></div>
                <div class="col-xs-12 col-md-3 col-sm-3  form-group-1 form-group-2"> <input type="text" placeholder="  &#xf10b;&nbsp; Phone Number"></div>
                <div class="col-xs-12 col-md-3 col-sm-3  form-group-1 form-group-3"><input type="text" placeholder="  &#xf0e0;&nbsp; Email Address"></div>
                <div class="col-xs-12 col-md-3 col-sm-3 col-md-offset-1  form-group-1 form-group-4"><input type="text" placeholder="  &#xf007;&nbsp; Number of People"></div>
                <div class="col-xs-12 col-md-3 col-sm-3  form-group-1 form-group-5"><input type="text" placeholder="  &#xf073;&nbsp; Date"></div>
                <div class="col-xs-12 col-md-3 col-sm-3  form-group-1 form-group-6"><input type="text" placeholder="  &#xf017;&nbsp; Time"></div>
                <div class="col-xs-12 col-md-12 col-sm-12  form-group-1 form-group-7" style="text-align:center;">
                 <input type="submit" value="Book Now" style="margin-bottom:0px !important;"><br/><br/><br/><br/><br/>
               </div>
               </form>
            </div>
        </div>
      </div>
    </section>
   <section id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12 testimonial-custom">
           <!--  <div class="main-title">
            <div class="bg-image" style="margin-top:-36px;opacity:0.8 !important;">
              <img src="images/logo-white.png" class="header-image" >
            </div>
            <h2 class="title" style="font-size:12.286mm !important;">HAPPY CUSTOMERS</h2>
            </div> -->
            <div class="main-gallery">
              <?php getTestimonial(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--     <section id="agra-gallery">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12 gallery">
            <div class="main-title">
            <div class="bg-image" style="margin-top:-36px;opacity:0.8 !important;">
              <img src="images/logo.png" class="header-image" >
            </div>
            <h2 class="title" style="font-size:12.286mm !important;">OUR GALLERY</h2>
            </div>
            <div id="lightgallery">
              <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
              <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
              <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
              <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
              <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
              <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
               <a href="images/menu-1.jpg">
                <img src="images/menu-1.jpg" />
              </a>
              

            </div>
          </div>
        </div>
      </div>
    </section> -->
  <?php include'includes/footer.php'; ?>
</div>
<script src='js/flickity.pkgd.min.js'></script>
<script type="text/javascript">
var flkty = new Flickity('.main-gallery', {
  cellAlign: 'left',
  contain: true,
  wrapAround: true,
  prevNextButtons: false,
  autoPlay: 5000
});
</script>
<script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-slider").owlCarousel({
    items:4

  });
 
});
</script>
<script src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/lightgallery.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script src="js/lg-thumbnail.min.js"></script>
<script src="js/lg-fullscreen.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery").lightGallery({
          download:false,
          counter:false
        }); 
    });
</script>
</body>
</html>