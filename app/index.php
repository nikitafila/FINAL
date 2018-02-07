<!DOCTYPE html>
<html lang="bg">

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

	<title>Футболни прогнози за днес - VaskoTips.com</title>
	<meta name="description" content="Ежедневни спортни прогнози на футбол, тенис, баскетбол и други видове спорове. Мачове с добра успеваемост, ROI, детайлна статистика, математически анализи.">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="css/main.css"/>
	<link rel="stylesheet"  href="css/menu.css"/>
	<script src="js/jquery-3.3.1.min.js" defer></script>
	<script  src="js/common.js" defer></script>
</head>

<body>
	<header>
		<nav>
			<div class="logo"></div>	
			<button class="menu"></button>
			<ul>
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
		<sidebar class="main-sidebar">
			<section class="ad-section-main-block statii">
				<span class="title-row art">Всички видове залози в една статия</span>
				<span class="title-row art">Стратегия Мартингейл</span>
			</section>
			<section class="ad-section-main-block ad2">
				<span class="title-row">Топ типстъри</span>
				<div class="profil">
					<div class="picture">
						<img src="/img/icons/man.svg">
					</div>
					<div>
						<span class="name">Васил Маринов</span>
						<div class="profil-info">
							<span class="small-text">Кол-во ставок: 14</span>
							<span class="small-text">Удачных: 62%</span>
							<span class="small-text">Прибыль: 410%</span>
						</div>
					</div>
				</div>
				<div class="profil">
					<div class="picture">
						<img src="/img/icons/man.svg">
					</div>
					<div>
						<span class="name">Милиан Илиевски</span>
						<div class="profil-info">
							<span class="small-text">Кол-во ставок: 1</span>
							<span class="small-text">Удачных: 62%</span>
							<span class="small-text">Прибыль: 410%</span>
						</div>
					</div>
				</div>
			</section>
		</sidebar>
		<section class="zalog-main">
			<div class="zalog-item-title">
				<a class="active">Футбол</a>
				<a href="/tennis/">Тенис</a>
				<a href="/basketball/">Баскетбол</a>
				<a href="/other-sports/">Друго</a>
			</div>
			<?php require 'include/football/zalog-of-the-day-3.php';?>
			<?php require 'include/football/zalog-of-the-day-1.php';?>
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
				<a class="bonus-cell">
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
	<script src="js/menu.js" defer></script>
</body>
</html>
