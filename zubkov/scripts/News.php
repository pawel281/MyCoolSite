
<?php 
echo "juhkhj";
$link=mysqli_connect("localhost", "f9081252_news","6vd*zA*r");

if(!$link){
echo "Ошибка подключения";
exit();
}else{
$link->set_charset("utf8");
}

$sql="SELECT * FROM  f9081252_news.news ORDER BY date DESC";
$result=mysqli_query($link,$sql);
if(!$result){
	echo "Ошибка подключения";
}
while($row=mysqli_fetch_assoc($result))
{
echo( "
			<div class=\"newsTask\">
			<div></div>
			<p>
${$row['names']}
			</p>
			${$row['description']}
			</div>
"
	);	
}
mysqli_free_result($result);
mysqli_close($link);

?>




