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

	<title>Стратегия Фибоначи или система "Една стъпка напред, две назад"</title>
	<meta name="description" content="Подробна системата, направена по принипа на числата на Фибоначи. Залагаме една стъпка напред, две назад">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"  href="/css/main.css"/>
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link rel="stylesheet" href="/css/menu.css">
</head>

<body>
	<div class="container grid">
			<?php require '../../include/header.php';?>
		<section class="main-block">
			<article>
				<h1>Системата Фибоначи  –  Залагаме по принцип «Една стъпка напред, две назад»</h1>

				<p>В тази система разглеждаме следния принцип. Ако залогът ви загуби, трябва да заложите по-голяма сума.</p>
		
				<img class="opty" src="/img/articles/sistema-fibonachi.gif" alt="Система-на-залагания-фибоначи">

				<blockquote cite="https://bg.wikipedia.org/wiki/%D0%A7%D0%B8%D1%81%D0%BB%D0%B0_%D0%BD%D0%B0_%D0%A4%D0%B8%D0%B1%D0%BE%D0%BD%D0%B0%D1%87%D0%B8"><p>Леонардо Фибоначи е италианският математик, който публикува през 1202 г. редица от числа, всяко от които се получава като сума от предходните две, като първите две числа са 1 и 1: 1, 1, 2, 3, 5, 8, 13, 21...</p></blockquote>

				<p>Тази схема използват и в онлайн бетинга, като правят залог с по-голяма сума след загуба. Стратегия Фибоначи има общи черти с мартингейл (принципът е същития), но използвайки структурата на числата на Фибоначи.</p>

				<ol>
					<li>Залагайте 1 лев, докато не загубите. Веднага след загуба преминавате към стъпка 2.</li>
					<li>Залагате 2 лева. Ако печелите – връщате се към стъпка 1. След загуба преминавате към стъпка 3.</li>
					<li>Залагате 3 лева. Ако печелите – връщате се към стъпка 1. В случай на загуба преминавате към стъпка 4.</li>
					<li>Залагате 5 лева (2+3). Ако печелите – връщате се към стъпка 2 (две стъпки назад). В случай на загуба преминавате към стъпка 5.</li>
					<li>Залагате 8 лева. Ако печелите – връщате се към стъпка 3. В случай на загуба преминавате към стъпка 6.</li>
					<li>Залагате 13 лева (8+5). Ако печелите – връщате се към стъпка 4. В случай на загуба преминавате към стъпка 7.</li>
					<li>Залагате 21 лев. Ако печелите – връщате се към стъпка 5. В случай на загуба преминавате към стъпка 8.</li>
					<li>Залагате 34 лева. Ако печелите – връщате се към стъпка 6. В случай на загуба преминавате към стъпка 1.</li>
				</ol>
				<p>Заложете 2 лева. Ако спечелите, връщайте се към стъпка 1, но вече със залога от 2 лева. Ако губите - приминете към стъпка 3.</p>
			</article>
		</section>
	<?php require '../../include/footer.php';?>
	</div>
	<script type="text/javascript" src="/js/menu.js"></script>
</body>
</html>
