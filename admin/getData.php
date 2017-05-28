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
<?php
if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');
    
    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 10;
    
    //get number of rows
    $queryNum = $db->query("SELECT COUNT(*) as postNum FROM slot");
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['postNum'];
    
    //initialize pagination class
    $pagConfig = array('baseURL'=>'getData.php', 'totalRows'=>$rowCount, 'currentPage'=>$start, 'perPage'=>$limit, 'contentDiv'=>'posts_content');
    $pagination =  new Pagination($pagConfig);
    
	?>
    
         <table class="table table-hover">
	<thead>
    
  <tr>
     <form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
      <input type="text" class="form-control" placeholder="Cari di sini .." aria-describedby="basic-addon1" name="cari">	 
	</div>
</form>

  <p></p>
  <th>Bil</th>
    <th>Tajuk</th>
    <th>Tarikh Mula</th>
    <th>Tarikh Akhir</th>
	<th>Aksi</th>
  </tr>
  </thead>
  
  <?php
    //get rows
    $query = $db->query("SELECT * FROM slot  ORDER BY
        UNIX_TIMESTAMP(tarikh_mula) LIMIT $start,$limit");
    
    if($query->num_rows > 0){ ?>
       
        <?php
		
		$i=1;
            while($row = $query->fetch_assoc()){ 
                $postID = $row['id'];
				$name4 = mysql_real_escape_string($row['nama_slot']);
        ?>
             <tr>
         <td><?php echo $i ; ?></td>
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
	}
	?>
    </table>
        <?php } ?>
       
        <?php echo $pagination->createLinks(); ?>
<?php 
}
?>