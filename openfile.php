<!DOCTYPE html>
<html>
<head>
	<title>Open file use PHP</title>
</head>
<body>
	<?php
		$file = 'coba.txt';
		// fopen($file, 'r');
		if(file_exists($file)){
			echo "$file found";
			$files = fopen($file, "w+");
			for ($i=1 ; $i <= 10; $i++) { 
				fwrite($files,$i.".wkwkw wkwkww wkwkw kwkwk wkwkw kwkwk \r\n");
			}
		}
		else{
			echo "$file not found";
		}
	 ?>
</body>
</html>