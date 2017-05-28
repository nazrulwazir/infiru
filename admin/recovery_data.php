<html>
<head>
	<title>Recovery Database - Ri32.Wordpress.Com</title>
</title>
</title>
<body>

<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Tidak Berjaya !</div>";
		echo "Proses upload gagal, kode error = " . $_FILES['location']['error'];
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Database berjaya di Restore.Sila periksa kembali !</div>";
		
	}
}
?>

<h1 class='head'><span class="glyphicon glyphicon-folder-close"></span> RESTORE DATABASE </h1>

<form enctype="multipart/form-data" action="recovery_db.php" method="post">
	<p align="center"><em>Ini digunakan untuk <strong>restore</strong> semua data yang ada didalam database &quot;<strong>Infiru</strong>&quot;.</em></p>
	<table align="center">
	<tr><td>File Backup Database (*.sql) <input type="file" name="datafile" size="30" id="gambar"  required/></td></tr>
	<tr><td><input type="submit"  class='btn btn-primary' onClick="return confirm('Restore Database  Infiru ?')" name="restore" value="Restore Database" /></td>
	</tr>
	</table>
</form>


</body>
</head>

	