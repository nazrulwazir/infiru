
<link rel="stylesheet" href="css/style2.css" type="text/css"  />
<?php
 // Define relative path from this script to mPDF
 $nama_dokumen='Laporan Slot'; //Beri nama file PDF hasil.
define('_MPDF_PATH','MPDF57/');
include(_MPDF_PATH . "mpdf.php");

$mpdf = new mPDF('c', 'A4'); 

ob_start(); 

?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->
<?php
include 'connection.php';
?> 
  


      <?php
  

// LOAD a stylesheet
$stylesheet = file_get_contents('../css/style2.css');

$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$name = mysql_real_escape_string($_GET['id']);
	$ambil=mysql_query("select * from slot where nama_slot='$name'");
	$t=mysql_fetch_array($ambil);
	
	  $date1 = date('d-m-Y', strtotime($t['tarikh_mula']));
	  $date2 = date('d-m-Y', strtotime($t['tarikh_akhir']));
	  
$test= "<h2 class='head'><center>Laporan Slot $t[nama_slot]</center></h2>
	";

 

$test9="<img src='../images/production.PNG' width='176' height='70'   style='float:left;'  /><font size='10'><b>INFIRU DYNAMIC PRODUCTION<br>
No 29,Jalan Intan 2,</br>
Bandar Baru,<br>
36000 Teluk Intan,Perak</br><br>NO TELEFON: 013-520 2523 / 018-323 1053 ;</br></font></b>
"; 
$mpdf->WriteHTML($test9);

$test10="<hr size='16px' color='#000000'> </hr>";
$mpdf->WriteHTML($test10);

 $test8="Tarikh Cetak : ".date('d/m/Y');
	  $mpdf->WriteHTML($test8);

$mpdf->WriteHTML($test);

	$test2= "<div class='foto'><img src='../Infiru Files/poster/$t[poster]' width='161' height='146' /></div> ";
	
	$mpdf->WriteHTML($test2);

   $test3= "
   <p></p>
	<table class='tabelform tabpad' >
	<tr>
	<td>Nama Slot</td><td>:</td><td>$t[nama_slot]</td>
	</tr>
	<tr>
	<td>Tarikh Mula Tayangan</td><td>:</td><td>$date1</td>
	</tr>
	<tr>
	<td>Tarikh Akhir Tayangan</td><td>:</td><td>$date2</td>
	</tr>
	</table>
	
	";
	
	$mpdf->WriteHTML($test3);
	?>
     
      
      <?php $test6="<p></p>";  $mpdf->WriteHTML($test6); ?>
      <?php
	$test5="
</p>
<table class='tabelform tabpad'  border='1'>
  <thead>
  <tr>
  <th>BIL</th>
  <th>TARIKH</th>
    <th>TAJUK</th>
    <th>PENGACARA</th>
	
  </tr>
  </thead>";
  $mpdf->WriteHTML($test5);
  ?>
    </p>
 <p> </p>
    <?php
	
	$name = mysql_real_escape_string($_GET['id']);
	$query=mysql_query("SELECT * FROM maklumat_slot where nama_slot='$name' ORDER BY
        episod ASC
LIMIT 13");
	$i=1;
		
	 
	while($row=mysql_fetch_array($query))
	{
		 $date4 = date('d-m-Y', strtotime($row['tarikh']));
        $test4="
        <tr>
          <td> $i </td>
        
            <td>   $date4 </td>
        <td> Episod $i -   $row[tajuk_kuliah]  (Bahagian $row[bahagian])</td>
       
         <td> $row[penceramah] </td>
       
         
         
    </tr>";
	$mpdf->WriteHTML($test4);
	?>
        <?php
		$i++;
	}
	
	?>
</table>
</table>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>