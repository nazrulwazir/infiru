
<?php
if(isset($_GET['module']))
$page=$_GET['module'];
{
$page=htmlentities($_GET['module']);
$halaman="$page.php";
if(!file_exists($halaman) || empty($page)){
	include "home.php";
}else{
	include "$halaman";
}

}
?>
