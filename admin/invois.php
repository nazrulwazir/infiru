<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 5px;
	 font-family: 'IstokWebRegular';
	 font-size:14px;
	 vertical-align:top;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #CCCCCC;
	 font-family: 'IstokWebRegular';
	 font-size:14px;
	 vertical-align:top;
 
}
</style>



<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Tidak Berjaya !</div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Berjaya !</div>";
	}
	else if($pesan=="oke_padam"){
		echo "<div class='alert alert-success'>Episod Dipadam !</div>";
	}
	else if($pesan=="oke_update"){
		echo "<div class='alert alert-success'>Berjaya Kemaskini !</div>";
	}
}
?>
 <?php
			include 'connection.php';
			
			if($_POST['submit']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				
				
				$nama=ucwords(strtolower($_POST['nama']));
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 5044070){
						$lokasi2 = $nama.'.'.$file_ext;
						$lokasi = 'Infiru Files/invoice/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO upload_invois VALUES(NULL ,'$tgl','$nama', '$file_ext', '$file_size', '$lokasi', '$lokasi2')");
						if($in){
							header("location:?module=invois&pesan=oke");
						
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

<a class="btn" href="?module=search"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<h2 class='head'><span class="glyphicon glyphicon-upload"></span> MUAT NAIK INVOIS</h2>

<?php

$ambil=mysql_query("select * from slot where nama_slot='$_GET[id]' ");
	$t=mysql_fetch_array($ambil);
	
	
	?>
<form action="" method="post" enctype="multipart/form-data">


        <p>
  <p>Nama File  </p>
  <p>
    <input type="text" name="nama"  class="form-control1" placeholder="Invoice Slot . ." required />
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


<h2 class='head'><span class="glyphicon glyphicon-download"></span> INVOIS</h2>
     
 <form action="cari_invois.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
      <input type="text" class="form-control" placeholder="Cari di sini  . ." aria-describedby="basic-addon1" name="cari">	 
	</div>
</form>
<p></p>
<table>
	
    	<th>ID </th>
    	<th>File Name</th>
        <th>Tarikh</th>
        <th>File Type</th>
        <th>File Size(KB)</th>
        <th>Aksi</th>

    <?php
	$query3=mysql_query("SELECT * FROM upload_invois");
	
	$i3=1;
	while($row3=mysql_fetch_array($query3))
	{
		?>
        <tr>
         <td><?php echo $i3; ?></td>
        <td><?php echo $row3['nama_file'] ?></td>
         <td><?php echo $row3['tanggal_upload'] ?></td>
        <td><?php echo $row3['tipe_file'] ?></td>
        <td><?php echo $row3['ukuran_file'] ?></td>
        	 <td>
             
              <?php  echo "<a href='$row3[file]'><span class='glyphicon glyphicon-search'></span</a>";?>
              
          <?php  echo "
		  <a href=\"?module=invois_delete&id=$row3[id]\" onClick=\"return confirm('Padam file ini ?')\"><span class='glyphicon glyphicon-remove'></span></a>"; ?>
          
         
          
          </td>
            
         
        </tr>
        <?php
		$i3++;
	}
	?>
</table>
    
    <p></p>

  
</body>
</html>
