<!DOCTYPE html>
<html>
<head>
	<title> Enkipsi-Latihan </title>
</head>
<body>
	<h1> MD5 </h1>
	<form method="post" action="">	
		<table>
			<tr>
				<td>
					<input type="text" name="form" placeholder="Isi di Sini">
				</td>
				<td>
					<button type="submit" name="submit"> Pancal </button>	
				</td>
			</tr>
		</table>
	</form>
	<br>
	<br>
	<br>
	<table border="1">
	<?php 
		if (isset($_POST['submit'])) {
			$form = $_POST['form'];
			echo "<h3>password ori = ".$form."<h3>";
			echo "<tr><td>Enkripsi</td><td>Password setelah di enkripsi</td></tr>";
			echo "<tr><td>md5()</td><td>".md5($form)."</td></tr>";
			echo "<tr><td>password_hash()</td><td>".password_hash($form, PASSWORD_DEFAULT)."</td></tr>";
			echo "<tr><td>crypt()</td><td>".crypt($form, "$@!@#Dvxchghn@!#87jhh26?{|")."</td></tr>";
			echo "<tr><td>hash()</td><td>".hash("WHIRLPOOL", $form)."</td></tr>";
			echo "<tr><td>sha1()</td><td>".sha1($form)."</td></tr>";
			echo "<tr><td>base64_encode()</td><td>".base64_encode($form)."</td></tr>";
			echo "<tr><td>base64_decode()</td><td>".base64_decode($form)."</td></tr>";
		}

	 ?>
	 </table>
</body>
</html>