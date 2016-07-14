 <section id="footer" >
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12 footer" >
            
            <div class="col-xs-12 col-md-3 col-sm-3 col-md-offset-1 foot-left">
              <div class="heading-after">
                <h3>Quick links</h3>
              </div>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Order</a></li>
                </ul>

                
          </div>
          <div class="col-xs-12 col-md-3 col-sm-3 foot-center" style="margin-left: 60px !important;">
            
            <a id="back-to-top" href="#" role="button" ><div class="triangle-up"></div></a>
            <div class="heading-after">
                <h3 style="margin-top:15px;">Working Hours</h3>
              </div>
              <p>Mon-Fri: 7.00AM to 11.30PM</p>
              <p>Saturday: 8.00AM to 12.00PM</p>
              <p>Sunday: CLOSED</p>
            </div>
          <div class="col-xs-12 col-md-4 col-sm-4 foot-right">
              <img src="images/logo-white.png">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12 foot-bottom">
          <p class="pull-left">&copy; copyright 2016 Agra Indian Cusine.</p>
          <p class="pull-left">developed by <a href="#">Inbox</a></p>
          <div class="foot-social pull-right">
            <ul>
              <li><a href="#" style="padding:4px 6px 5px 6px;"><i class="fa fa-facebook" aria-hidden="true" style="padding: 0.2em;"></i></a></li>
              <li><a href="#" style="padding:4px 6px 5px 6px;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" style="padding:3px 6px 4px  7px;"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#" style="padding:5px 4px 5px 6px;"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
         
          
        </div>
      </div>
    </div>

   </section>
  <script type="text/javascript">
  $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
  </script>