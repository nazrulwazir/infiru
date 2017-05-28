<html>
       <head>
		      <title>Form Input Kalendar Agenda</title>
				 
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

</style>
		     
	   </head>
	   <body>
           <a class="btn" onclick=self.history.back()><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a><p></p
>
		 <h2 class='head'><span class="glyphicon glyphicon-briefcase"></span> KEMASKINI JADUAL</h2>
         
           <?php

include ('connection.php');
$ambil=mysql_query("select * from kalendar where id='$_GET[id]'");
	$t=mysql_fetch_array($ambil);
	?>

              <form  method="post" name="form" class="form" id="form" >
              
		      <table>
             
				      <tr>
						   <td>Tarikh Rakaman</td>
						   <td align="center"> : </td>
						   <td><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form.tarikh);return false;" ><input id="tarikh" type="text" name="tarikh_rakaman"  value="<?php echo $t['tgl_kalendar']; ?>"></a></td>
					  </tr>
					  <tr>
						   <td>Subjek</td>
						   <td align="center"> : </td>
						   <td><input type="text" name="subjek"  value="<?php echo $t['subjek']; ?>"></td>
					  </tr>
					  <tr>
						   <td>Maklumat</td>
						   <td align="center"> : </td>
						   <td><textarea name="keterangan" cols="45" rows="3"><?php echo $t['keterangan']; ?></textarea></td>
                           
                            
                            
					  </tr>
					  <tr>
						   <td colspan="3" align="center">  <input type='button' class='btn btn-default' value=Batal onclick=self.history.back()>
					<input type='submit' class='btn btn-primary' value='Simpan' name='submit'></td>
					  </tr>
			  </table>
			  </form>    
              
              
              
               <?PHP
			   
			   if(isset($_POST['submit'])){
	 
			   
			  $subjek=ucwords(strtolower($_POST['subjek']));
$keterangan=ucwords(strtolower($_POST['keterangan']));
			   $tarikh=$_POST['tarikh_rakaman'];
		 
				
			 $sql= mysql_query("UPDATE  kalendar SET tgl_kalendar='$tarikh',
													     subjek='$subjek',
														 keterangan ='$keterangan'
											             where id='$_GET[id]'");
				if($sql){
?>
<script>document.location.href="media.php?module=kalendar_agenda&pesan=oke_update"</script><?php
}
	}
//Copyright © 2011 Andi Sholihin
?>
 
				
				
				
		    
                        
                        
                        
                <iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="../calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>



	   </body>
</html>

