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
$per_hal=13;
$name = mysql_real_escape_string($_GET['id2']);
$jumlah_record=mysql_query("SELECT COUNT(*)  from maklumat_slot where nama_slot='$name'");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<?php
$name = mysql_real_escape_string($_GET['id2']);
$ambil6=mysql_query("select * from slot where nama_slot='$name' ");
	$t6=mysql_fetch_array($ambil6);
	
	
	?>
<a class="btn" href=""><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php

include ('connection.php');

$name = mysql_real_escape_string($_GET['id']);
$ambil=mysql_query("select * from maklumat_slot where id='$name'");
	$t=mysql_fetch_array($ambil);
	
	
	
	$nama=htmlentities($t['nama_slot'], ENT_QUOTES);
	
	echo "<h2 class='head'>Kemaskini Maklumat Slot</h2> 
	<form action='media.php?module=db_update_maklumat&id=$t[id]&id2=$nama' method='post' enctype='multipart/form-data' name='update' >
	
	<table class='tabelform tabpad'>
	
	
	<tr>"; ?>
	
	<td>Tajuk Kuliah</td><td>:</td><td> <input class='form-control1' type="text" name='tajuk_kuliah' value="<?php echo $t['tajuk_kuliah']; ?>" ></td>
    
    
    
    
    <?php
	echo"
	<td>Tarikh</td><td>:</td><td><a href='javascript:void(0)' onClick='if(self.gfPop)gfPop.fPopCalendar(document.update.tarikh);return false;'> <input class='form-control1' type='text' name='tarikh' value='$t[tarikh]' title='dd-mm-yyyy' value='$t[tarikh]' /></a></td>
</tr>

<tr>
	<td>Penceramah</td><td>:</td><td> <select name='penceramah' class='form-control1' >
	  <option > $t[penceramah] </option>
	   <option value='USTAZ ABDUL FATAH'>Ustaz Abdul Fatah</option>
	  <option value='USTAZ AHMAD KHAIRI'>Ustaz Ahmad Khairi</option>
	  <option value='USTAZ MUHD LOTFI'>Ustaz Muhd Lutfi</option>
	  <option value='USTAZ MUHD RIZAL'>Ustaz Muhd Rizal</option>
	  </select></td>
    	
		<td>Episod</td><td>:</td><td> <input class='form-control1' type='text' name='episod' value='$_GET[id3]' ></td>
		
	</tr>
	
	
	
	<tr>
	<td>Bahagian</td><td>:</td><td> <input class='form-control1' type='text' name='bahagian' value='$t[bahagian]' ></td>
        </tr>    
            
</table>
	 <input type='button' class='btn btn-default' value=Batal onclick=self.history.back()>
					<input type='submit' class='btn btn-primary' value='Simpan' name='submit'>
                    
	
	
	"; 
	?>
    
    
     <?php

$name3 = mysql_real_escape_string($_GET['id2']);
	$ambil=mysql_query("select * from slot where nama_slot='$name3'");
	$t=mysql_fetch_array($ambil);
	
echo "<h2 class='head'>Maklumat Slot</h2>
	<div class='rp' ></div>
	";
	?>
    <table class="col-md-2">
		<tr>
			<td>Jumlah Episod</td>		
			<td><?php echo $jum; echo"/13"; ?></td>
		</tr>
		<tr>
		</tr>
</table>

</p>
<p>&nbsp; </p>
 <table class='table table-hover'>
	<thead>
  <tr>
  <th>Ep</th>
  <th>Bah</th>
  <th>Tarikh</th>
    <th>Tajuk Kuliah</th>
    <th>Penceramah</th>
  </tr>
  </thead>

    <?php
	$name = mysql_real_escape_string($_GET['id2']);
	$query=mysql_query("SELECT * FROM maklumat_slot where nama_slot='$name' ORDER BY
        episod ASC
LIMIT 13");
	$i=1;
	
	while($row=mysql_fetch_array($query))
	{
		?>
        <tr>
              <td><?php echo $row['episod'] ?></td>
           <td><?php echo $row['bahagian'] ?></td>
            <td><?php echo $row['tarikh'] ?></td>
        <td><?php echo $row['tajuk_kuliah'] ?></td>
       
         <td><?php echo $row['penceramah'] ?></td>
       
         

       
    
    
    
            
         
        </tr>
        <?php
		$i++;
	}
	
	?>
</table>
     <iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
</body>
</html>


</body>
</html>

   
