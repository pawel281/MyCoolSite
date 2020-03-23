
<?php 
$link=mysqli_connect("localhost", "f9081252_news","6vd*zA*r");

if(!$link){
	echo "Ошибка подключения";
	exit();
}else{
	$link->set_charset("utf8");
}

$sql="SELECT * FROM  f9081252_news.news ORDER BY f9081252_news.news.date DESC";
$result=mysqli_query($link,$sql);

if(!$result){
	echo "Ошибка подключения";
}
while($row=mysqli_fetch_assoc($result))
{
	$id=$row["id"];
	echo( "
		<div class=\"newsTask\" id=$id>
		<div></div>
		<p style='margin:0px;
		text-indent:0em;
		text-align: center;

		'>".
		$row["names"]
		.
		"
		</p>".
		$row["description"]."<br>
		<span>".$row["date"]."</span>"
		.
		"
		</div>
		"
	);	
}
mysqli_free_result($result);
mysqli_close($link);

?>




