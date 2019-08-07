<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($data); 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	 setcookie("message", "sukses", time()+3600);
	header("location:index.php");
}else{
	setcookie("message","delete",time()-1); // Kita delete cookie 
	header("location:login.php?pesan=gagal");
}
?>