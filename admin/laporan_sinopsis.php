
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


$no= $_GET['id3'];
$name = mysql_real_escape_string($_GET['id']);
	$ambil=mysql_query("select * from maklumat_slot where id='$name'");
	$t=mysql_fetch_array($ambil);
	
	  $date1 = date('d-m-Y', strtotime($t['tarikh_mula']));
	  $date2 = date('d-m-Y', strtotime($t['tarikh_akhir']));
	  

$test= "<p align='right' >LAMPIRAN</p><img src='../images/tv.JPG' width='176' height='70'   style='float:right;'  /><i>PERCUMA</i>
	";
$mpdf->WriteHTML($test);

$test2="<p></p><p></p><h3><p align='center' ><b>
 <br>LEMBAGA PENAPIS FILEM MALAYSIA </br>
 <br>KEMENTERIAN DALAM NEGERI </br>
 <br>TM NET SDN BHD (451011-M) </br></b></p></h3>";
$mpdf->WriteHTML($test2);

   $test3= "
   <p></p>
   <p></p>
   <p></p>
	<table  class='tabel' border='0' align='center' >
	<tr>
	<td>TAJUK</td><td>:</td><td>$t[nama_slot] (Episod $no) : $t[tajuk_kuliah] (Bahagian $t[bahagian])</td>
	</tr>
	<tr>
	<td>BENTUK/ BIDANG</td><td>:</td><td>DVD</td>
	</tr>
	<tr>
	<td>BAHASA</td><td>:</td><td>MELAYU</td>
	</tr>
	<tr>
	<td>SARIKATA</td><td>:</td><td>-</td>
	</tr>
	<tr>
	<td>BIL. SALINAN/RIL</td><td>:</td><td></td>
	</tr>
	<tr>
	<td>NEGARA ASAL</td><td>:</td><td>Malaysia</td>
	</tr>
	<tr>
	<td>JENIS/RIL</td><td>:</td><td>Dokumentari</td>
	</tr>
	<tr>
	<td>PENGACARA</td><td>:</td><td>$t[penceramah]</td>
	</tr>
	<tr>
	<td>PENGARAH</td><td>:</td><td>Nurhafizul bin Badrul Hisham</td>
	</tr>
	<tr>
	<td>PENERBIT</td><td>:</td><td>Badrul Hisham bin Badarudin </td>
	</tr>
	<tr>
	<td>SYARIKAT PENGELUAR</td><td>:</td><td>Infiru Dynamic Production</td>
	</tr>
	
	</table>
	
	";

$mpdf->WriteHTML($test3);


$test4= "<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p align='right' >LAMPIRAN</p><img src='../images/tv.JPG' width='176' height='70'   style='float:right;'  />
	";
$mpdf->WriteHTML($test4);

 $test5= "
   <p></p>
   <p></p>
   <p></p>
	<table  class='tabel' border='1' align='center' >
	<tr>
	<td><b>TAJUK</b></td><td><b>$t[nama_slot] (Episod $no) : $t[tajuk_kuliah] (Bahagian $t[bahagian])</b></td>
	</tr>
	<tr>
	<td><b>SINOPSIS</b></td><td>$t[sinopsis]</td>
	</tr>
	
	
	</table>
	
	";

$mpdf->WriteHTML($test5);


$test6= "<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p><p></p><p></p><p align='right' >LAMPIRAN</p><img src='../images/tv.JPG' width='176' height='70'   style='float:right;'  />
	";
$mpdf->WriteHTML($test6);

$name2 = mysql_real_escape_string($_GET['id2']);
	$ambil2=mysql_query("select * from slot where nama_slot='$name2'");
	$t2=mysql_fetch_array($ambil2);

$test7= "<center><p></p><p></p><p></p><p></p><p></p><p></p><img src='../Infiru Files/sinopsis/$t2[gambar]'   width='619' height='328'/></center> ";
	
	$mpdf->WriteHTML($test7);


   
	?>
       
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>