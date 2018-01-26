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

	<title>Сигурни баскетболни прогнози за днес</title>
	<meta name="description" content="Всички прогнози за баскетбол. Ежедневни залози за NBA, Евролига, българското първество.">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="/css/main.css"/>
	<link rel="stylesheet" href="../css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/css/menu.css">

</head>

<body>
	<?php require '../include/header.php';?>
	<section class="main-block grid">
				<div class="top-zalog grid">
					<div class="zalog-item-title grid">
						<a href="/">Футбол</a>
						<a href="/tennis/">Тенис</a>
						<a class="active">Баскетбол</a>
						<a href="/other-sports/">Друго</a>
					</div>
					<?php require '../include/basketball/basketball-zalog-of-the-day-1.php';?>
				</div>
	</section>
	<?php require '../include/footer.php';?>
	<script type="text/javascript" src="/js/menu.js"></script>
</body>
</html>
