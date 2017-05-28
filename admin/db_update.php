<?php

include ('connection.php');
include ('function_pic.php');



if(isset($_POST['submit'])){
	
	$id=$_GET['id'];
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){  
	
	Uploadfoto($nama_file_unik);
	mysql_query("update slot set nama_slot='$_POST[nama_slot]',
										 tarikh='$_POST[tarikh]',
										 poster='$nama_file_unik'
										 where id='$_GET[id]'");
	
	header
("location:media.php?module=daftar_success");
										 
	} else {
	
	mysql_query("update slot set nama_slot='$_POST[nama_slot]',
										 tarikh='$_POST[tarikh]',
										where id='$_GET[id]'");
	header
("location:media.php?module=search");
	}
}


?>
