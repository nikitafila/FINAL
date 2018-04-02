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

	<title>Най-добрите оферти и бонуси от лиензирани букмейкъри</title>
	<meta name="description" content="Всички бонуси от българските букмейкъри. 100% бонуси за депозит, бесплатни залози, сравнение на бонус промоции.">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="/css/main.css"/>
	<link rel="stylesheet" href="/css/menu.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
</head>

<body>
	<?php require '../include/header.php';?>
	<main>
		<section class="flag-bonus">
			<h1>Всички бонуси от български букмейкъри</h1>
			<div class="block bonus-flag">
				<?php require '../include/bonus/flag-1.php';?>
				<?php require '../include/bonus/flag-2.php';?>
				<?php require '../include/bonus/flag-3.php';?>
				<?php require '../include/bonus/flag-4.php';?>
				<?php require '../include/bonus/flag-5.php';?>
				<?php require '../include/bonus/flag-6.php';?>
			</div>
		</section>
		<sidebar class="bonus-page">
			<section class="ad-section-main-block statii">
				<?php require '../include/add/ad-section-main-block-1.php';?>
			</section>
				<?php require '../include/add/ad-section-main-block-2.php';?>
		</sidebar>
	</main>
	<?php require '../include/footer.php';?>
	<script src="/js/menu.js" defer></script>
</body>
</html>
