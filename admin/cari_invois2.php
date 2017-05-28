<html><head>
<style>
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

<a class="btn" onclick=self.history.back()><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a><p></p
>


<table>
	
    	<th>ID </th>
    	<th>File Name</th>
        <th>Tarikh</th>
        <th>File Type</th>
        <th>File Size(KB)</th>
        <th>Aksi</th>
   
        
<?php 
	    $cari=$_GET['cari'];
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from upload_invois where nama_file like '%$cari%'  OR tipe_file like '%$cari%'");

$num_rows=mysql_num_rows($brg);

	echo"<u>$num_rows</u> rekod dijumpai";
	
	
	$i3=1;
	while($row3=mysql_fetch_array($brg))
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
