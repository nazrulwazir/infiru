<?php 
include 'connection.php';
$user=$_POST['user'];
$lama=md5($_POST['lama']);
$baru=$_POST['baru'];
$ulang=$_POST['ulang'];

$cek=mysql_query("select * from administrator where pass='$lama' and uname='$user'");

if(mysql_num_rows($cek)){
	if($baru==$ulang){
		$b = md5($baru);
		mysql_query("update administrator set pass='$b' where uname='$user'");
		header("location:media.php?module=ganti_pass&pesan=oke&pass=$ulang");
	}else{
		header("location:media.php?module=ganti_pass&pesan=tdksama");
	}
}else{
	header("location:media.php?module=ganti_pass&pesan=gagal");
}


 ?>
 