<html>
       <head>
		      <title>Input Data Jadwal</title>
	   </head>
	   <body>
		      <?php
              
			  	
				
			
$subjek=ucwords(strtolower($_POST['subjek']));
$keterangan=ucwords(strtolower($_POST['keterangan']));

				 include 'connection.php';
			  $result=mysql_query("INSERT INTO kalendar(tgl_kalendar,
													     subjek,
														 keterangan)
											      VALUES('$_POST[tarikh_rakaman]',
														 '$subjek',
													     '$keterangan')");
				 if($result)
				 { 
                 header("location:media.php?module=kalendar_agenda&pesan=oke");
		  }
			   ?>
	  
