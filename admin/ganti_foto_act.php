<?php 


include ('connection.php');
$user=$_POST['user'];
$foto=$_FILES['foto']['name'];

$uploaddir='../Infiru Files/poster/';
$alamatfile=uniqid() . '.' . $foto['extension'].'.'.png;




$u=mysql_query("select * from administrator where uname='$user'");
$us=mysql_fetch_array($u);

if(file_exists("../Infiru Files/admin/".$us['foto'])){
	unlink("../Infiru Files/admin/".$us['foto']);
	move_uploaded_file($_FILES['foto']['tmp_name'], "../Infiru Files/admin/".$alamatfile);
	mysql_query("update administrator set foto='$alamatfile' where uname='$user'");
	header("location:media.php?module=profil&pesan=oke");
}else{
	move_uploaded_file($_FILES['foto']['tmp_name'], "../Infiru Files/admin/".$alamatfile);
	mysql_query("update administrator set foto='$alamatfile' where uname='$user'");
	header("location:media.php?module=profil&pesan=oke");
}
?>
