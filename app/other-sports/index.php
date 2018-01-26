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

	<title>Други спортове - всички прогнози</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="/css/main.css"/>
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link rel="stylesheet" href="/css/menu.css">
</head>

<body>
<?php require '../include/header.php';?>
		<section class="main-block grid">
				<div class="top-zalog grid">
					<div class="zalog-item-title grid">
						<a href="/">Футбол</a>
						<a href="/tennis/">Тенис</a>
						<a href="/basketball/">Баскетбол</a>
						<a class="active">Друго</a>
					</div>	
					<?php require '../include/other-sports/other-zalog-of-the-day-1.php';?>
					<?php require '../include/other-sports/other-zalog-of-the-day-2.php';?>
					<?php require '../include/other-sports/other-zalog-of-the-day-3.php';?>
					<?php require '../include/other-sports/other-zalog-of-the-day-4.php';?>
				</div>
		</section>
	<?php require '../include/footer.php';?>
	<script type="text/javascript" src="/js/menu.js"></script>
</body>
</html>
