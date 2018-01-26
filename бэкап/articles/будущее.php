<!DOCTYPE html>
<html lang="bg">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="/css/main.css"/>
	<link rel="stylesheet" href="../css/font-awesome.css">

</head>

<body>
	<div class="container grid">
			<?php require '../include/header.php';?>
		<section class="main-block grid school-page">
			<h1>Стани профи типстър - всички статии</h1>
			<div class="school-container">
				<div class="block">
					<ul>
						<li>
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<a href="#">Видове залози</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="block bonus-flag school-fix-bonus">
				<?php require '../include/bonus/flag-1.php';?>
				<?php require '../include/bonus/flag-2.php';?>
				<?php require '../include/bonus/flag-3.php';?>
				<?php require '../include/bonus/flag-4.php';?>
				<?php require '../include/bonus/flag-5.php';?>
				<?php require '../include/bonus/flag-6.php';?>
			</div>
			<div class="top-zalog grid top-z-tips-fix">
				<?php require '../include/football/zalog-of-the-day-1.php';?>
				<?php require '../include/football/zalog-of-the-day-1.php';?>
			</div>
		</section>
	<?php require '../include/footer.php';?>
	</div>
</body>
</html>
