<!DOCTYPE html>
<html>
<head>
	<?php 
	require 'bloks/main.php';
	?>
</head>
<body>

	<h1>"Сайт имени меня"</h1>
	<div id="back">
		<?php 
		require 'bloks/header.php';
		?>	
	<p style="text-indent: 0px; margin: 15px auto 15px auto">В эфире НОВОСТИ!. Будьте в курсе всех актуальных новостей!
		</p>

<article class="newsList">
	
		<?php
require 'scripts/News.php';

			?>	
	</article>	

		<footer>
			(с) Все права защищены. <br/> При копировании  материалов вас ожидает смертная казнь по законом ОАР.<br/>
			Повешенье, четвертование, расстрел.  


<!--
<script  src="scripts/Main.js"></script>
-->
<script  src="scripts/showNews.js"></script>
</footer>
</div>		
</body>
</html>