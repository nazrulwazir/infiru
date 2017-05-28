<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
	 font-family: 'IstokWebRegular';
	 font-size:16px;
	 vertical-align:top;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #CCCCCC;
	 font-family: 'IstokWebRegular';
	 font-size:16px;
	 vertical-align:top;
 
}
</style>
<a class="btn" href="media.php?module=search"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a><p></p>
<?php


include('connection.php');


$nama = mysql_real_escape_string($_GET['id']);
$res2=mysql_query("SELECT * FROM maklumat_slot where id='$nama'");
$row2=mysql_fetch_array($res2);
	


$result=mysql_query("delete from maklumat_slot where id = '$_GET[id]'");


if($result)
{
?>
<script>document.location.href="media.php?module=maklumat_slot&id=<?php echo $_GET[id2]; ?>&pesan=oke_padam"</script>
<?php
}
?>



