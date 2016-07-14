

<nav class="w3-sidenav  w3-animate-left" style="display:none;z-index:5" id="mySidenav" >
  <a href="#"><img src="images/logo3.png" title="agra indian cusine"></a>
  <!-- <div class="heading-after-header">
    <h3>Agra Indian Cusine</h3>
  </div> -->
 <!--  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large">Close &times;</a> -->
  <ul>
    <li><a href="#" class="w3-large"><span class="glyphicon glyphicon-list-alt" style="font-size:14px;"></span>&nbsp;&nbsp;&nbsp;Menu</a></li>
    <li><a href="#" class="w3-large"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Gallery</a></li>
    <li><a href="#" class="w3-large"><i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Testimonials</a></li>
    <li><a href="#" class="w3-large"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Dish of the month</a></li>
    <li><a href="#" class="w3-large"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Contact</a></li>
    <li><a href="#" class="w3-large"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Order</a></li>
  </ul>
</nav>

<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-container" style="padding:0px !important;">
  
  <div class="w3-xxlarge-container">
  <span class="w3-opennav " onclick="w3_open()" id="w3-xxlarge"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
</div>
<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
    document.getElementById("w3-xxlarge").style.visibility = "hidden";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
    document.getElementById("w3-xxlarge").style.visibility = "visible";
   
}
</script>

 


          
