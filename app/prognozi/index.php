<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="../css/main.css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=cyrillic" rel="stylesheet">

</head>

<body>
	<?php require '../include/header.php';?>
		<section class="main-block grid tips-page">
				<div class="title-header">
					<h1 class="tips-title" >Прогнози за тази седмица</h1>
					<span class="title-date">13/12/2017</span>
				</div>
				<div class="top-zalog grid top-z-tips-fix">
					<?php require '../include/zalog-of-the-day-1.php';?>
					<?php require '../include/zalog-of-the-day-1.php';?>
					<?php require '../include/zalog-of-the-day-1.php';?>
					<?php require '../include/zalog-of-the-day-1.php';?>
					<?php require '../include/zalog-of-the-day-1.php';?>
					<?php require '../include/zalog-of-the-day-1.php';?>
				</div>
				<?php require '../include/ad-section-main-block.php';?>
				<?php require '../include/ad-section-main-block.php';?>
				<div class="news news-tips-fix">
					<?php require '../include/news.php';?>
				</div>
			</section>
	<?php require '../include/footer.php';?>
</body>
</html>
