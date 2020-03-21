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