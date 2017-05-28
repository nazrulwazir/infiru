<html>
       <head>
		      <title>Kalendar Agenda</title>
				 
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
.grid { width: 300px; height: auto; overflow: auto; }
.grid td.static { width: 100px; position: fixed; background-color: white; }
.grid td.dynamic { width: 100px; }
.grid td { border: solid 1px black; }
.grid table { width: 500px; }

</style>
	   </head>
	   <body>
       <?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Tidak Berjaya !</div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Berjaya !</div>";
	}
	else if($pesan=="oke_padam"){
		echo "<div class='alert alert-success'>Jadual Dipadam !</div>";
	}
	else if($pesan=="oke_update"){
		echo "<div class='alert alert-success'>Berjaya Kemaskini !</div>";
	}
}
?>
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
 
  			  $year  = $cYear;
              $month = $cMonth;
			  
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
				 
		     <h2 class='head'><span class="glyphicon glyphicon-calendar"></span> JADUAL RAKAMAN</h2>
             
            <form action="cari_jadual.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
      <input type="text" class="form-control" placeholder="Masukkan Pencarian di sini .." aria-describedby="basic-addon" name="cari">	 
	</div>
</form>

<p></p>
			  <a style="margin-bottom:10px" href="<?php echo "jadual_cetak.php?month=". $month . "&year=" . $year; ?>" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span> Cetak</a>
			 
			 <table class="table table-hover" border="0">
                     <tr>
                          <td align="left"><a href="<?php echo $_SERVER["PHP_SELF"] . "?module=kalendar_agenda&month=". $prev_month . "&year=" . $prev_year; ?>"><span class="glyphicon glyphicon-arrow-left"></span>  </a></td>
			              <td align="center" colspan="5"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
                          <td align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?module=kalendar_agenda&month=". $next_month . "&year=" . $next_year; ?>"><span class="glyphicon glyphicon-arrow-right"></span>  </a></td>
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
						  
						 $date= ($i - $startday + 1).'-'.$cMonth.'-'.$cYear;
						  
		                  $hs       = mysql_query($sql_1);
		                  $jmlAcara = mysql_num_rows($hs);
		                    
					      echo "<td  width=250 valign='top' height='100px'".($jmlAcara > 0 ? " " : '').">";
		                  echo ($i - $startday + 1);
		                    
					      if($jmlAcara > 0)
				          {
			                 while($acara = mysql_fetch_array($hs))
				             {
							
				               echo "<b>  <font size=2>$acara[subjek]<p>$acara[keterangan]</b></P></font>";
							   echo "<a href='?module=update_jadual&id=$acara[id]'><span class='glyphicon glyphicon-refresh'></span></a>"; 
					 echo "<a href=\"?module=padam_jadual&id=$acara[id]\" onClick=\"return confirm('Pasti padam jadual ini?')\"><span class='glyphicon glyphicon-remove'></span></a>";
		  
			                 }
		                  }
		                    echo " <a href='?module=simpan_jadual&date=$date'><span class='glyphicon glyphicon-plus'></span></a>"; 
							
					      echo "</td>";
	                   }
	                  
					   if(($i % 7) == 6 )
			           {
		                   echo "</tr>";
	                   }
			         }
            
			         ?>			
              </table>
	   </body>
</html>