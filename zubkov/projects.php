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
				<ul>
					<?php
					$dir='games/';
					$games=scandir($dir);
					foreach($games as $file) {
						if(is_dir($dir.$file) && $file!="." &&$file!=".."){
							$description="";
							$images=array();
							foreach (scandir($dir.$file) as $gameFile) {
								if($gameFile!="." && $gameFile!=".."){
									switch (explode(".", $gameFile)[1]) {
										case "txt":
										$description=$dir.$file."/".$gameFile;
										break;
										case "png":
										array_push($images,$dir.$file."/".$gameFile);
										break;
										case "jpg":
										array_push($images,$dir.$file."/".$gameFile);
										break;
										case "gif":
										array_push($images,$dir.$file."/".$gameFile);
										break;
									}

								}
							}
						$str=implode(",", $images);
						echo $str;
echo "<li><a href=test.php?des=$description&img=$str> $file</a></li>";

						}
					}

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