<?php
include 'connection.php';

if(isset($_POST['submit']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="document/";
	
	
	$nama_slot=$_POST['nama_slot'];
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($_POST['nama']);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$result=mysql_query("INSERT INTO upload(nama_slot,file,type,size) VALUES('$nama_slot','$final_file','$file_type','$new_size')");
	}
}
if(!$result){
?>
<script>
alert('Error !');
document.location.href="media.php?module=search";
</script><?php
}else{
?>
<script>
alert("Slot baru disimpan !");
document.location.href="media.php?module=search"</script><?php
}
?>