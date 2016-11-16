<html>
<head>
</head>
<body>
<?php
include "config.php";

$id_mhs = $_GET['id_mhs'];;

$query = mysql_query("SELECT * FROM mahasiswa WHERE id_mhs = '$id_mhs'");
while($row = mysql_fetch_array($query)){
?>
	<div align="center">
			<table style="background-color:#E0C75C;padding:50px;margin-top:150px;">
				<tr>
					<td colspan="2">
					</td>
				</tr>
				<tr>
					<td>
						NRP = 
					</td>
					<td>
						<?php echo $row['nrp']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Nama = 
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Semester = 
					</td>
					<td>
						<?php echo $row['semester']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Alamat = 
					</td>
					<td>
						<?php echo $row['alamat']; ?>
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