<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php 
	include 'cek.php';
	
	include 'connection.php';
	?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Infiru Dynamic Enterprise</title>

<link rel="stylesheet" href="../css/style.css" type="text/css"  />
<script src="../js/jquery-1.4.js" type="text/javascript"></script>
<script src="../js/superfish.js" type="text/javascript"></script>
<script src="../js/hoverIntent.js" type="text/javascript"></script>


    
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
   
	</script>	

	<script type="text/javascript">
      $(document).ready(function(){
			   $('ul.nav').superfish();
		  });
  </script>
  
	
</head>

<body>





<div id="container">
<div id="header">
<div class="navbar-header" align="left">
		
You are logged in as <?php echo $_SESSION['uname'] ; ?>  <p></p> 
<a href="?module=ganti_pass"><font color="#000099" /><span class='glyphicon glyphicon-refresh' ></font></span> <font color="#000099" />Update Password </font></a>  
</div>

  </div>


<img src="../images/INFIRU.PNG" width="445" height="115" /><p></p>
<div id="menu">


		<ul class="nav nav-pills nav-stacked">
        
       
        
	<li> <a class="border link linkback" href="?module=home"><span class="glyphicon glyphicon-home"></span>  Utama</a></li>		
    
    <li><a class="border link linkback" href="#"><span class="glyphicon glyphicon-briefcase"></span>  Slot dan Episod</a>
        	<ul>
			  <li><a class="border link linkback" href="?module=daftar"><span class="glyphicon glyphicon-briefcase"></span>  Daftar Slot</a></li>
             <li><a class="border link linkback" href="?module=search"><span class="glyphicon glyphicon-search"></span>  Maklumat Slot</a></li>
             <li><a href="laporan_full.php" class="li" target="_blank"><span class='glyphicon glyphicon-print'></span>  Laporan Penuh</a></li>
            </ul>
        </li>
       
       
  
			   <li><a class="border link linkback" href="?module=kalendar_agenda"><span class="glyphicon glyphicon-calendar"></span>  Jadual Rakaman</a></li>
              
      
        <li><a class="border link linkback" href="#"><span class="glyphicon glyphicon-user"></span>  Admin</a>
        	<ul>
			
           
              <?php if ($_SESSION['uname']=='admin')
             echo"<li><a class='border link linkback' href='?module=daftar_admin'><span class='glyphicon glyphicon-plus'></span>  Tambah Admin</a></li>
           ";
		?>
           <li><a class="border link linkback" href="?module=profil"><span class="glyphicon glyphicon-info-sign"></span>  Maklumat Akaun</a></li>
           
          
      
         </ul>
        </li>
		
           <li><a class="border link linkback" href="#"><span class="glyphicon glyphicon-wrench"></span>  Alatan</a>
        	<ul>
			  <li><a class="border link linkback" href="?module=backup"><span class="glyphicon glyphicon-folder-open"></span>  Backup Data</a></li>
               <li><a class="border link linkback" href="?module=recovery_data"><span class="glyphicon glyphicon-folder-close"></span>  Restore Data</a></li>
            </ul>
        </li>
        
        
		
			<li><a class="border link linkback" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>	
            		
               
        
     
    </ul>



</div>

 
			
            

<div id="content">
<div class="form">
	<?php include "data.php"; ?></div>
    
</div>
</div>


<div id="footer">Copyright &copy; 2016 by Nazrul Design 

</body>

</html>
