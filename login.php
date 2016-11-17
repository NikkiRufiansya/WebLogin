<?php
include "http://sekbelajarbang-sekbelajarbang.44fs.preview.openshiftapps.com/config.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = mysqli_query($kon,"SELECT * FROM user WHERE email = '$email' AND password = '$password'");

while($row=mysqli_fetch_assoc($query)){
	
	$id_pengguna = $row['id_pengguna'];
	echo $id_pengguna;
		$query2 = mysqli_query($kon,"SELECT * FROM dosen WHERE id_dosen = '$id_pengguna'");
		$query3 = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id_mhs = '$id_pengguna'");
		if($row=mysqli_fetch_assoc($query2)){
			echo"<script>alert('Berhasil Login dosen')</script>";
			echo"<script>document.location='index2.php?id_dosen=".$id_pengguna."'</script>";
		}
		if($row=mysqli_fetch_assoc($query3)){
			echo"<script>alert('Berhasil Login mahasiswa')</script>";
			echo"<script>document.location='index3.php?id_mhs=".$id_pengguna."'</script>";	
		}
}
?>
