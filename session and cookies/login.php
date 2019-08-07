<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header("location: index.php"); // Kita Redirect ke halaman welcome.php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div style="color: red;margin-bottom: 15px;">
    <?php
    // Cek apakah terdapat cookie dengan nama message
    if(isset($_COOKIE["message"])){ // Jika ada
      echo $_COOKIE["message"]; // Tampilkan pesannya
    }
    ?>
  </div>
	<h1> Login </h1>
	<form action="validasi_login.php" method="post">
		<table>
			<tr>
				<td>
					<input type="text" name="username" placeholder="Username">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="password" placeholder="Password">
				</td>
 			</tr>
			<tr>
				<td>
				<input type="submit">
				</td>
			</tr>
		</table>
	</form>	
</body>
</html>