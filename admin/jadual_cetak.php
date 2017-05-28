<link rel="stylesheet" href="css/style3.css" type="text/css"  />
<?php
 // Define relative path from this script to mPDF
 $nama_dokumen='Laporan Slot'; //Beri nama file PDF hasil.
define('_MPDF_PATH','MPDF57/');
include(_MPDF_PATH . "mpdf.php");

$mpdf = new mPDF('c', 'A4-L'); 

ob_start(); 

?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->
<?php
include 'connection.php';
?> 

  <?php
                // LOAD a stylesheet
$stylesheet = file_get_contents('../css/style3.css');

$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text
			  $monthNames = Array("Januari", "Februari", "Mac", "April", "Mei", "Jun", "Julai", 
                                  "Ogos", "September", "Oktober", "November", "Desember");
              ?>

              <?php
                 
			  if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
              if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
                 
			  ?>

              <?php
              $cMonth = $_REQUEST["month"];
              $cYear  = $_REQUEST["year"];
 
              $prev_year  = $cYear;
              $next_year  = $cYear;
              $prev_month = $cMonth-1;
              $next_month = $cMonth+1;
 
              if($prev_month == 0 ) 
			  {
                 $prev_month = 12;
                 $prev_year = $cYear - 1;
              }

			  if($next_month == 13 )
			  {
                 $next_month = 1;
                 $next_year = $cYear + 1;
              }
              ?>
				 
			  <table border="1" style="overflow: wrap">
                     <tr>
                           
			              <td align="center" colspan="7" style="overflow: wrap"><strong><?php echo "Jadual Rakaman Bulan ".$monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
                         
                     </tr>
                     <tr>
                          <th width=250>AHAD</th>
                          <th width=250>ISNIN</th>
                          <th width=250>SELASA</th>
                          <th width=250>RABU</th>
                          <th width=250>KHAMIS</th>
                          <th width=250>JUMAAT</th>
                          <th width=250>SABTU</th>
                     </tr>
            
			         <?php
						
                     $timestamp = mktime(0,0,0,$cMonth,1,$cYear);
                     $maxday    = date("t",$timestamp);
                     $thismonth = getdate ($timestamp);
                     $startday  = $thismonth['wday'];
                     
					 for ($i=0; $i<($maxday+$startday); $i++) 
			         {
	                   if(($i % 7) == 0 ) 
			           {
		                   echo "<tr>";
	                   }
	                   
					   if($i < $startday)
			           {
		                  echo "<td></td>";
	                   }
			           else
			           {
		                   include 'connection.php';
		
		                  $sql_1    = "SELECT * FROM kalendar WHERE tgl_kalendar='"
						  .($i - $startday + 1).'-'.$cMonth.'-'.$cYear."'";
					  
		                  $hs       = mysql_query($sql_1);
		                  $jmlAcara = mysql_num_rows($hs);
		                    
					      echo "<td  width=250 valign='top' height='100px'".($jmlAcara > 0 ? " " : '').">";
		                  echo ($i - $startday + 1);
		                    
					      if($jmlAcara > 0)
				          {
			                 while($acara = mysql_fetch_array($hs))
				             {
							
				               echo "<b>  <font size=2>$acara[subjek]<p>$acara[keterangan]</b></P></font>";
					
			                 }
		                  }
		                    
					      echo "</td>";
	                   }
	                  
					   if(($i % 7) == 6 )
			           {
		                   echo "</tr>";
	                   }
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