<?php
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* Ваш адрес и тема сообщения */
$to = "apps-web@yandex.ru";
$sub = "Сообщение с сайта apps-web.ru";
 
/* Формат письма */
$msg = "Сообщение с сайта apps-web.ru \n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Телефон отправителя: $phone
Текст сообщения:
$message";
 

 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";

$header .="Content-Type: text\html; charset = utf-8 \r\n"; 
$header .="From: Admin <$from> \r\n";

if (mail($to, $sub, $msg, $from)) {
	header("Refresh: 5; URL=http://apps-web.ru");
	echo  
	"	
<!-- HTML Document -->
<!DOCTYPE html>
<html>
<head>
<title>AppsWEB | Главная страница</title>
<!-- For-Mobile-Apps -->
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta name='keywords' content='appsweb, apps-web, создание сайтов, разработка сайтов, создание мобильных приложений, разработка мобильных приложений, лицензии 1С битрикс, создание сайтов в Комсомольске-на-Амуре, разработка сайтов в Комсомольске-на-Амуре, создание мобильных приложений в Комсомольске-на-Амуре, разработка мобильных приложений в Комсомольске-на-Амуре' />
	<script type='application/x-javascript'> addEventListener('load', function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Custom-Theme-Files -->
	<!-- Bootstrap-Core-CSS --> <link href='css/bootstrap.min.css' rel='stylesheet'>
	<!-- Style.CSS --> <link href='css/style.css' rel='stylesheet' type='text/css' media='all' />
	<!-- Owl-Carousel-CSS --> <link href='css/owl.carousel.css' rel='stylesheet'>
	<!-- Swipe-Box-CSS --> <link rel='stylesheet' href='css/swipebox.css'>
	<!-- Animate-CSS --> <link href='css/animate.min.css' rel='stylesheet'>
<!-- //Custom-Theme-Files -->
<script>
	$(function() {
		$('.meter > span').each(function() {
			$(this)
			.data('origWidth', $(this).width())
			.width(0)
			.animate({
				width: $(this).data('origWidth')
			}, 1200);
		});
	});
</script>
<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->
</head>

<body>
<!-- Header -->
<div class='banner'>
	 <div class='container'>
		 <div class='header'>	 
			 <div class='logo wow fadeInLeft' data-wow-delay='0.5s'>
			 <a href='index.html'><img src='images/logo_aw.png' alt=''/></a>
			 </div>	
			 <div class='top-menu'>
				 <span class='menu'></span> 
				 <ul>
					 <li><a class='scroll' href='#about'>О нас</a></li>
					 <li><a class='scroll' href='#features'>Услуги</a></li>
					 <li><a class='scroll' href='#portfolio'>Портфолио</a></li>
					 <li><a class='scroll' href='#prise'>Тарифы</a></li>
					 <li><a class='scroll' href='#contact'>Контакты</a></li>
				 </ul>
			 </div>
			 <div class='clearfix'></div>
			 <!-- script-for-menu -->
		 <script>					
					$('span.menu').click(function(){
						$('.top-menu ul').slideToggle('slow' , function(){
						});
					});
		 </script>
		 <!-- script-for-menu -->			 
		 </div>
		 <div class='banner-text wow fadeInUp' data-wow-delay='0.5s'>
			 <h1>ЛУЧШЕЕ <span>IT-РЕШЕНИЕ</span> ДЛЯ ВАШЕГО <span>БИЗНЕСА</span></h1>
			 <h2>ДИЗАЙН И РАЗРАБОТКА ИНФОРМАЦИОННЫХ ПРОЕКТОВ НА ЗАКАЗ</h2>
		 </div>
		 <div class='banner-form'>
			 <form action='mail.php' method='post'>
				 <input class='wow fadeInRight' data-wow-delay='0.5s' type='text' name='name' placeholder='Имя' required/>
				 <input class='wow fadeInRight' data-wow-delay='0.5s' type='text' name='email' placeholder='E-mail' required/>
				 <input class='wow fadeInLeft' data-wow-delay='0.5s' type='text' name='phone' placeholder='Телефон' required/>
				 <input class='wow fadeInLeft' data-wow-delay='0.5s' type='text' name='bezspama' style='display:none' value='' />
				 <input class='wow fadeInLeft' data-wow-delay='0.5s' type='submit' value='Оценить проект'/>
			 </form> 
			 
			 <div class='register'>
			 <span></span>
			 <h3 class='wow bounceInRight' data-wow-delay='0.5s'>Воспользуйтесь формой <br/>обратной связи</h3>		 
		     </div>	
			 <div class='clearfix'></div>
		 </div>		 
	 </div>
</div>
<!-- //Header -->
	
	<!-- Content -->
	<div class='content'>

		<!-- Features -->
		<div class='features' id='features'>
			<div class='container'>
		

	<h1>Спасибо! Ваше сообщение отправлено!</h1></br></br>
	<!--<a href='index.html' class='icon icon-box'><h4 align ='center' color='#006db7'>На главную</h4></a>-->
	
	
	
	

</div>
		</div>
		<!-- //Features -->
	</div>
<!-- //Content -->
<!-- Footer -->
	<div class='footer'>
		<div class='container'>

			<div class='footer-info slideanim'>
				<div class='col-md-3 col-sm-3 footer-info-grid links'>
					<h4>МЕНЮ</h4>
					<ul>
						<li><a href='#about'>О нас</a></li>
						<li><a href='#features'>Услуги</a></li>
						<li><a href='#portfolio'>Портфолио</a></li>
						<li><a href='#prise'>Тарифы</a></li>
						<li><a href='#contact'>Контакты</a></li>	
						
					</ul>
				</div>
				<div class='col-md-3 col-sm-3 footer-info-grid services'>
					<h4>УСЛУГИ</h4>
					<ul>
						<li>Разработка сайтов</li>
						<li>Сопровождение сайтов</li>
						<li>Продвижение сайтов</li>
						<li>Разработка приложений</li>
						<li>Интеграция с 1С</li>
					</ul>
				</div>
				<div class='col-md-3 col-sm-3 footer-info-grid address'>
					<h4>КОНТАКТЫ</h4>
					<address>
						<ul>
							<li>ул. Руднева, 35</li>
							<li>г.Хабаровск</li>
							<li>Россия</li>
							<li>Телефон: +7 (924) 115-8813</li>
						</ul>
						<p>Email: <a class='mail' href='mailto:apps-web@yandex.ru'>apps-web@yandex.ru</a></p>
					</address>
				</div>
				<div class='col-md-3 col-sm-3 footer-info-grid'>
					<h4>МЫ В СОЦСЕТЯХ</h4>
					<p>Вступайте в наши группы и сообщества, чтобы быть в курсе всех новостей</p>

						<ul class='social-icons slideanim'>
							<li><a href='https://vk.com/appsweb' class='vk' title='Go to Our VK Page'></a></li>
							<li><a href='https://ok.ru/' class='ok' title='Go to Our Google Plus Account'></a></li>
							<li><a href='https://instagram.com/' class='instagram' title='Go to Our Instagram Account'></a></li>
							<li><a href='http://www.youtube.com/' class='youtube' title='Go to Our Youtube Channel'></a></li>
						</ul>
				</div>
				<div class='clearfix'></div>
			</div>

			<div class='copyright slideanim'>
				<p>&copy; 2016. Все права защищены | <a href='http://apps-web.ru/'>AppsWEB</a></p>
			</div>

		</div> 
	</div>
	<!-- //Footer -->

<!-- Custom-JavaScript-File-Links -->
	<!-- Supportive-JavaScript --> <script type='text/javascript' src='js/jquery.min.js'></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap --> <script type='text/javascript' src='js/bootstrap.min.js'></script>

	<!-- Slideanim-JavaScript -->
	<script type='text/javascript'>
		$(window).scroll(function() {
	 		$('.slideanim').each(function(){
				var pos = $(this).offset().top;
				var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
					$(this).addClass('slide');
				}
			});
		});
	</script>
	<!-- //Slideanim-JavaScript -->

	<!-- Gallery-Tab-JavaScript -->
	<script src='js/cbpFWTabs.js'></script>
	<script>
		(function() {
			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});
		})();
	</script>
	<!-- //Gallery-Tab-JavaScript -->

	<!-- Swipe-Box-JavaScript -->
		<script src='js/jquery.swipebox.min.js'></script> 
			<script type='text/javascript'>
				jQuery(function($) {
					$('.swipebox').swipebox();
				});
		</script>
	<!-- //Swipe-Box-JavaScript -->

	<!-- Owl-Carousel-JavaScript -->
	<script src='js/owl.carousel.js'></script>
	<script>
		$(document).ready(function() {
			$('#owl-demo').owlCarousel ({
				items : 8,
				lazyLoad : true,
				autoPlay : true,
				speed: 900,
				pagination : false,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->

	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type='text/javascript'>
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href='#' id='toTop' style='display: block;'> <span id='toTopHover' style='opacity: 0;'> </span></a>
	<!-- //Slide-To-Top JavaScript -->

	<!-- Smooth-Scrolling-JavaScript -->
	<script type='text/javascript' src='js/move-top.js'></script>
	<script type='text/javascript' src='js/easing.js'></script>
	<script type='text/javascript'>
			jQuery(document).ready(function($) {
				$('.scroll, .navbar li a, .footer li a').click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->

	<!-- Prise-Animation-JavaScript -->
	<script type='text/javascript' src='js/jquery.inview.min.js'></script>
	<script type='text/javascript' src='js/wow.min.js'></script>
	<script type='text/javascript' src='js/mousescroll.js'></script>
	<script type='text/javascript' src='js/main.js'></script>
	<!-- //Prise-Animation-JavaScript -->

	<script type='text/javascript' src='js/numscroller-1.0.js'></script>

<!-- //Custom-JavaScript-File-Links -->

</body>
</html>

";}
else {
	header('Refresh: 5; URL=http://apps-web.ru');
	echo 
    "
	<h1>Спасибо! Ваше сообщение отправлено!</h1></br>
	<a href='index.html' class='icon icon-box'><h4 align ='center' color='#006db7'>На главную</h4></a>
";}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>