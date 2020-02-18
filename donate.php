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
	<link rel="stylesheet" href="css/donate.css">
	<link rel="stylesheet" type="text/css" href="wow-animation/animate.min.css">
	<script src="wow-animation/wow.min.js"></script>
	<script>
    	new WOW().init();
	</script>
</head>
<body>
	<header>
		<?php include_once "header.php" ?>
		<div class="container">
			<div>
				<div class="DonateWindow">
					<h2 class="TitleH3">Донат</h2>
					<div class="Form">
						<div class="select">
							<select name="" id="Select">
								<option value="000">Выберите сервер</option>
								<option value="1">Unusual-RP #1</option>
								<option value="2">Unusual-RP #2</option>
							</select>
							<div class="icon" id="ServerIcon"></div>
						</div>
						<div class="InputText">
							<input type="text" id="NickName" placeholder="Введите Ник-Нейм">
							<div class="icon" id="ManIcon"></div>
						</div>
						<div class="select">
							<select name="" id="Select">
								<option value="000">Выберите товар</option>
								<option value="1">Товар #1</option>
								<option value="2">Товар #2</option>
								<option value="2">Товар #3</option>
							</select>
							<div class="icon" id="BagIcon"></div>
						</div>
					</div>
					<nav class="BtnMenu">
						<ul class="BtnMenuUL">
							<li>
								<a href="">
									<div class="button" id="GoPay">
										<span>Перейти к оплате</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="button" id="ActiveShares">
										<span>Список серверов</span>
									</div>
								</a>
							</li>
						</ul>
					</nav>
					<p id="confirm">Нажимая кнопку "Перейти к оплате" Вы соглашаетесь с условиями пожертвования</p>
				</div>
				<div id="Cortez"></div>
			</div>
		</div>
	</header>
	<section class="HowUseDonate">
		<div class="container">
			<h2 class="TitleH2">Инструкция по покупке донат услуг!</h2>
			<div class="HelpBlock wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="120">
				<div class="NumCircle"><span id="Num">1</span></div>
				<p id="Info">Из выпадающего списка выберите сервер на котором нужна донат услуга.</p>
			</div>
			<div class="HelpBlock wow zoomIn" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="120">
				<div class="NumCircle"><span id="Num">2</span></div>
				<p id="Info">В поле для ввода укажите "Ник-Нейм", для которого нужна донат услуга.</p>
			</div>
			<div class="HelpBlock wow zoomIn" data-wow-duration="1s" data-wow-delay="2.5s" data-wow-offset="120">
				<div class="NumCircle"><span id="Num">3</span></div>
				<p id="Info">Из выпадающего списка выберите услугу, которая Вас интересует.</p>
			</div>
			<div class="HelpBlock wow zoomIn" data-wow-duration="1s" data-wow-delay="3.5s" data-wow-offset="120">
				<div class="NumCircle"><span id="Num">4</span></div>
				<p id="Info">Нажмите кнопку "Перейти к оплате" и следуйте инструкциям платежной системы. После оплаты, донат услуга будет доставлена на Ваш игровой аккаунт в течении суток в автоматическом режиме.</p>
			</div>
			<a href="">
				<div class="button" id="NeedHelp">
					<span>Нужна помощь</span>
				</div>
			</a>
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