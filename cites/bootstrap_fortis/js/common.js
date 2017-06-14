$(document).ready(function(){
	//Выравнивание блока по высоте и ширине родителя
	function initSize() {
		$(".till_item .tc").each(function(){
			var parh = $(this).parent().height();
			var parw = $(this).parent().width();
			$(this).height(parh);
			$(this).width(parw);
		});
	}
	initSize();
	//Код запускает функцию initSize при изменении размеров окна
	$(window).resize(function(){
		initSize();
	});
});



$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});
