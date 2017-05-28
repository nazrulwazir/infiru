 <?PHP
	 include 'connection.php';
		 
			  $pecah = explode("/", $_POST['tarikh_rakaman']);
              $date  = $pecah[2];
              $month = $pecah[1];
              $year  = $pecah[0];
			
		      $tgl   = ltrim($date,'0');
			  $bln   = ltrim($month,'0');
				 
		      $jadwal_kalendar = "$tgl-$bln-$year";

				
			  mysql_query("UPDATE  kalendar SET tgl_kalendar='$jadwal_kalendar',
													     subjek='$_POST[subjek]',
														 keterangan  '$_POST[keterangan]'
											             where id='$_POST[id]'");
				 
		       header('location:media.php?module=maklumat_jadual');

			   ?>
               
             
										
             
		