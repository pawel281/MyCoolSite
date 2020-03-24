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
			
				

					<?php
					$id=(int)$_GET["id"];
$link=mysqli_connect("localhost", "f9081252_news","6vd*zA*r");

$sql="SELECT * FROM f9081252_news.news WHERE id = $id";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($result))
{
	echo "<h2><span class=\"mainWords\">".$row["names"]."</span></h2>
<p>".$row["txt"]."				
</p>

	";

}
?>	

			

		
			<p>
				

			</p>


			

				</article>	

				<footer>
					(с) Все права защищены. <br/> При копировании  материалов вас ожидает смертная казнь по законом ОАР.<br/>
					Повешенье, четвертование, расстрел.  


				</footer>
			</div>		
		</body>
		</html>