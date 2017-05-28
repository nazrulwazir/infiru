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

<a class="btn" href="media.php?module=profil"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

  <h2 class='head'><span class="glyphicon glyphicon-picture"></span> TUKAR GAMBAR PROFIL<br/>
</h2>
</h2>
<form action="ganti_foto_act.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
    
			<input name="user" type="hidden" value="<?php echo $_SESSION['uname']; ?>">
  </div>
		<div class="form-group">
			<label>Gambar</label>
		  <input name="foto" type="file" class="form-control1"  required="required">
		</div>		
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Semula">
		</div>																	
</form>
