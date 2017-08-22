jQuery(function($) {
	
	//Initiat WOW JS
	new WOW().init();
	//smoothScroll
	smoothScroll.init();
	
	// Progress Bar
	$('#about-us').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$.each($('div.progress-bar'),function(){
				$(this).css('width', $(this).attr('aria-valuetransitiongoal')+'%');
			});
			$(this).unbind('inview');
		}
	});

	//Countdown
	$('#features').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$(this).find('.timer').each(function () {
				var $this = $(this);
				$({ Counter: 0 }).animate({ Counter: $this.text() }, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.text(Math.ceil(this.Counter));
					}
				});
			});
			$(this).unbind('inview');
		}
        //Swipe-Box-JavaScript
        $(".swipebox").swipebox();
        //Swipe-Box-JavaScript
	});
    
    //Some function
    $(".meter > span").each(function() {
			$(this)
			.data("origWidth", $(this).width())
			.width(0)
			.animate({
				width: $(this).data("origWidth")
			}, 1200);
		});
    //Some function
    
    
    // script-for-menu 
	$("span.menu").click(function(){
        $(".top-menu ul").slideToggle("slow" , function(){
        });
    });
    //script-for-menu
    
});

$(document).ready(function() {
 
  $("#owlPortfolio").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      URLhashListener:true,
      autoplayHoverPause:true,
      startPosition: 'section-bar-1',
      dots: false,
      nav: true
  });
    $("#reviews_carousel").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      smartSpeed : 950,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      URLhashListener:true,
      autoplayHoverPause:true,
      startPosition: 'section-bar-1',
      dots: false,
      nav: true
  });
    $("#section-bar-1").click(function(e) {
          e.preventDefault();
          $("#portfolio .tabs li").removeClass('tab-current');
          $("#section-bar-1").parent().addClass('tab-current');
        });
    //Smooth-Scrolling-JavaScript
    $(".scroll, .navbar li a").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
    //Smooth-Scrolling-JavaScript
    
    // Slide-To-Top JavaScript (No-Need-To-Change)
    var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
    // Slide-To-Top JavaScript (No-Need-To-Change)
    
    //Кнопка отправки сообщения sticky_button
    $(".sticky_button button").click(function() {
        $("#sticky_form").slideToggle("slow");
        return false;
    });
    //Кнопка отправки сообщения sticky_button
    
    //Отправка формы callback
    $("#contact_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "contact-form.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо! Скоро мы с вами свяжемся.");
			$("#contact_form").trigger("reset");
		});
		return false;
	});
    $("#banner_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо! Скоро мы с вами свяжемся.");
			$("#banner_form").trigger("reset");
		});
		return false;
	});
    $("#callback_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "callback.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо! Скоро мы с вами свяжемся.");
			$("#callback_form").trigger("reset");
		});
		return false;
	});
    $("#sticky_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "callback.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо! Скоро мы с вами свяжемся.");
			$("#sticky_form").trigger("reset");
		});
		return false;
	});
    //Отправка формы callback
});

new CBPFWTabs( document.getElementById( 'tabs' ) );