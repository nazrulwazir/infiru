
<?php


$query = mysql_query("SELECT nama, last_login FROM administrator WHERE uname='$_SESSION[uname]'");
$admin = mysql_fetch_array($query);
?>

<style>


th, td {
    
	 font-family: 'IstokWebRegular';
	 font-size:14px;
	 vertical-align:top;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #CCCCCC;
	 font-family: 'IstokWebRegular';
	 font-size:14px;
	 vertical-align:top;
 
}
</style>

<title>INFIRU DYNAMIC ENTERPRISE</title>

<div class="post">

<h1 class='head'><span class="glyphicon glyphicon-home"></span> Infiru Dynamic Enterprise <br />
  </h2>
</h1>




  <div class="entry">
  <center>
	  
	
        
        <p>
        <h4>Selamat Bertugas <a href="?module=profil"<?php echo "<b>"; echo $admin['nama'] ;?></a> <?php echo "</b>"; echo ", Login Terakhir pada "; ?>
<?php  $dat = $date_from_mysql_timestamp;
 $fdat = date('g:i d M Y', strtotime($admin[last_login]));
 echo $fdat; 
		
		?> </h4>
        
      
 
        </p>
        </p>
   
    <p> <?php include "time.php";?> </p>
    <p>
      <?php include "kalender.php";?></p>
    </p>
    <p></p>
    
    </center>
  </div>
</div>
<embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />

