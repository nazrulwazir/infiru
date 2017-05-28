<?php
ini_set( "display_errors", 0);
if(!session_start()){
session_start();
}
//cek apakah admin sudah login atau belum
if(!isset($_SESSION['uname'])){
?>
<script>document.location.href="index.php"</script>
<?php 
}
?>