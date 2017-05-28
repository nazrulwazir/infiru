<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LAPORAN SLOT</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="css/print.css" type="text/css"  />
</head>
<style>
@media print {
input.noPrint { display: none; }
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
<body class="body">
<div id="wrapper">
<?php
include ('connection.php');

?>
<h2 class='head'>LAPORAN SLOT</h2>
 
        <table width="203" >
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
	$query=mysql_query("SELECT * FROM slot");
	$i=1;
	
	while($row=mysql_fetch_array($query))
	{
		?>
        <tr>
         <td><?php echo $i; ?></td>
        <td><?php echo $row['nama_slot'] ?></td>
       
         <td><?php echo $row['tarikh_mula'] ?></td>
         <td><?php echo $row['tarikh_akhir'] ?></td>
 
        <td><?php  echo "<a href=\"maklumat_laporan_slot.php?id=$row[nama_slot]\"><img border='0' alt='Lihat' src='images/print2.png' width='25' height='20'></a>"; ?>
        
        
      
          </td>
    
    
   
        </tr>
        <?php
		$i++;
	}
	
	?>
    </table>
	<div style="text-align:center;padding:20px;">
	
  <input class="noPrint" type="button" value="Cetak Halaman" onclick="window.print()">
	</div>
</div>
</body>
</html>
