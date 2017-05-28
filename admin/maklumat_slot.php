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
		echo "<div class='alert alert-success'>Data Dipadam !</div>";
	}
	else if($pesan=="oke_update"){
		echo "<div class='alert alert-success'>Berjaya Kemaskini !</div>";
	}
}
?>


<a class="btn" href="?module=search"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>


<?php 
$name = mysql_real_escape_string($_GET['id']);
$per_hal=13;
$jumlah_record=mysql_query("SELECT COUNT(*)  from maklumat_slot where nama_slot='$name'");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<?php


$name = mysql_real_escape_string($_GET['id']);
	$ambil=mysql_query("select * from slot where nama_slot='$name' ");
	$t=mysql_fetch_array($ambil);
	
	$nama=htmlentities($t['nama_slot'], ENT_QUOTES);

echo "<h2 class='head'><span class='glyphicon glyphicon-briefcase'></span> Maklumat Slot</h2>
	<div class='rp' ></div>
	";


?>
	
	<div class="col-md-2">
		
  <?php echo "<div class='col-xs-6 col-md-12'>
					<a class='thumbnail'><img class='img-responsive' src='../Infiru Files/poster/$t[poster]' width='190' height='100' /></a></div> "; ?>
                  
</div>

	
<?php
	echo "<p>";
	echo"</p>";
	
	echo "<a style='margin-bottom:10px' href='maklumat_laporan_slot.php?id=$nama' target='_blank' class='btn btn-default pull-right'><span class='glyphicon glyphicon-print'></span>  Cetak Laporan</a>";


    echo "
	<table class='table table-hover'>
	<tr>
	<td>Nama Slot</td><td>:</td><td>$t[nama_slot]</td>
	</tr>
	<tr>
	";?>
    
	<td>Tarikh Mula Tayangan</td><td>:</td><td><?php echo  $date = date('d-m-Y', strtotime($t['tarikh_mula'])) ?> </td>
    
    <?php
	echo"
	</tr>
	<tr>";?>
    
	<td>Tarikh Akhir Tayangan</td><td>:</td><td><?php echo  $date = date('d-m-Y', strtotime($t['tarikh_akhir'])) ?> </td>
    
    <?php
	echo"
	</tr>
	</table>
	";
	?>
