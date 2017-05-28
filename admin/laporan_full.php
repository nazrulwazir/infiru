
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

	
	  
$test= "<h2 class='head'><center>Laporan Slot INFIRU DYNAMIC PRODUCTION</center></h2>
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




      
      $test6="<p></p>";  $mpdf->WriteHTML($test6); ?>
      <?php
	$test5="
</p>
<table class='tabelform tabpad'  border='1'>
  <thead>
  <tr>
  <th>Bil</th>
    <th>Tajuk</th>
    <th>Tarikh Mula</th>
    <th>Tarikh Akhir</th>
	
  </tr>
  </thead>";
  $mpdf->WriteHTML($test5);
  ?>
    </p>
 <p> </p>
    <?php
	$ambil=mysql_query("SELECT * FROM slot  ORDER BY
        UNIX_TIMESTAMP(tarikh_mula) ASC");
	
	$i=1;
	
	  
	while($row=mysql_fetch_array($ambil))
	{
		
		  $date1 = date('d-m-Y', strtotime($row['tarikh_mula']));
	  $date2 = date('d-m-Y', strtotime($row['tarikh_akhir']));
		
        $test4="
        <tr>
          <td> $i </td>
           <td> $row[nama_slot] </td>
            <td> $date1 </td>
        <td> $date2</td>
    </tr>";
	$mpdf->WriteHTML($test4);
	?>
        <?php
		$i++;
	}
	
	?>
</table>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>