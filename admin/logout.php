<?php

include 'cek.php';
	include 'connection.php';
	
  
$ambil = mysql_query("SELECT current_login FROM administrator WHERE uname='$_SESSION[uname]'");
$hasil = mysql_fetch_array($ambil);

$query = mysql_query("UPDATE administrator SET last_login = '$hasil[current_login]' WHERE uname='$_SESSION[uname]'");

//$_SESSION=array();
unset($_SESSION['uname']);


  echo "<script>alert('Anda telah keluar dari halaman administrator'); window.location = 'index.php'</script>";
?>

