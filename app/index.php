<!DOCTYPE html>
<html lang="bg">

<head>

	<meta charset="utf-8">

	<title>Футболни прогнози за днес - VaskoTips.com</title>
	<meta name="description" content="Ежедневни спортни прогнози на футбол, тенис, баскетбол и други видове спорове. Мачове с добра успеваемост, ROI, детайлна статистика, математически анализи.">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="css/main.css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=cyrillic" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112407505-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112407505-1');
</script>

</head>

<body>
		<header>
			<div class="logo"></div>
			<div class="ad-header-block">728*90</div>
			<div class="main-menu grid">
				<a href="/profi/"><div>Типстъри</div></a>
				<a href="/bookmakers/"><div>Букмейкъри</div></a>
				<a href="/bonus/"><div>Бонуси</div></a>
				<a href="/articles/"><div>Статии</div></a>
			</div>
		</header>
		<section class="main-block grid">
				<div class="news">
					<?php require 'include/news.php';?>
				</div>
				<?php require 'include/add/ad-section-main-block-1.php';?>
				<?php require 'include/add/ad-section-main-block-2.php';?>
				<div class="top-zalog grid">
					<div class="zalog-item-title grid">
						<a class="active">Футбол</a>
						<a href="/tennis/">Тенис</a>
						<a href="/basketball/">Баскетбол</a>
						<a href="/other-sports/">Друго</a>
					</div>
					<?php require 'include/football/zalog-of-the-day-4.php';?>
					<?php require 'include/football/zalog-of-the-day-1.php';?>
					<?php require 'include/football/zalog-of-the-day-2.php';?>
					<?php require 'include/football/zalog-of-the-day-3.php';?>
				</div>
				<div class="bonus-block">
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
						<div class="bonus-cell middle">$100</div>
						<a class="bonus-cell">
							<span>Вземи</span>
						</a>
					</div>
					<div class="bonus-row">
						<div class="bonus-cell book efbet"></div>
						<div class="bonus-cell middle">$100</div>
						<a class="bonus-cell">
							<span>Вземи</span>
						</a>
					</div>
					<div class="bonus-row">
						<div class="bonus-cell book bwin"></div>
						<div class="bonus-cell middle">$100</div>
						<a class="bonus-cell">
							<span>Вземи</span>
						</a>
					</div>
				</div>
		</section>
	<?php require 'include/footer.php';?>
</body>
</html>
