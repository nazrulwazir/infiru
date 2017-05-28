<style>
input[type=text], select {
   
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea {
    width: 100%;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}

</style>
<a class="btn" href="media.php?module=search"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a><p></p>
<?php

include ('connection.php');


$name = mysql_real_escape_string($_GET['id']);
$ambil=mysql_query("select * from slot where id='$name'");
	$t=mysql_fetch_array($ambil);
	
	
	echo "<h2 class='head'>Kemaskini Slot</h2>
	<form action='' method='post' enctype='multipart/form-data' name='update' >
	
	<table class='tabelform tabpad'>
	<tr>"; ?>
	<td>Tajuk Slot</td><td>:</td><td> <input type='text' class="form-control1" name='nama_slot' value="<?php echo $t['nama_slot']; ?>" ></td>
	
    <?php
	echo"
	<td>Tarikh Mula</td><td>:</td><td><a href='javascript:void(0)' onClick='if(self.gfPop)gfPop.fPopCalendar(document.update.tarikh_mula);return false;'> <input type='text' class='form-control1' name='tarikh_mula' title='dd-mm-yyyy' value='$t[tarikh_mula]' /><img name='popcal' align='absmiddle' src='../calender/calbtn.gif' width='34' height='22' border='0'></a></td>
	
	<tr>
	
	<td></td><td></td><td><div class='foto2'><a class='thumbnail'><img src='../Infiru Files/poster/$t[poster]' width='200' height='240'/></a></td>
	</tr>
	
	<tr>
	<td>Ganti Poster</td><td>:</td><td><input name='fupload' type='file' /></td>
	
	<td>Tarikh Akhir</td><td>:</td><td><a href='javascript:void(0)' onClick='if(self.gfPop)gfPop.fPopCalendar(document.update.tarikh_akhir);return false;'> <input type='text' class='form-control1' name='tarikh_akhir' title='dd-mm-yyyy' value='$t[tarikh_akhir]' /><img name='popcal' align='absmiddle' src='../calender/calbtn.gif' width='34' height='22' border='0'></a></td>
	</tr>
	
		<tr>
	
	<td></td><td></td><td><div class='foto2'><a class='thumbnail'><img src='../Infiru Files/sinopsis/$t[gambar]' width='200' height='240'/></a></td>
	</tr>
	
	<tr>
	<td>Ganti Sinopsis</td><td>:</td><td><input name='fupload2' type='file' /></td>
	
	</tr>
	
</table>
	 <input type='button' class='btn btn-default' value=Batal onclick=self.history.back()>
					<input type='submit' class='btn btn-primary' value='Simpan' name='submit'>
                    
	"; 
	?>
 
    <?PHP
	
	if(isset($_POST['submit'])){
		
		
$nama_slot=mysql_real_escape_string(ucwords(strtolower($_POST['nama_slot'])));
$tarikh_mula=$_POST['tarikh_mula'];
$tarikh_akhir=$_POST['tarikh_akhir'];
  

  $nama_gambar=$_FILES['fupload']['name'];
$uploaddir='../Infiru Files/poster/';
$alamatfile=uniqid() . '.' . $nama_gambar['extension'].'.'.png;

$nama_gambar2=$_FILES['fupload2']['name'];
$uploaddir2='../Infiru Files/sinopsis/';
$alamatfile2=uniqid() . '.' . $nama_gambar2['extension'].'.'.png;

		

if($nama_gambar=="")
{
$foto="";
$sql3 = mysql_query("UPDATE slot SET nama_slot='$nama_slot',
										tarikh_mula='$tarikh_mula',
										 tarikh_akhir='$tarikh_akhir'
										where id='$_GET[id]'");
									

							 
}else{
$foto=", poster='$alamatfile'";
}

if (move_uploaded_file($_FILES['fupload']['tmp_name'],$uploaddir.$alamatfile))
{
$sql = mysql_query("UPDATE slot SET nama_slot='$nama_slot',
										tarikh_mula='$tarikh_mula',
										 tarikh_akhir='$tarikh_akhir' $foto  		
										where id='$_GET[id]'");
										
unlink("../Infiru Files/poster/".$t['poster']);
		
		

}

if($nama_gambar2=="")
{
$foto="";
$sql3 = mysql_query("UPDATE slot SET nama_slot='$nama_slot',
										tarikh_mula='$tarikh_mula',
										 tarikh_akhir='$tarikh_akhir'
										where id='$_GET[id]'");
									

							 
}else{
$foto2=", gambar='$alamatfile2'";
}

if (move_uploaded_file($_FILES['fupload2']['tmp_name'],$uploaddir2.$alamatfile2))
{
$sql = mysql_query("UPDATE slot SET nama_slot='$nama_slot',
										tarikh_mula='$tarikh_mula',
										 tarikh_akhir='$tarikh_akhir' $foto2  		
										where id='$_GET[id]'");
										

unlink("../Infiru Files/sinopsis/".$t['gambar']);
		
		

}



$nama2=mysql_real_escape_string(ucwords(strtolower($_GET[id2])));
$sql2= mysql_query("update maklumat_slot set nama_slot='$nama_slot'
										  where nama_slot='$nama2'");

$sql4= mysql_query("update upload_file set nama_slot='$nama_slot'
										  where nama_slot='$nama2'");	
										  
$sql4= mysql_query("update upload_invois set nama_slot='$nama_slot'
										  where nama_slot='$nama2'");	
										  
$sql5= mysql_query("update sinopsis set nama_slot='$nama_slot'
										  where nama_slot='$nama2'");											  								

?>
<script>document.location.href="media.php?module=search&pesan=oke_update"</script>
<?php
		
	}
//Copyright © 2011 Andi Sholihin
?>


	  <iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="../calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

