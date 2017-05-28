
<h1 class='head'><span class="glyphicon glyphicon-plus"></span> TAMBAH PENGGUNA </h1>

<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="tdksama"){
		echo "<div class='alert alert-danger'>Akaun tidak berjaya dibuat !! Periksa kembali password supaya sama ! !</div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Akaun Berjaya dibuat !!<p>";
		echo " Username : $_GET[username] <p> Password : $_GET[pass]</p>  </div> ";
	}
}
?>

</h3>
<form action="admin_act.php" method="post">

      	<div class="form-group">
			<p>
			  <label>Nama Penuh</label>
		  </p>
			<p>
			  <input name="nama" class="form-control1" type="text" placeholder="Nama Penuh .." required>
		  </p>
		</div>
        <div class="form-group">
			<p>
			  <label>Username</label>
		  </p>
			<p>
			  <input name="uname" class="form-control1" type="text" placeholder="Username .." required>
		  </p>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input name="pass" type="password" class="form-control1" placeholder="Password Baru .." required>
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input name="ulang" type="password" class="form-control1" placeholder="Ulangi Password .." required>
		</div>	
  <div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>

