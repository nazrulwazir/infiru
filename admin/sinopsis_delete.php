<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a class="btn" href="media.php?module=search"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
<p></p>
<?php


include('connection.php');


$nama = mysql_real_escape_string($_GET['id2']);
$res2=mysql_query("SELECT * FROM sinopsis where nama_slot='$nama'");
$row2=mysql_fetch_array($res2);

	

$result=mysql_query("delete from sinopsis where id = '$_GET[id]'");
unlink("Infiru Files/sinopsis/".$row2['gambar']);
if($result)
{
?>
<script>document.location.href="media.php?module=maklumat_slot&id=<?php echo $_GET[id2]; ?>&pesan=oke_padam"</script>
<?php
}
?>
</body>
</html>