<?php 
include 'connection.php';
$nama=ucwords(strtolower($_POST['nama']));
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$ulang=$_POST['ulang'];


	if($pass==$ulang){
		$b = md5($pass);
		mysql_query("insert into administrator (nama, uname, pass) VALUES ('$nama', '$uname', '$b')");
		header("location:media.php?module=daftar_admin&pesan=oke&username=$uname&pass=$pass");
	}else{
		header("location:media.php?module=daftar_admin&pesan=tdksama");
	}
 ?>
 
