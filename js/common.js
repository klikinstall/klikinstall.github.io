$(document).ready(function() {

	//Анимация плиток в блоке "Резюме"
	$('#portfolio_grid').mixItUp();
	//Анимация при клике на элементы списка в блоке "Портфолио"
	$(".s_portfolio li").click(function(){
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});
//Окошки, всплывающие при нажатии
	$('.popup').magnificPopup({type:'image'});
	$('.popup_content').magnificPopup({type:'inline'});
//Анимация имени и заголовков секций
	$('.top_text h1').animated("fadeInDown","fadeOutUp");
	$('.top_text p, .section_header').animated("fadeInUp","fadeOutDown");
//Анимация параграфов и фотки
	$('.animation_1').animated("flipInY","flipOutY");
	$('.animation_2').animated("fadeInLeft","fadeOutLeft");
	$('.animation_3').animated("fadeInRight","fadeOutRight");
	//Анимация блоков резюме
	$(".left .resume_item").animated("fadeInLeft","fadeOutLeft");
	$('.right .resume_item').animated("fadeInRight","fadeOutRight");
//Подгонка бэкграунда под высоту окна
	function heightDetect(){
		$(".main_head").css("height",$(window).height());
	};
	heightDetect();
	$(window).resize(function(){
		heightDetect();
	});
/*Анимация крестика*/
	$(".toggle_mnu").click(function() {
		$(".sandwich").toggleClass("active");
	});
//
	$(".top_mnu li a").click(function(){
		$(".top_mnu").fadeOut(600);
		$(".sandwich").toggleClass("active");
	}).append("<span>");
//Всплывающее меню при нажатии на сэндвич
	$(".toggle_mnu").click(function() {
		if ($(".top_mnu").is(":visible")){
			$(".top_text").removeClass("h_opacity");
			$(".top_mnu").fadeOut(600);
			$(".top_mnu li a").removeClass("fadeInUp animated");
		}
		else {
			$(".top_text").addClass("h_opacity");
			$(".top_mnu").fadeIn(600);
			$(".top_mnu li a").addClass("fadeInUp animated");
		};
	});
	//Присвоение айди плиткам в блоке "Портфолио"
	$(".portfolio_item").each(function(i){
		$(this).find("a").attr("href","#work_"+i);
		$(this).find(".port_descr").attr("id","work_"+i);
	});
	//Валидация форм
	$("input,select,textarea").jqBootstrapValidation();
	//Плавный скролл по странице
	$(".top_mnu ul a").mPageScroll2id();
});
	//Загрузочный экран
$(window).load(function() {
	$(".loaderInner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
});
