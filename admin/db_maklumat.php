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

include ('connection.php');


//assign textbox to variable
$tajuk_kuliah=mysql_real_escape_string(ucwords(strtolower($_POST['tajuk_kuliah'])));
$penceramah=ucwords(strtolower($_POST['penceramah']));
$episod=$_POST['episod'];

$sinopsis=mysql_real_escape_string(($_POST["sinopsis"]));



$nama_slot=mysql_real_escape_string(($_POST["nama_slot"]));
$bahagian=$_POST['bahagian'];



$nama=$_GET["id"] ;

$tgl			= date("Y-m-d");  
$result=mysql_query("INSERT INTO maklumat_slot (tarikh,tajuk_kuliah,penceramah,episod,nama_slot,bahagian,sinopsis) VALUES ('$tgl','$tajuk_kuliah',  '$penceramah',  '$episod', '$nama_slot', '$bahagian', '$sinopsis')")or die(mysql_error());										

	

if ($result)
?>
<script>document.location.href="media.php?module=maklumat_slot&id=<?php echo $nama; ?>&pesan=oke"</script>
<?php
      
           
?>

