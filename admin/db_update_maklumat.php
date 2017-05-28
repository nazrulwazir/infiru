 <?php
	
	$nama=$_GET["id2"] ;
	
	
	
$ambil=mysql_query("select * from maklumat_slot where id='$_GET[id]'");
	$t=mysql_fetch_array($ambil);
	
	$name = mysql_real_escape_string($_GET['id']);
	$sinopsis=mysql_real_escape_string($_POST['sinopsis']);
$tajuk_kuliah=mysql_real_escape_string(ucwords(strtolower($_POST['tajuk_kuliah'])));
$penceramah=ucwords(strtolower($_POST['penceramah']));


 

if(isset($_POST['submit'])){

$tgl			= date("Y-m-d");  
	$result=mysql_query("update maklumat_slot set tajuk_kuliah='$tajuk_kuliah',
										 penceramah='$penceramah',
										 tarikh='$tgl',
										 episod='$_POST[episod]',
										 bahagian='$_POST[bahagian]',
										  sinopsis='$sinopsis'
										 where id='$_GET[id]'");
}
	?>
    
<script>document.location.href="media.php?module=maklumat_slot&id=<?php echo $nama; ?>&pesan=oke_update"</script>
