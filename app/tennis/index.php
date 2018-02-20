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

	<title>Най-точните тенис прогнози</title>
	<meta name="description" content="Всички тенис прогнози за днес. ATP, WTA турнири.">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="/css/main.css"/>
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link rel="stylesheet" href="/css/menu.css">

</head>

<body>
	<?php require '../include/header.php';?>
	<main>
		<section class="zalog-main">
				<div class="zalog-item-title">
					<a href="/football/">Футбол</a>
					<a class="active">Тенис</a>
					<a href="/basketball/">Баскетбол</a>
					<a href="/other-sports/">Друго</a>
				</div>
				<?php require '../include/tennis/tennis-zalog-of-the-day-3.php';?>
				<?php require '../include/tennis/tennis-zalog-of-the-day-2.php';?>
				<?php require '../include/tennis/tennis-zalog-of-the-day-1.php';?>
		</section>
		<sidebar class="bonus-page">
			<section class="ad-section-main-block statii bonus-statii">
				<?php require '../include/add/ad-section-main-block-1.php';?>
			</section>
				<?php require '../include/add/ad-section-main-block-2.php';?>
		</sidebar>
	</main>
	<?php require '../include/footer.php';?>
	<script src="/js/menu.js"></script>
</body>
</html>
