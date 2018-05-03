<!DOCTYPE html>
<html lang="bg-BG">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112407505-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112407505-1');
	</script>
	<meta charset="utf-8">

	<title>Сигурни прогнози за днес - VaskoTips.com</title>
	<meta name="description" content="Ежедневни спортни прогнози на футбол, тенис, баскетбол и други видове спорове. Мачове с добра успеваемост, ROI, детайлна статистика, математически анализи.">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="css/main.css"/>
	<link rel="stylesheet"  href="css/menu.css"/>
	<link rel="stylesheet"  href="css/menu2.css"/>
</head>

<body>
<div class="container">
	<header>
		<nav class="menu">
			<div class="logo"></div>

			<!-- Navigation -->
			<div class="b-nav">

				<ul class="menu-mobile">
				  <li><a href="#" onclick="myFunction()" class="Droop">Прогнози</a>
				  	<ul class="mb-drop" id="mbDropdown">
				  		<li><a href="/football/">Футбол</a></li>
				  		<li><a href="/tennis/">Тенис</a></li>
				  		<li><a href="/basketball/">Баскетбол</a></li>
				  		<li><a href="/other-sports/">Друго</a></li>
				  	</ul>
				  </li>
			    <li><a href="/tipsters/">Типстъри</a></li>
			    <li><a href="/bookmakers/">Букмейкъри</a></li>
			    <li><a href="/bonus/">Бонуси</a></li>
			    <li><a href="/articles/">Статии</a></li>
		    </ul>

			</div>

			<!-- Burger-Icon -->
			<div class="b-container">
			  <div class="b-menu">
			    <div class="b-bun b-bun--top"></div>
			    <div class="b-bun b-bun--mid"></div>
			    <div class="b-bun b-bun--bottom"></div>
			  </div>

			  <!-- Burger-Brand -->
			</div>

			<ul class="desctop-menu">
			  <li><a href="#">Прогнози</a>
			  	<ul class="submenu">
			  		<li><a href="/football/">Футбол</a></li>
			  		<li><a href="/tennis/">Тенис</a></li>
			  		<li><a href="/basketball/">Баскетбол</a></li>
			  		<li><a href="/other-sports/">Друго</a></li>
			  	</ul>
			  </li>
		      <li><a href="/tipsters/">Типстъри</a></li>
		      <li><a href="/bookmakers/">Букмейкъри</a></li>
		      <li><a href="/bonus/">Бонуси</a></li>
		      <li><a href="/articles/">Статии</a></li>
	    	</ul>
		</nav>
	</header>
	<main>
		<section class="news">
			<?php require 'include/news.php';?>
		</section>
		<div class="main-sidebar">
			<section class="ad-section-main-block statii">
				<a href="/mondial-2018/" class="title-row title-row-2 art"><span class="hvr-grow">Програмата<br> за Мондиал 2018</span></a>
				<a href="/articles/vidove-zalozi/" class="title-row art"><span class="hvr-grow">Всички видове залози в една статия</span></a>
				<a href="/articles/sistema-martingeil/" class="title-row art"><span class="hvr-grow">Стратегия Мартингейл</span></a>
			</section>
			<section class="ad-section-main-block ad2">
				<span class="title-row-main">Топ типстъри</span>
				<div class="profil">
					<a href="/tipsters/vasil-marinov/" class="picture">
						<img src="/img/icons/man.svg">
					</a>
					<div>
						<a href="/tipsters/vasil-marinov/" class="name">Васил Маринов</a>
						<div class="profil-info">
							<span class="small-text">Залози: 23</span>
							<span class="small-text">Печеливши: 62%</span>
							<span class="small-text">Доход: 11%</span>
						</div>
					</div>
				</div>
				<div class="profil">
					<a href="/tipsters/milian-ilievski/" class="picture">
						<img src="/img/icons/man-1.svg">
					</a>
					<div>
						<a href="/tipsters/milian-ilievski/" class="name">Милиан Илиевски</a>
						<div class="profil-info">
							<span class="small-text">Залози: 3</span>
							<span class="small-text">Печеливши: 58%</span>
							<span class="small-text">Доход: 4%</span>
						</div>
					</div>
				</div>
			</section>
		</div>
		<section class="zalog-main">
			<div class="zalog-item-title">
				<a href="/football/">Футбол</a>
				<a href="/tennis/">Тенис</a>
				<a href="/basketball/">Баскетбол</a>
				<a href="/other-sports/">Друго</a>
			</div>
			<?php require 'include/football/zalog-of-the-day-31.php';?>
			<?php require 'include/football/zalog-of-the-day-30.php';?>
			<?php require 'include/football/zalog-of-the-day-29.php';?>
			<?php require 'include/football/zalog-of-the-day-28.php';?>
			<?php require 'include/football/zalog-of-the-day-27.php';?>
		</section>
		<section class="bonus-block">
			<div class="bonus-row">
				<div class="bonus-cell top-left-right">Букмейкър</div>
				<div class="bonus-cell top-middle">Бонус</div>
				<div class="bonus-cell top-left-right"></div>
			</div>
			<div class="bonus-row">
				<div class="bonus-cell book bet365"></div>
				<div class="bonus-cell middle">$100</div>
				<a href="/bookmakers/bet365/" class="bonus-cell">
					<span>Вземи</span>
				</a>
			</div>
			<div class="bonus-row">
				<div class="bonus-cell book betfair"></div>
				<div class="bonus-cell middle">60 евро</div>
				<a class="bonus-cell">
					<span>Вземи</span>
				</a>
			</div>
			<div class="bonus-row">
				<div class="bonus-cell book efbet"></div>
				<div class="bonus-cell middle">100 лева</div>
				<a class="bonus-cell">
					<span>Вземи</span>
				</a>
			</div>
			<div class="bonus-row">
				<div class="bonus-cell book bwin"></div>
				<div class="bonus-cell middle">100 евро</div>
				<a class="bonus-cell">
					<span>Вземи</span>
				</a>
			</div>
		</section>
	</main>
	<?php require 'include/footer.php';?>
</div>
	<script src="js/jquery-3.3.1.min.js" defer></script>
	<script  src="js/common.js" defer></script>
	<script src="js/menu.js" defer></script>
</body>
</html>
