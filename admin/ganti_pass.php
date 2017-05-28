
<h1 class='head'><span class="glyphicon glyphicon-lock"></span> PASSWORD </h1>

<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Password gagal diganti !!     Periksa Kembali Password yang anda masukkan !!</div>";
	}else if($pesan=="tdksama"){
		echo "<div class='alert alert-warning'>Password yang anda masukkan tidak sesuai  !!     sila cuba lagi !! </div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Password Berjaya diganti !! <p>Password yang baru ialah : $_GET[pass]</div>";
	}
}
?>

</h3>
<form action="ganti_pass_act.php" method="post">
	<div class="form-group">
			<input name="user" type="hidden" value="<?php echo $_SESSION['uname']; ?>">
		</div>
        <div class="form-group">
			<p>
			
		  </p>
			<p>
			  <input name="lama" type="hidden" class="form-control" required="required" value="<?php echo $_SESSION['uname']; ?>"  readonly>
		  </p>
		</div>
		<div class="form-group">
			<label>Password Lama</label>
			<input name="lama" type="password" class="form-control1" placeholder="Password Lama .." required="required">
		</div>
		<div class="form-group">
			<label>Password Baru</label>
			<input name="baru" type="password" class="form-control1" placeholder="Password Baru .." required="required">
		</div>
		<div class="form-group">
			<label>Ulang Password</label>
			<input name="ulang" type="password" class="form-control1" placeholder="Ulang Password .." required="required">
		</div>	
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>

