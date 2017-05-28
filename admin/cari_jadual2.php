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

<a class="btn" onclick=self.history.back()><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a><p></p
>

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
						 $cari=$_GET['cari'];
					 $sql_1 = mysql_query("select * from kalendar where subjek like '%$cari%' OR tgl_kalendar like '%$cari%' 
					 
					 OR keterangan like '%$cari%'");
					
					$num_rows=mysql_num_rows($sql_1);

	echo"<u>$num_rows</u> rekod dijumpai";
	
	
	
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
              
              
        
        			 
	  </body>
</html>