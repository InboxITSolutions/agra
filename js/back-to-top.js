 $(document).ready(function() {
	$(window).scroll(function(event){
         var Position= $(this).scrollTop();
            //alert( Position);
		
            $(".go-top").fadeIn(200);
         
     });

	$(".go-top").click(function(event){
		event.preventDefault();

		$('html,body').animate({scrollTop:0},300);
	});
    
    });