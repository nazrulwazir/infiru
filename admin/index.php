<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>..::: Login Admin :::..</title>
<link rel="stylesheet" type="text/css" href="style_login.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    
<link rel="shortcut icon" href="../images/images_admin/favicon.ico" />

<script type="text/javascript">
function validasi(form){
if (form.uname.value == ""){
alert("Anda belum isi Username");
form.username.focus();
return (false);
}
 
if (form.pass.value == ""){
alert("Anda belum isi Password");
form.password.focus();
return (false);
}
return (true);
}
</script>

<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Pengguna tidak dikenali</div>";}
}
?>


</head>

<body OnLoad="document.login.uname.focus();">
<div id="main">

<!-- Header -->
<div id="header"><img src="../images/production.png" alt="a" width="244" height="76" /></div>

<!-- Middle -->
<div id="middle">
<form id="form-login" name="login" method="post" action="cek_login.php" onSubmit="return validasi(this)">
  
 <div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control1" placeholder="Username" name="uname">
	  </div>
	<p></p>
 <div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control1" placeholder="Password" name="pass">
	  </div>
  <p></p>
 <div class="input-group">			
						<input type="submit" class="btn btn-primary" value="Login">
	  </div>
</form>
</div>

<!-- don't Change ;) -->
<div class="clear"></div>

<!-- Footer -->
<div id="footer"><center>Copyright &copy; 2016 by Infiru Dynamic Enterprise <p>Design by : NazrulAmal96</p></center></div>
</div>
</body>
<?php include('embed.php'); ?>
