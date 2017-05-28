<?php


include('connection.php');

$name2 = mysql_real_escape_string($_GET['id']);
$res=mysql_query("SELECT * FROM upload_invois WHERE id=".$name2);
$row=mysql_fetch_array($res);
$result=mysql_query("DELETE FROM upload_invois WHERE id=".$name2);
unlink("../Infiru Files/invoice/".$row['file2']);
if($result)
{
header("location:?module=maklumat_slot&id=$_GET[id2]&pesan=oke_padam");
	
}


?>





