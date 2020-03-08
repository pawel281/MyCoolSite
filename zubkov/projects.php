<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles/Main.css?v=2">
	<meta charset="utf-8">
	<title>Павел Зубков</title>
	<link rel="shotcut icon" href="resources/Icon/icon.jpg" type="image/jpg">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300|Roboto+Condensed|Rubik+Mono+One|Russo+One&display=swap" rel="stylesheet">
</head>
<body>

	<h1>"Сайт имени меня"</h1>
	<div id="back">
		<?php 
		require 'bloks/header.php';
		?>	
		<article style="display: block">
			<section>
				<!-- Изменил-->	
				<h2>
					<span class="mainWords">
						ВЕЛИКИЕ ПРОЕКТЫ 	
					</span>
				</h2>
				<p>
					Здесь представлены мои проекты, как законченные и релизнутые, так и заброшенные. Так же здесь представленны   эксперементы и  прототипы.
				</p>
				<ul class="games">
					<?php
					include("scripts/gameList.php");
					?>
				</ul>

			</section>
		</article>	

		<footer>
			(с) Все права защищены. <br/> При копировании  материалов вас ожидает смертная казнь по законом ОАР.<br/>
			Повешенье, четвертование, расстрел.  


<!--
<script  src="scripts/Main.js"></script>
-->

</footer>
</div>		
</body>
</html>