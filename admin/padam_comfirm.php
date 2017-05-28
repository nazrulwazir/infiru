<?php


include('connection.php');


$nama = mysql_real_escape_string($_GET['id']);
	
$res=mysql_query("SELECT * FROM slot WHERE nama_slot='$nama'");
$row=mysql_fetch_array($res);
unlink("../Infiru Files/sinopsis/".$row['gambar']);

$res1=mysql_query("SELECT * FROM upload_file where nama_slot='$nama'");
$row1=mysql_fetch_array($res1);

$res2=mysql_query("SELECT * FROM upload_invois where nama_slot='$nama'");
$row2=mysql_fetch_array($res2);

$res3=mysql_query("SELECT * FROM maklumat_slot where nama_slot='$nama'");
$row3=mysql_fetch_array($res3);

$result=mysql_query("DELETE FROM slot WHERE nama_slot='$nama'");
unlink("../Infiru Files/poster/".$row['poster']);



$result3=mysql_query("DELETE FROM upload_file where nama_slot='$nama'");
unlink("../Infiru Files/document/".$row1['file2']);

$result4=mysql_query("DELETE FROM upload_invois where nama_slot='$nama'");
unlink("../Infiru Files/invoice/".$row2['file2']);


if($result)
{

header("location:media.php?module=search&pesan=oke_padam");
}

?>







