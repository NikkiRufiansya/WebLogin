<html>
<head>
</head>
<body>
<?php
include "config.php";

$id_dosen = $_GET['id_dosen'];;

$query = mysqli_query($kon,"SELECT * FROM dosen WHERE id_dosen = '$id_dosen'");
while($row = mysqli_fetch_array($query)){
?>
	<div align="center">
			<table style="background-color:#E0C75C;padding:50px;margin-top:150px;">
				<tr>
					<td colspan="2">
					</td>
				</tr>
				<tr>
					<td>
						Nama Dosen = 
					</td>
					<td>
						<?php echo $row['nama_dosen']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Mata Kuliah = 
					</td>
					<td>
						<?php echo $row['mata_kuliah']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					</td>
				</tr>
			</table>
	</div>
<?php
}
?>
</body>
</html>
