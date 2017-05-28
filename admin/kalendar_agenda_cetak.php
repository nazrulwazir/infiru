<html>
       <head>
		      <title>Jadual Rakaman</title>
				 
			 <style>
			 @font-face {
    font-family: 'IstokWebRegular';
    src: url('font/IstokWeb-Regular-webfont.eot');
    src: url('font/IstokWeb-Regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/IstokWeb-Regular-webfont.woff') format('woff'),
         url('font/IstokWeb-Regular-webfont.ttf') format('truetype'),
         url('font/IstokWeb-Regular-webfont.svg#IstokWebRegular') format('svg');
    font-style: bold;

}


@font-face {
    font-family: 'TendernessRegular';
    src: url('font/Tenderness-webfont.eot');
    src: url('font/Tenderness-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/Tenderness-webfont.woff') format('woff'),
         url('font/Tenderness-webfont.ttf') format('truetype'),
         url('font/Tenderness-webfont.svg#TendernessRegular') format('svg');
    font-weight: 500;
    font-style: bold;

}
			 @media print {
input.noPrint { display: none; }
}

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
.grid { width: 300px; height: auto; overflow: auto; }
.grid td.static { width: 100px; position: fixed; background-color: white; }
.grid td.dynamic { width: 100px; }
.grid td { border: solid 1px black; }
.grid table { width: 500px; }

</style>
	   </head>
 
	
    
	   <body>
		     
			
			  <?php
                    
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
				 
			  <table border="1">
                     <tr>
                           
			              <td align="center" colspan="7"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
                         
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
               <center>
                 <p>&nbsp;                 </p>
                 <p>
                   <input class="noPrint" type="button" value="Cetak Halaman" onClick="window.print()">
                 </p>
               </center>
	   </body>
</html>