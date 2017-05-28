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
    width: 80%;
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
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="oke"){
		echo "<div class='alert alert-success'>Berjaya ! </div>";
	}
}
?>

<h1 class='head'><span class="glyphicon glyphicon-info-sign"></span> MAKLUMAT AKAUN </h1>



<p>
  <?php


$query = mysql_query("SELECT * FROM administrator WHERE uname='$_SESSION[uname]'");
$hasil = mysql_fetch_array($query);

?>
</p>
<p>&nbsp;</p>

<table class="table table-hover">
  <div class="col-md-2">
		<div class="row">
        
  <?php echo "<div class='col-xs-6 col-md-12'>
					<a class='thumbnail'><img class='img-responsive' src='../Infiru Files/admin/$hasil[foto]' width='200' height='240' /></a></div> "; ?>
    </div>
  </div>
  <p></p>
  
    <tr>
    <td width="178">Nama</td>
    <td width="17">:</td>
    <td width="195"><?php echo $hasil['nama']; ?></td>
  </tr>
  <tr>
    <td>Nama Pengguna Akaun</td>
    <td>:</td>
    <td><?php echo $hasil['uname']; ?></td>
  </tr>
  <tr>
    <td>Login Terakhir </td>
    <td>:</td>
    <td><?php  $dat = $date_from_mysql_timestamp;
 $fdat = date('g:i d M Y', strtotime($hasil['last_login']));
 echo $fdat; ?></td>
  </tr>
  <tr>
    <td>Login Terbaru </td>
    <td>:</td>
    <td><?php  $dat = $date_from_mysql_timestamp;
 $fdat = date('g:i d M Y', strtotime($hasil['current_login']));
 echo $fdat; ?></td>
  </tr>

</table>
</td></tr></table>
  <a href="?module=ganti_foto" class="btn btn-info"><span class='glyphicon glyphicon-refresh' ></span> Tukar Gambar Profil</a>