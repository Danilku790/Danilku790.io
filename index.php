<!--====================
	Разработчик Смагин Константин - vk.com/tg_bu77h34d
	Группа разработчика - vk.com/westerndev
	Дизайнер Никита Бундаев - vk.com/nik_richo
	Группа дизайнера - vk.com/planetdesigner
	Для Ubuntu RP
=====================-->
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Unusual RP</title>
	<link rel="icon" href="favicon/favicon.ico"; type="image/x-icon" /> <!-- Картинка находится по пути %корень сайта%/favicon/ -->
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="wow-animation/animate.min.css">
	<script type='text/javascript' src='jquery-3.2.1.min.js'></script>
	<script type='text/javascript' src='js.js'></script>
	<script src="wow-animation/wow.min.js"></script>
	<script>
    	new WOW().init();
	</script>
</head>
<body>
	<header>
		<?php include_once "header.php" ?>
		<div class="container">
			<img src="images/logo.png" alt="" id="HeadTitle">
			<p id="HeadP">Погрузись в уникальный мир,</br>узнай SAMP с новой стороны</p>
			<nav class="BtnMenu">
				<ul class="BtnMenuUL">
					<li>
						<a href="">
							<div class="button" id="AboutProject">
								<span>О проекте</span>
							</div>
						</a>
					</li>
					<li>
						<a href="#GoServersList" class="Scroll">
							<div class="button" id="ServerList">
								<span>Список серверов</span>
							</div>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="WhyUnusual">
		<div class="container">
			<h2 class="TitleH2">Почему именно Unusual?</h2>
			<div class="WhyUnusualBlock">
				<div class="WhyUnusualSubblock wow rotateInDownLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" data-wow-offset="120">
					<img src="images/diamond_1.png" alt="">
					<p class="">Уникальный мод, интересные системы</p>
				</div>
				<div class="WhyUnusualSubblock wow rotateInDownLeft" data-wow-duration="0.5s" data-wow-delay="1s" data-wow-offset="120">
					<img src="images/settings_1.png" alt="">
					<p class="">Частые обновления и новвоведения</p>
				</div>
				<div class="WhyUnusualSubblock wow rotateInDownLeft" data-wow-duration="0.5s" data-wow-delay="1.5s" data-wow-offset="120">
					<img src="images/rocket-ship_1.png" alt="">
					<p class="">Быстрая поддержка от администраторов</p>
				</div>
				<div class="WhyUnusualSubblock wow rotateInDownLeft" data-wow-duration="0.5s" data-wow-delay="2s" data-wow-offset="120">
					<img src="images/game-controller_1.png" alt="">
					<p class="">Придерживание Role PLay режима</p>
				</div>
			</div>
		</div>
	</section>
	<section class="Servers" id="GoServersList">
		<div class="container">
			<h2 class="TitleServers">Зайди и оцени сам!</h2>
			<div class="SrvMenu">
				<ul class="SrvMenuUL">
					<li>
						<div class="ServerInfo wow bounceIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="120">
							<script type='text/javascript' src='http://samp-stats.ru/web/api-7040.js'></script>
							<h2 class="HostName"><script type='text/javascript'>document.write(api.hostname);</script></h2>
							<div class="OnlineLine">
							<script type='text/javascript'>
								var p = 220/api.maxplayers*api.players;
								document.write('<div style="width:' + p + 'px' + '"></div>');
							</script>
							</div>
							<script type='text/javascript'>document.write('<p class="PlayersOnline">' + api.players + '/' + api.maxplayers + '</p>');</script>
							<a href=""><div class="BtnConnect wow tada" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="120"></div></a>
						</div>
					</li>
					<li>
						<div class="ServerInfo wow bounceIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="120">
							<script type='text/javascript' src='http://samp-stats.ru/web/api-3430.js'></script>
							<h2 class="HostName"><script type='text/javascript'>document.write(api.hostname);</script></h2>
							<div class="OnlineLine">
							<script type='text/javascript'>
								var p = 220/api.maxplayers*api.players;
								document.write('<div style="width:' + p + 'px' + '"></div>');
							</script>
							</div>
							<script type='text/javascript'>document.write('<p class="PlayersOnline">' + api.players + '/' + api.maxplayers + '</p>');</script>
							<a href=""><div class="BtnConnect wow tada" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="120"></div></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="HowStartPlay">
		<h2 class="TitleH2">Как начать играть?</h2>
		<div class="HowPlayMenu">
			<ul class="HowPlayMenuUL">
				<li>
					<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="120" id="Play1">
						<a href=""><img src="images/download_1.png" alt="" class="LinkBtn"></a>
					</div>
				</li>
				<li>
					<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="120" id="Play2">
						<a href=""><img src="images/download_1.png" alt="" class="LinkBtn"></a>
					</div>
				</li>
				<li>
					<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s" data-wow-offset="120" id="Play3">
						<a href=""><img src="images/play-button_2.png" alt="" class="LinkBtn"></a>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<?php include_once "social.php" ?>
	<?php include_once "footer.php" ?>
	<style type="text/css">
		#Preloader>p{
			display:none;
		}
		#Preloader_preload{
			display: block;
			position: fixed;
			z-index: 99999;
			top: 0;left: 0;
			width: 100%;
			height: 100%;
			min-width: 1000px;
			background: #5b81ec url(http://hello-site.ru//main/images/preloads/rings.svg) center center no-repeat;
			background-size: 100px;
		}
	</style>
	<div id="Preloader">
		<div id="Preloader_preload">
		</div>
	</div>
	<script type="text/javascript">
	var hellopreloader = document.getElementById("Preloader_preload");
	function fadeOutnojquery(el){
		el.style.opacity = 1;
		var interhellopreloader = setInterval(function(){
			el.style.opacity = el.style.opacity - 0.05;
			if (el.style.opacity <= 0.05){ 
				clearInterval(interhellopreloader);
				hellopreloader.style.display = "none";
			}
		},16);
	}
	window.onload = function(){
		setTimeout(function(){
			fadeOutnojquery(Preloader);
		},1000);
	};
	</script>
</body>
</html>