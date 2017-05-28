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
			include 'connection.php';
			
			if($_POST['submit']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$slot=mysql_real_escape_string($_POST['nama_slot']);
				
				$nama=mysql_real_escape_string(ucwords(strtolower($_POST['nama'])));
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 5044070){
						$lokasi2 = $nama.'.'.$file_ext;
						$lokasi = 'Infiru Files/document/'.$nama.'.'.$file_ext;
						
						
						$structure = './Infiru Files/document/';
						
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO upload_file VALUES(NULL , '$slot','$tgl','$nama', '$file_ext', '$file_size', '$lokasi','$lokasi2')");
						if($in){
?>
<script>document.location.href="media.php?module=maklumat_slot&id=<?php echo $_POST[nama_slot]; ?>&pesan=oke"</script>
<?php
						}else{
							echo "<div class='alert alert-danger'>Gagal upload file !</div>";
						}
					}else{
						echo "<div class='alert alert-danger'>ERROR: File tersebut terlalu besar !</div>";
					}
				}else{
					echo "<div class='alert alert-danger'>ERROR: hanya upload file yang terdiri dari .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip sahaja !</div>";
				}
            }
?>
<?php
$name = mysql_real_escape_string($_GET['id']);
$ambil=mysql_query("select * from slot where nama_slot='$name' ");
	$t=mysql_fetch_array($ambil);
	
	
	?>
    
<a class="btn" href="?module=maklumat_slot&id=<?php echo"$t[nama_slot]"; ?>"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<h2 class='head'><span class="glyphicon glyphicon-file"></span> Fail Sinopsis</h2>


<form action="" method="post" enctype="multipart/form-data">


        <p>
  <p>Nama File  </p>
  <p>
    <input type="text" name="nama"  class="form-control1" placeholder="Sinopsis Slot . ." value="Sinopsis Slot <?php echo $_GET['id'];  ?> Episod" required />
    
      <input name="nama_slot" type="hidden" value="<?php echo $_GET['id'];  ?>">
      
    <label><br />
      <p>
      Attach Document</label>
      
   
     
  
    <input name="file" type="file" class="form-control1">
  <p>
    <input type='button' class='btn btn-default' value=Batal onclick=self.history.back()>
    <input type="submit"  name="submit" class="btn btn-info" value="Simpan">
  </p>
    <p>&nbsp;</p>
</form>