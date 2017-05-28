<?php  
ini_set( "display_errors", 0);
$server= "localhost";  
$username = "root";   
$password = "";   
$database = "infiru"; 




  
mysql_connect($mysqlhost,$username,$password) or die ("Koneksi Gagal");  
  
mysql_select_db($database) or die ("Database Tidak Bisa Di Buka " );  
  
?> 

