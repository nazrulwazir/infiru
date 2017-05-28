<html><head>

<body>

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
$name = mysql_real_escape_string($_GET['id']);
$per_hal=5;
$jumlah_record=mysql_query("SELECT COUNT(*)  from maklumat_slot where nama_slot='$name'");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<?php
$name = mysql_real_escape_string($_GET['id']);
$ambil6=mysql_query("select * from slot where nama_slot='$name' ");
	$t6=mysql_fetch_array($ambil6);
	
	
	?>
<a class="btn" href="?module=maklumat_slot&id=<?php echo"$t6[nama_slot]"; ?>"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<h2 class='head'>TAMBAH MAKLUMAT SLOT</h2>
<form action='media.php?module=db_maklumat&id=<?php $nama=htmlentities($t6['nama_slot'], ENT_QUOTES); echo $nama; ?>' method='post' enctype='multipart/form-data' class='f-r' name="daftar_slot" >
 <table width="175" border="0" >
  <tr>
    <td></td>
  </tr>
</table>
  <table width="547" class='table table-hover'>
  <tr>
	 <td width="89">Tajuk Slot</td>
	<td width="7">:</td><td width="166"><input class="form-control1" name='nama_slot' type="text" class='input' value ="<?php echo $_GET['id'];  ?>" readonly/></td>



    	 <td width="55">Tajuk Kuliah</td>
	<td width="14">:</td><td width="178"><input class="form-control1"name='tajuk_kuliah' type="text" required oninvalid="setCustomValidity('Sila masukkan tajuk kuliah')"oninput="setCustomValidity('')" /></td>

	</tr>
	<tr>
	<td width="89">Pengacara</td><td width="7">:</td><td width="166">
    <select name='penceramah' class="form-control1">
	  <option value="" selected='selected'></option>
       <option value="Ustaz Abdul Fattah Bin Awang">Ustaz Abdul Fattah Bin Awang</option>
	  <option value="Ustaz Ahmad Khairi Bin Jamaluddin">Ustaz Ahmad Khairi Bin Jamaluddin</option>
	  <option value="Ustaz Ahmad Lotfi bin Samsudin">Ustaz Ahmad Lotfi bin Samsudin</option>
	  <option value="Ustaz Muhd Rizal Bin Abu Bakar">Ustaz Muhd Rizal Bin Abu Bakar</option>
	  </select></td>
    	<td width="55">Episod</td>
    	<td width="14">:</td>
    	<td width="178"><select name='episod'>
    	  <option value='none' selected='selected'></option>
    	 
                
    	  <?php
			for($h=1; $h<=13; $h++) 
			{ 
				echo"<option value=",$h,">",$h,"</option>";
			} 
		
			
			?>
    	  
  	  </select></td>
	</tr>
	   

	  <td>Bahagian</td>
	  <td>:</td>
	  <td><select name='bahagian'>
	    <option value='none' selected='selected'></option>
	    ";
                
    	  
	    <?php
			for($h=1; $h<=7; $h++) 
			{ 
				echo"<option value=",$h,">",$h,"</option>";
			} 
		
			
			?>
	    
    	  
	    </select>
        <td >Sinopsis</td><td >:</td><td ><textarea  name="sinopsis" cols="100" rows="5">Slot <?php echo $_GET['id']; ?> Episod akan menjelaskan sedikit mukaddimah penting dalam setiap rukun Islam yang wajib kita ketahui. Pengacara memberikan penerangan yang mudah dan ringkas sebagai panduan kepada penonton dalam mendalami ilmu fardhu kifayah ini.</textarea></td>
	  </tr>
   
	
  </table>
  
  <input type="button" class="btn btn-default" value=Batal onclick=self.history.back()>
					<input type="submit" class="btn btn-primary" value="Simpan" name="submit">
                    
 
  
  <tr>
  <tr>
</form>

<p>
  <?php
$name = mysql_real_escape_string($_GET['id']);
	$ambil=mysql_query("select * from slot where nama_slot='$name'");
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
    <th>Pengacara</th>
  </tr>
  </thead>
   

        

    <?php
	
	$name = mysql_real_escape_string($_GET['id']);
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
      <iframe width=174 height=189 name="gToday:normal:kalender/normal.js" id="gToday:normal:kalender/normal.js" src="kalender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

</body>
</html>


</body>
</html>


