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



	

$result=mysql_query("delete from kalendar where id = '$_GET[id]'");


?>
<script>document.location.href="media.php?module=kalendar_agenda&pesan=oke_padam"</script>
<?php
	
?>

