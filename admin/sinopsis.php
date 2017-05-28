<html>
<head>
		      <title>Form Input Kalendar Agenda</title>
				 
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
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
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
<?php 
$name = mysql_real_escape_string($_GET['id']);
$per_hal=5;
$jumlah_record=mysql_query("SELECT COUNT(*)  from maklumat_slot where nama_slot='$name'");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<?php
$name = mysql_real_escape_string($_GET['id']);
$ambil6=mysql_query("select * from slot where nama_slot='$name' ");
	$t6=mysql_fetch_array($ambil6);
	
	
	?>
    
      <?php
$name = mysql_real_escape_string($_GET['id2']);
$name2 = mysql_real_escape_string($_GET['id']);
	$ambil=mysql_query("select * from maklumat_slot where id='$name'");
	$t=mysql_fetch_array($ambil);
	
	?>
	
 <a class="btn" href="?module=maklumat_slot&id=<?php echo"$t6[nama_slot]"; ?>"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
      
    </p>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
<h2 class='head'>SINOPSIS</h2>
<form action='media.php?module=db_sinopsis&id=<?php $nama=htmlentities($t6['nama_slot'], ENT_QUOTES); echo $nama; ?>&id2=<?php echo $name; ?>' method='post' enctype='multipart/form-data' class='f-r' name="daftar_slot" >

<input name='nama_slot' type="hidden" class='input' value ="<?php echo $_GET['id'];  ?>" readonly/>

<input name='episod' type="hidden" class='input' value ="<?php echo $t['episod'];  ?>" readonly/>

<input name='bahagian' type="hidden" class='input' value ="<?php echo $t['bahagian'];  ?>" readonly/>

<input name='penceramah' type="hidden" class='input' value ="<?php echo $t['penceramah'];  ?>" readonly/>

<input name='tajuk' type="hidden" class='input' value ="<?php echo $t['tajuk_kuliah'];  ?>" readonly/>
 <table width="175" border="0" >
  <tr>
    <td></td>
  </tr>
</table>
  <table width="547" class='table table-hover'>



	<tr>
	<td width="89">Sinopsis</td><td width="7">:</td><td width="166"><textarea class='form-control1' name="sinopsis" cols="80" rows="5"> akan menjelaskan sedikit mukaddimah penting dalam setiap rukun Islam yang wajib kita ketahui.
    Pengacara memberikan penerangan yang mudah dan ringkas sebagai panduan kepada penonton dalam mendalami ilmu fardhu kifayah ini.</textarea></td>
    	
	</tr>
	
  <td width="170">Gambar</td>
    <td width="3">:</td><td width="235"><input name='fupload' type='file'  required/></td>
	
    
  
	

  </table>
  <input type="button" class="btn btn-default" value=Batal onclick=self.history.back()>
					<input type="submit" class="btn btn-primary" value="Simpan" name="submit">
                    
 
  
  <tr>
  <tr>
</form>

<p>
