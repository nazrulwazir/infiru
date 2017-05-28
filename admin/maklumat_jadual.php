<html>
       <head>
		      <title>Tampil Data Jadwal Agenda</title>
				 
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
	   <body>
<?php 
$per_hal=31;
$jumlah_record=mysql_query("SELECT COUNT(*) from kalendar");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?><?php
include ("connection.php");

?>

       <h2 class='head'><span class="glyphicon glyphicon-search"></span> MAKLUMAT RAKAMAN</h2>
		     <a href="?module=simpan_jadual" class="btn btn-info"><span class='glyphicon glyphicon-plus' ></span>Tambah Jadual</a>
				 
                  <form action="cari_jadual.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
      <input type="text" class="form-control1" placeholder="Masukkan maklumat carian di sini .." aria-describedby="basic-addon1" name="cari">	 
	</div>
</form>
			 
				 
		      <table border="0">
                     <tr>
						  <th>No.</th>
						  <th>Tarikh ("dd-mm-yy")</th>
						  <th>Waktu</th>
						  <th>Maklumat</th>
                          <th>Aksi</th>
				     </tr>
						 
					 <?php
						 
					
					
						 
					 $no = 1;
						 
					 $sql_1 = mysql_query("SELECT * FROM kalendar ORDER BY tgl_kalendar ASC limit $start, $per_hal");
					 $sql_2 = mysql_query("SELECT * FROM kalendar ORDER BY tgl_kalendar ASC ");
					 while($a=mysql_fetch_array($sql_1))
				     {
				     ?>
						
						
							 
						<?php
						#Merapikan keluaran untuk format teks untuk keterangan
						$keterangan = nl2br($a['keterangan']);
						?>
						
						<tr>
							 <td ><?php echo"$no"; ?></td>
							 <td ><?php echo"$a[tgl_kalendar]"; ?></td>
						     <td ><?php echo"$a[subjek]"; ?></td>
							 <td><?php echo"$keterangan";?></td>
                             <td>
		  
		<a onClick="if(confirm('Padam data ini ??')){ location.href='?module=padam_jadual&id=<?php echo $a['id']; ?>' }" class="btn btn-danger">Padam</a>
          
          <?php  echo "<a href='?module=update_jadual&id=$a[id]' class='btn btn-warning'>Edit</a>"; ?>
          </td>
						</tr>
							 
					    <?php $no++; ?>
							 
					  <?php
					  } 
					  ?>
              </table>	
              
                <ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?module=maklumat_jadual&page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>
        
        			 
	  </body>
</html>