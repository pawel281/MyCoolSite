<!DOCTYPE html>
<html>
<head>
	<?php 
	require 'bloks/main.php';
	?>

	<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
<body>

	<h1>"Сайт имени меня"</h1>
	<div id="back">
		<?php 
		require 'bloks/header.php';
		?>	
		<article style="display: block">
			<h2>АДМИН ПАНЕЛЬ.<br>
			</h2>
			<?php
			$login="gooses_god";
			$password="bigBoy228";
			if($_POST['login']==$login&& $_POST['password']==$password)
			{

				echo '<h2>Добро пожаловать, хозяин!</h2>
<p style="text-align: center;
	text-indent: 0em;">
Не желаете добавить новость? Время для ахренительных историй!
</p>
<form method="post" action="scripts/addNews.php" class="GetNews">

<p>
<label>Название новости:</label><br>
<input type="text" name="name" placeholder="введите название новости" class="inputTxt">
</p>
<p>
<label>Краткое описание новости:</label><br>
<textarea rows="5"  name="description" placeholder="Введите краткое описание" class="inputTxt"></textarea>
</p>
<p>
<label>Обложка новости:</label><br>
<input type="text" name="a" placeholder="Ссылка на обложку" class="inputTxt">
</p>
<p>
<label>Для загрузки картинок и мусора:</label><br>
<a  class="formDone inputCentr" href="https://ru.imgbb.com/" >Файл-помойка</a>
</p>
<p>
<label>Текст новости:</label><br>
<textarea class="editor" name="editor"></textarea>
</p>
<input type="submit" name="get" class="formDone inputCentr">
</form>
				
				



				<script>
				CKEDITOR.replace( "editor");
				CKEDITOR.config.width="80%";
				</script>


				'


				;
			}
			else{

				echo "<h2 style=\" color:red;\">АХ ТЫ ЖУЛИК!<br> НЕ ПРОЙДЁШЬ!</h2>";

			}
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