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
						$img=explode(",",$_GET["img"]);
						
						foreach ($img as $i){	
							$i=str_replace(" ","%20",$i); 
							echo "<li><div style=\"background:url($i);  
							background-repeat: no-repeat;
							background-size: contain; 
							background-position:center;      
							\"></div></li>";			
						}

						?>

					</ul>


				</div>
				<button id="sliderNext"><</button>
				<button  id="sliderBack">></button>
			</div>

			<p>
				<?php 
				$txt=implode("<br>",file($_GET["des"]));
				echo "$txt";


				?>	
		

			</p>


			<?php

if(!empty($_GET["link"])){
	$st=file_get_contents($_GET["link"]);
echo "<div class=\"dowParent \"><div class=\"download\" ><a href=$st>Скачать</a></div><div>";		
			}
			?>	

				</article>	

				<footer>
					(с) Все права защищены. <br/> При копировании  материалов вас ожидает смертная казнь по законом ОАР.<br/>
					Повешенье, четвертование, расстрел.  


				</footer>
			</div>		
			<script src="scripts/Slider.js"></script>
		</body>
		</html>