<?php
	if(isset($_POST["upload"])){
		$namafile = basename($_FILES["fileToUpload"]["name"]);
		$namaSementara = $_FILES["fileToUpload"]['tmp_name'];
		$dir = "uploads/";
		$cek = getimagesize($_FILES["fileToUpload"]['tmp_name']);
		if ($cek != false) {
			$fullPath = $dir.$namafile;
			$hasilupload = move_uploaded_file($namaSementara, $fullPath);
			$imageFileType = pathinfo($fullPath, PATHINFO_EXTENSION);
			if($hasilupload){
			echo "Sukses<br/>";
			echo "Link : <a href='".$dir.$namafile."'>".$namafile."</a>";
			echo "file is an image - " .$cek['mime']. ".";
			echo "<img src='$fullPath'>";
			}else{
				echo "Gagal";
			}
		}else{
			echo "not image";
	}

}
 ?>
