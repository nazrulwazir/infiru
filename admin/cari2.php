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


 <table width="203">
	<thead>
    
  <tr>
  <th>Bil</th>
    <th>Tajuk</th>
    <th>Tarikh Mula</th>
    <th>Tarikh Akhir</th>
	<th>Aksi</th>
  </tr>
  </thead>
  

   
        
<?php 
	$cari=$_GET['cari'];
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from slot where nama_slot like '%$cari%'  OR tarikh_mula like '%$cari%'");

$num_rows=mysql_num_rows($brg);

	echo"<u>$num_rows</u> rekod dijumpai";
	
	
	$i=1;
	while($row2=mysql_fetch_array($brg))
	{
		?>
        <tr>
         <td><?php echo $i; ?></td>
        <td><?php echo $row2['nama_slot'] ?></td>
       
         <td><?php echo $row2['tarikh_mula'] ?></td>
         <td><?php echo $row2['tarikh_akhir'] ?></td>
 
        <td><?php  echo "<a href='?module=maklumat_slot&id=$row2[nama_slot]' class='btn btn-info'>Detail</a>"; ?>
		  
		  <a onClick="if(confirm('Padam data slot ini ??')){ location.href='?module=padam_comfirm&id=<?php echo $row2['nama_slot']; ?>' }" class="btn btn-danger">Padam</a>
          
          <?php  echo "<a href='?module=update&id=$row2[id]&id2=$row2[nama_slot]' class='btn btn-warning'>Edit</a>"; ?>
              
                
          </td>
    
    
   
        </tr>
        <?php
		$i++;
	}
	
	?>
    </table>