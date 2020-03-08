<?php
$dir='games/';
$games=scandir($dir);
foreach($games as $file) {
	if(is_dir($dir.$file) && $file!="." &&$file!=".."){
		$description="";
		$link="";
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
					case "link":
					$link=$dir.$file."/".$gameFile;
				}

			}
		}
		$str=implode(",", $images);
		$name=explode(".", $file)[0];
		echo "<li><a href=project.php?name=$name&des=$description&link=$link&img=$str> $file</a></li>";

	}
}

?>