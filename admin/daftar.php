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
<script type="text/javascript" src="pesan.js"></script>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

	
<h2 class='head'><span class="glyphicon glyphicon-briefcase"></span> TAMBAH SLOT</h2>

<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Tidak Berjaya !</div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Berjaya !</div>";
	}
}
?>




<form action="db_daftar1.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" >


 <table width="175" border="0" >
  <tr>
    <td></td>
  </tr>
</table>
  <table width="695" class='table table-hover'>
  <tr>
	<td width="170">Nama Slot</td>
	<td width="3">:</td><td width="235"><input class="form-control1" id="nama_slot" name="nama_slot" type="text"  /></td>
    	<td width="170">Poster Slot</td><td width="3">:</td><td width="235"><input name='fupload' type='file' /></td>
	</tr>
    <tr>
			<td>Tarikh Mula Tayangan</td>
			<td>:
	  <td width="218"><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form.tarikh_mula);return false;" >
	      <input type="text" class="form-control1" name="tarikh_mula" id="tarikh_mula" title="dd-mm-yyyy" />
	  </a></td>
        
        	<td>Tarikh Tamat Tayangan</td>
			<td>:
	  <td width="218"><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form.tarikh_akhir);return false;" >
	      <input type="text" class="form-control1" name="tarikh_akhir" id="tarikh_akhir" title="dd-mm-yyyy"  />
	  </a></td>
	</tr>
	
  <td width="170">Gambar Sinopsis</td>
    <td width="3">:</td><td width="235"><input name='fupload2' type='file' /></td>

  </table>
   <input type='button' class='btn btn-default' value=Batal onclick=self.history.back()>
					<input type='submit' class='btn btn-primary' value='Simpan' name='submit'>
  
  <tr>
  <tr>

</form>
  <iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="../calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>



