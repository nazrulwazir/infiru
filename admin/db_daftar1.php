<?php

include ('connection.php');

//assign textbox to variable
$nama_slot=mysql_real_escape_string(ucwords(strtolower($_POST["nama_slot"])));
$tarikh_mula=$_POST['tarikh_mula'];
$tarikh_akhir=$_POST['tarikh_akhir'];



$nama_gambar=$_FILES['fupload']['name'];
$uploaddir='../Infiru Files/poster/';
$alamatfile=uniqid() . '.' . $nama_gambar['extension'].'.'.png;

$nama_gambar2=$_FILES['fupload2']['name'];
$uploaddir2='../Infiru Files/sinopsis/';
$alamatfile2=uniqid() . '.' . $nama_gambar2['extension'].'.'.png;


if (move_uploaded_file($_FILES['fupload']['tmp_name'],$uploaddir.$alamatfile))
if (move_uploaded_file($_FILES['fupload2']['tmp_name'],$uploaddir2.$alamatfile2)){
$query = mysql_query("INSERT INTO slot (nama_slot,tarikh_mula,tarikh_akhir,poster,gambar) VALUES ('$nama_slot',  '$tarikh_mula', '$tarikh_akhir','$alamatfile','$alamatfile2')");
}

if(!$query){
header("location:media.php?module=daftar&pesan=gagal");
}else{
header("location:media.php?module=search&pesan=oke");
}
?>

