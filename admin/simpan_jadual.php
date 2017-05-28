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

		 <h2 class='head'><span class="glyphicon glyphicon-briefcase"></span> TAMBAH JADUAL</h2>

              <form action="simpan_jadual_db.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" >
              
		      <table class='table table-hover'>
				      <tr>
						   <td>Tarikh</td>
						   <td align="center"> : </td>
						   <td><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form.tarikh);return false;" ><input class='form-control1' id="tarikh" type="text" name="tarikh_rakaman" value="<?php echo $_GET['date']; ?>" ></a></td>
					  </tr>
					  <tr>
						   <td>Tajuk</td>
						   <td align="center"> : </td>
						   <td><input class='form-control1' type="text" name="subjek"></td>
					  </tr>
					  <tr>
						   <td>Maklumat</td>
						   <td align="center"> : </td>
						   <td><textarea class='form-control1' name="keterangan" cols="45" rows="3"></textarea></td>
					  </tr>
					  <tr>
						   <td colspan="3" align="center">  <input type='button' class='btn btn-default' value=Batal onclick=self.history.back()>
					<input type='submit' class='btn btn-primary' value='Simpan' name='submit'></td>
					  </tr>
			  </table>
			  </form>
              
              
                <iframe width=174 height=189 name="gToday:normal:kalender/normal.js" id="gToday:normal:kalender/normal.js" src="../kalender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>



	   </body>
</html>

