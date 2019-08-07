<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" id="fileToUpload">	
		<input type="submit" name="upload" value="UPLOAD">
	</form>
<!-- cek apakah sudah login -->
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:login.php?pesan=belum_login");
}
?>

<a href="logout.php">Lo gut</a>
</body>
</html>