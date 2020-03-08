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
			<h2>
				<span class="mainWords">

					<?php
					echo ($_GET["name"]);

					?>	
				</span>
			</h2>

			<div class="sliderControl">
				<div class="slider">
					<ul>		
						<?php
						$img=mb_convert_encoding( explode(",",$_GET["img"]),"utf-8");
						
						foreach ($img as $i){
							echo "<li><div><img src=$i></div></li>";			
						}

						?>

					</ul>


				</div>
		<button><</button>
		<button>></button>
		</div>

			<p>
				<?php 

				$txt=implode("<br>",file($_GET["des"]));
				echo "$txt";


				?>	
			</p>


				<!--<div class="link">					
					<p><span>
						
						<?php
						/*if(!empty($_GET[link])){
							link=file($_GET[link]);	

							echo "Ссылка: ".$_GET(link[0]);
						}*/

						?> 

					</span><p>

					</div> -->



				</article>	

				<footer>
					(с) Все права защищены. <br/> При копировании  материалов вас ожидает смертная казнь по законом ОАР.<br/>
					Повешенье, четвертование, расстрел.  


				</footer>
			</div>		
		</body>
		</html>