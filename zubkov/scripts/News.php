<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
echo "juhkhj";
$link=mysqli_connect("localhost", "f9081252_news","6vd*zA*r");

if(!$link){
echo "Ебать ты лох";
exit();
}else{
echo "Ебать ты не лох";
$link->set_charset("utf8");
}

$sql="SELECT * FROM  f9081252_news.news";
$result=mysqli_query($link,$sql);
if(!$result){
	echo "лох дважды";
}
while($row=mysqli_fetch_assoc($result))
{
echo $row['names'];
}
mysqli_free_result($result);
mysqli_close($link);

?>
</body>
</html>




