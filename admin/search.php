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
<!doctype html>
<html>
    <head>
       
        <style>
            /*custom css*/
            .pagination, .pager{
                margin-top: 0px
            }
            .table{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <?php
//        includekan fungsi paginasi
//        silahkan di komen atau di hapus saja baris yang tidak ingin digunakan
        include 'pagination1.php';
        include 'pagination2.php';
        include 'pagination3.php';
        include 'pagination4.php';
        include 'pagination5.php';

//        pagination config start
        $q = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : ''; // untuk keyword pencarian
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
        $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
        $rpp = 1; // jumlah record per halaman

        $db_link = mysqli_connect('localhost', 'root', '', 'infiru'); // sesuaikan username dan password mysqli anda
        $sql = "SELECT * FROM slot  ORDER BY
        UNIX_TIMESTAMP(tarikh_mula) ASC";
		
		
		
		 // query silahkan disesuaikan
        $result = mysqli_query($db_link, $sql); // eksekusi query

        $tcount = mysqli_num_rows($result); // jumlah total baris
        $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; // jumlah total halaman
        $count = 0; // untuk paginasi
        $i = ($page - 1) * $rpp; // batas paginasi
        $no_urut = ($page - 1) * $rpp; // nomor urut
        $reload = $_SERVER['PHP_SELF'] . "?module=search&q=". $q . "&amp;adjacents=" . $adjacents; // untuk link ke halaman lain
//        pagination config end
        ?>
      
                   <h2 class='head'><span class="glyphicon glyphicon-search"></span> SLOT</h2>
             
            <!--form pencarian-->
          <?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Tidak Berjaya !</div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Berjaya !</div>";
	}
	else if($pesan=="oke_padam"){
		echo "<div class='alert alert-success'>Slot Dipadam !</div>";
	}
	else if($pesan=="oke_update"){
		echo "<div class='alert alert-success'>Berjaya Kemaskini !</div>";
	}
}
?>
<body>
<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from slot");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

 
<table class="col-md-2">

		<tr>
			<td>Jumlah Slot</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
</table>

            <!--tabel-->
          <p>&nbsp;</p>
        <p>&nbsp;</p>
              
                
                    <table class="table table-hover">
	<thead>
     <form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
      <input type="text" class="form-control" placeholder="Cari di sini .." aria-describedby="basic-addon1" name="cari">	 
	</div>
</form>

  <tr>

  <p></p>
  <th>Bil</th>
    <th>Tajuk</th>
    <th>Tarikh Mula</th>
    <th>Tarikh Akhir</th>
	<th>Aksi</th>
  </tr>
  </thead>
        
                            <?php
                            while (($count < $rpp) && ($i < $tcount)) {
								
                                mysqli_data_seek($result, $i);
                                $row = mysqli_fetch_array($result);
								$name4 = mysql_real_escape_string($row['nama_slot']);
                                ?>
                                <tr>
                                    <td width="80px">
                                        <?php echo ++$no_urut; ?> 
                                    </td>

                                   <td><?php echo $row["nama_slot"] ?></td>
 
         <td><?php echo  $date = date('d-m-Y', strtotime($row['tarikh_mula'])) ?></td>
         <td><?php echo $date = date('d-m-Y', strtotime($row['tarikh_akhir'])) ?></td>
 
 
        <td><?php $nama=htmlentities($row['nama_slot'], ENT_QUOTES) ; echo "<a href='?module=maklumat_slot&id=$nama' class='btn btn-info'><span class='glyphicon glyphicon-search'></span> Lihat</a>"; ?>
		  
		  <a onClick="if(confirm('Padam data slot ini ??')){ location.href='?module=padam_comfirm&id=<?php echo $name4 ?>' }" class="btn btn-danger"><span class='glyphicon glyphicon-remove'></span> Padam</a>
          
          <?php  $nama=htmlentities($row['nama_slot'], ENT_QUOTES) ; echo "<a href='?module=update&id=$row[id]&id2=$nama' class='btn btn-warning'><span class='glyphicon glyphicon-refresh'></span> Kemaskini</a>"; ?>
         
          </td>
        </tr>
                                <?php
                                $i++;
                                $count++;
                            }
                            ?>
                        </tbody>
                    </table>
             

       
                   
                 
                    <?php echo paginate_three($reload, $page, $tpages, $adjacents); ?>
                  
            
    </body>
</html>

<!--harviacode.com-->