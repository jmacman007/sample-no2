(function($) {

    "use strict";

    $(document).ready(function() {


    // function getBaseUrl() {
    //   return document.location.hostname;
    // }
    // // Site URL Variable - UPDATE FROM HTTP TO HTTPS FROM SUBDOMAIN TO LIVE
    // //var homeURL = "https://" + getBaseUrl();
    // var homeURL = "http://" + getBaseUrl();


    //Nav Fixed on Scroll
    if ($("#top").length) {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1) {
                $('#top').addClass("sticky");
            } else {
                $('#top').removeClass("sticky");
            }
        });
    };

    // badge hover behavior
    $(".graphicsBadge, .webBadge").mouseenter(function(){
        $(this).css({"filter":"grayscale(0)","-webkit-filter":"grayscale(0)","maxWidth":"62%"});
        $(this).addClass("animated wobble infinite");
    });
    $(".graphicsBadge, .webBadge").mouseleave(function(){
        $(this).css({"filter":"grayscale(1)","-webkit-filter":"grayscale(1)","maxWidth":"52%"});
        $(this).removeClass("animated wobble infinite");
    });

    // logo hover behavior
    $(".myLogo").mouseenter(function(){
        $(this).removeClass("bounceInUp").addClass("rollIn");
    });

    //Masking Phones
    $("#phone").mask("(999) 999-9999");

    //Soft Scroll Menu Items to Anchor Tags
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    	  var target = $(this.hash);
    	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    	  if (target.length) {
    		$('html, body').animate({
    		  scrollTop: target.offset().top - 80
    		}, 650);
    		return false;
    	  }
    	}
      });
    });

    //logo img swap on hover
    $(".topLogo").hover(function() {
        $( '#jmaclogo' ).attr("src","http://localhost/jmacman/wp-content/themes/base/dist/img/jmacman\-logo2.png");
        $('.site-name').css("color","rgba(252, 170, 103, 1)");
    }, function() {
        $( '#jmaclogo' ).attr("src","http://localhost/jmacman/wp-content/themes/base/dist/img/jmacman\-logo.png");
        $('.site-name').css("color","#FFFFFF");
    });

    }); //end on Document Ready

}(jQuery));
