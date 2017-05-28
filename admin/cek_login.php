<?php 
session_start();
include "connection.php";
$uname=$_POST['uname'];
$pass=md5($_POST['pass']);

$query=mysql_query("select * from administrator where uname='$uname' and pass='$pass'")or die(mysql_error());

$t=mysql_fetch_array($query);

if(mysql_num_rows($query)){
	
	$_SESSION['uname']=$uname;
	
	
	mysql_query("UPDATE administrator SET current_login = now() WHERE uname = '$uname'"); ?>
	<script language="javascript">
	alert("Selamat Bertugas <?php echo"$_SESSION[uname]"; ?>  !");
			document.location="media.php?module=home";
			</script>
            <?php
}else{
	
	header("location:index.php?pesan=gagal");
            
          
	// mysql_error();
}
// echo $pas;
 ?>
 
