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

include ('connection.php');


//assign textbox to variable
$tajuk=mysql_real_escape_string(ucwords(strtolower($_POST['tajuk'])));
$pengacara=ucwords(strtolower($_POST['penceramah']));
$nama_slot=mysql_real_escape_string(($_POST["nama_slot"]));
$sinopsis=mysql_real_escape_string(($_POST["sinopsis"]));
$tgl			= date("Y-m-d");

$bahagian=$_POST['bahagian'];
$episod=$_POST['episod'];

$gambar=$_FILES['fupload']['name'];
$uploaddir='Infiru Files/sinopsis/';
$alamatfile=uniqid() . '.' . $gambar['extension'].'.'.png;

$nama=$_GET["id"] ;

if (move_uploaded_file($_FILES['fupload']['tmp_name'],$uploaddir.$alamatfile)){
$query = mysql_query("INSERT INTO sinopsis (nama_slot,tajuk,episod,bahagian,tarikh,pengacara,sinopsis,gambar) VALUES ('$nama_slot','$tajuk','$episod','$bahagian', '$tgl', '$pengacara', '$sinopsis','$alamatfile')");
}

if ($result)
?>
<script>document.location.href="media.php?module=maklumat_slot&id=<?php echo $nama; ?>&pesan=oke"</script>
<?php
      
           
?>
</body>
</html>