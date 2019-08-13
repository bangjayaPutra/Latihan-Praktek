<!DOCTYPE html>
<html>
<head>
	<title> Deskripsi-Praktek </title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="deskripsi" placeholder="Isi di sini">
		<button type="submit" name="submit"> Pancal </button>
	</form>

	<?php
		if (isset($_POST['submit'])) {
			$form = $_POST['deskripsi'];
			echo "Hasil deskripsi = ".base64_decode($form);
		 	
		 } 
	 ?>
</body>
</html>