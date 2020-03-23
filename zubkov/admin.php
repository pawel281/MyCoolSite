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
		<h2>АДМИН ПАНЕЛЬ.<br>
ПОДТВЕРДИТЕ ЧТО ВЫ, ЭТО ВЕЛИКИЙ ПАВЕЛ ЗУБКОВ!
		</h2>
		
<form action="*" method="post" name="enterAdmin" class="enterAdmin">
	<p>
	<input type="text" name="login" placeholder="Введите логин" class="formInputText">
	</p>
		<p>
	<input type="password" name="password" placeholder="Введите пароль" class="formInputText"

	>
</p>
<p>
	<input type="submit" name="but" class="formDone" >
</p>
</form>


		<?php

			?>	
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