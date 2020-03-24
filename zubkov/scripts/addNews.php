<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
if(!empty($_POST['name'])&&!empty($_POST['description']) &&!empty($_POST['a'])&&!empty($_POST['editor'])){

$link=mysqli_connect("localhost", "f9081252_news","6vd*zA*r");

if(!$link){
	echo "Ошибка подключения";
	exit();
}else{
	$link->set_charset("utf8");
}
$d=date("Y-m-d H:i:s");
$sql="INSERT INTO f9081252_news.news (names,date,description,txt,images)
 VALUES('{$_POST['name']}','$d','{$_POST['description']}','{$_POST['editor']}','{$_POST['a']}')";
$result=mysqli_query($link,$sql);
	
if($result){
	echo "Успешно добавлено";}else{

		echo "Неудача".mysqli_error($link);
	}



}else{

	echo "Некорректный ввод";
}

?>
</body>
</html>>