<p>
  <?php
	
	$jum2=13-$jum;
	
	if($jum <=12)
	{
		echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Slot  <a style='color:red'>". $t['nama_slot']."</a> masih kurang $jum2 episod</div>";	
		
		?>
          <a href="?module=maklumat_episod&id=<?php echo $t['nama_slot']; ?>" class="btn btn-info"><span class='glyphicon glyphicon-plus' ></span> Tambah Maklumat Slot</a>
       

<p>
<table class="table table-hover">
	<thead>
  <tr>
  <th>Bil</th>
  <th>Tarikh</th>
    <th>Tajuk</th>
    <th>Pengacara</th>
    <th>Aksi</th>
     <th>Cetak Sinopsis</th>
  </tr>
  </thead>
  
    <?php
	
	
	
	$name2 = mysql_real_escape_string($_GET['id']);
	$query=mysql_query("SELECT * FROM maklumat_slot where nama_slot='$name2' ORDER BY
        episod ASC ");
	$i=1;
	
	
	while($row=mysql_fetch_array($query))
	{
		?>
        <tr>
          <td><?php echo $i ?></td>
            <td><?php echo  $date = date('d-m-Y', strtotime($row['tarikh'])) ?></td>
        <td><?php  echo "Episod $i-  ".  $row['tajuk_kuliah'];  echo "  (Bahagian $row[bahagian])"; ?></td>
       
         <td><?php echo $row['penceramah'] ?></td>
        
        
          <td><?php $nama2=htmlentities($row['tajuk_kuliah'], ENT_QUOTES);  echo "<a href=\"?module=update_slot&id=$row[id]&id2=$row[nama_slot]&id3=$i\"><span class='glyphicon glyphicon-refresh'></span</a>"; ?>
          <?php  echo "
		  
		  <a href=\"?module=padam_slot_comfirm&id=$row[id]&id2=$row[nama_slot]\" onClick=\"return confirm('Pasti padam Slot ini?')\"><span class='glyphicon glyphicon-remove'></span></a>"; ?></td>
          
          
  <td><?php 
			  
			  echo "<a  href=\"laporan_sinopsis.php?id=$row[id]&id2=$row[nama_slot]&id3=$i\" target='_blank' class='btn btn-default pull-left'><span class='glyphicon glyphicon-print'></span>  Cetak Sinopsis</a>";
			  ?></td>
          
          
            
            
        </tr>
       
        <?php
		$i++;
	}
	
	?>
    
		
</table>
    
    <table>
     <tr>
			<td><h4>Jumlah Episod</h4></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
              <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
              <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
              <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
              <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
			<td><b><h4><?php echo $jum; echo"/13"; ?></h4></b></td>
		</tr>
        </table>
        
       
       <?php
	}
	else
	{
		echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Slot  <a style='color:red'>". $t['nama_slot']."</a> sudah mempunyai 13 episod </div>";	
		
		
		?>
       <p>&nbsp;</p>
      <table class="table table-hover">
	<thead>
  <tr>
  <th>Bil</th>
  <th>Tarikh</th>
    <th>Tajuk</th>
    <th>Pengacara</th>
    <th>Aksi</th>
     <th>Cetak Sinopsis</th>
  </tr>
  </thead>
  
    <?php
	
	
	
	$name2 = mysql_real_escape_string($_GET['id']);
	$query=mysql_query("SELECT * FROM maklumat_slot where nama_slot='$name2' ORDER BY
        episod ASC ");
	$i=1;
	
	
	while($row=mysql_fetch_array($query))
	{
		?>
        <tr>
          <td><?php echo $i ?></td>
            <td><?php echo  $date = date('d-m-Y', strtotime($row['tarikh'])) ?></td>
        <td><?php  echo "Episod $i -  ".  $row['tajuk_kuliah'];  echo "  (Bahagian $row[bahagian])"; ?></td>
       
         <td><?php echo $row['penceramah'] ?></td>
        
        
          <td><?php $nama2=htmlentities($row['tajuk_kuliah'], ENT_QUOTES);  echo "<a href=\"?module=update_slot&id=$row[id]&id2=$row[nama_slot]&id3=$i\"><span class='glyphicon glyphicon-refresh'></span</a>"; ?>
          <?php  echo "
		  
		  <a href=\"?module=padam_slot_comfirm&id=$row[id]&id2=$row[nama_slot]\" onClick=\"return confirm('Pasti padam Slot ini?')\"><span class='glyphicon glyphicon-remove'></span></a>"; ?></td>
          
          
  <td><?php 
			  
			  echo "<a  href='laporan_sinopsis.php?id=$row[id]' target='_blank' class='btn btn-default pull-left'><span class='glyphicon glyphicon-print'></span>  Cetak Sinopsis</a>";
			  ?></td>
          
          
            
            
        </tr>
       
        <?php
		$i++;
	}
	
	?>
    
    
		
</table>
    
    <table>
     <tr>
			<td><h4>Jumlah Episod</h4></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
              <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
              <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
              <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
              <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	 <td></td>	
            <td></td>	
            <td></td>	
            <td></td>	
            <td></td>
             <td></td>	
			<td><b><h4><?php echo $jum; echo"/13"; ?></h4></b></td>
	  </tr>
</table>
        
        <p>
          <?php
	}
	

?>
        </p>
    <p></p>
<h2 class='head'><span class="glyphicon glyphicon-download"></span> INVOIS</h2>
     
     
     <p><a href="?module=upload_invois&id=<?php echo $t['nama_slot']; ?>" class="btn btn-info"><span class='glyphicon glyphicon-upload' ></span> Muat Naik Fail</a></p>
<table class="table table-hover">	
	<thead>
  <tr>
    	<th>Bil</th>
    	<th>File Name</th>
        <th>Tarikh</th>
        <th>Jenis Fail</th>
        <th>Saiz Fail (KB)</th>
        <th>Aksi</th>
  </tr>
  </thead>

    <?php
	$name5 = mysql_real_escape_string($_GET['id']);
	$query4=mysql_query("SELECT * FROM upload_invois where nama_slot='$name5'");
	
	$i3=1;
	while($row3=mysql_fetch_array($query4))
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
		  <a href=\"?module=invois_delete&id=$row3[id]&id2=$row3[nama_slot]&id3=$row3[nama_file]\" onClick=\"return confirm('Padam file ini ?')\"><span class='glyphicon glyphicon-remove'></span></a>"; ?></td>
            
         
        </tr>
        <?php
		$i3++;
	}
	?>
</table>




  
</body>
</html>
