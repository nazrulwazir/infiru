<html><head>

<body>

<link rel="stylesheet" type="text/css" href="css/style.css" />

<h2 class='head'>PENDAFTARAN</h2>
<form action='db_daftar2.php' method='post' enctype='multipart/form-data' class='f-r' >
  <table width="294" border="0">
    <tr>
      <td><h2 class='head'>B) LATAR BELAKANG KELUARGA</h2></td>
    </tr>
  </table>
  <p>(i) Latar Belakang Ayah</p>
  <table width="550" class='tabelform tabpad'>
    <tr>
      <td width="75">Nama</td>
      <td width="3">:</td>
      <td width="218"><input class='input' name='nama_ayah' type='text' /></td>
      <td width="50">Pekerjaan</td>
      <td width="3">:</td>
      <td width="140"><input class='input' name='pekerjaan_ayah' type='text' /></td>
    </tr>
    <tr>
      <td width="75">Pendapatan Bulanan (RM)</td>
      <td width="3">:</td>
      <td width="218"><input class='input' name='pendapatan_ayah' type='text' /></td>
      <td width="50">Tanggungan</td>
      <td width="3">:</td>
      <td width="140"><input class='input' name='tanggung_ayah' type='text' /></td>
    </tr>
    <tr>
      <td width="75">Keturunan (Bangsa Asal)</td>
      <td width="3">:</td>
      <td width="218"><input class='input' name='keturunan_ayah' type='text' /></td>
      <td width="50">Negeri Asal</td>
      <td width="3">:</td>
      <td width="140"><input class='input' name='negeri_ayah' type='text' /></td>
    </tr>
    <tr>
      <td>Tarikh Lahir</td>
      <td>:</td>
      <td><select name='hari_ayah'>
        <option value='none' selected='selected'>Hari*</option>
        ";
                
        
        <?php
			for($h=1; $h<=31; $h++) 
			{ 
				echo"<option value=",$h,">",$h,"</option>";
			} 
	echo"</select>
	<select name='bulan_ayah'>
            	<option value='none' selected='selected'>Bulan*</option>
				<option value='1'>Januari</option>
				<option value='2'>Februari</option>
				<option value='3'>Maret</option>
				<option value='4'>April</option>
				<option value='5'>Mei</option>
				<option value='6'>Juni</option>
				<option value='7'>Juli</option>
				<option value='8'>Agustus</option>
				<option value='9'>September</option>
				<option value='10'>Oktober</option>
				<option value='11'>November</option>
				<option value='12'>Desember</option>
			</select>
	<select name='tahun_ayah'>
            <option value='none' selected='selected'>Tahun*</option>";
			$now =  date("Y");
			$saiki = 1965;
			for($l=$saiki; $l<=$now; $l++)
			{
				echo"<option value=",$l,">",$l,"</option>";
			}	
			
			?>
        
        
	echo "
      </select></td>
      <td>No. Telefon</td>
      <td>:</td>
      <td><input class='input' name='no_telefon_ayah' type='text' /></td>
    </tr>
  </table>
  <p>(ii) Latar Belakang Ibu</p>
  <table width="550" class='tabelform tabpad'>
    <tr>
      <td width="75">Nama</td>
      <td width="3">:</td>
      <td width="218"><input class='input' name='nama_ibu' type='text' /></td>
      <td width="50">Pekerjaan</td>
      <td width="3">:</td>
      <td width="140"><input class='input' name='pekerjaan_ibu' type='text' /></td>
    </tr>
    <tr>
      <td width="75">Pendapatan Bulanan (RM)</td>
      <td width="3">:</td>
      <td width="218"><input class='input' name='pendapatan_ibu' type='text' /></td>
      <td width="50">Tanggungan</td>
      <td width="3">:</td>
      <td width="140"><input class='input' name='tanggung_ibu' type='text' /></td>
    </tr>
    <tr>
      <td width="75">Keturunan (Bangsa Asal)</td>
      <td width="3">:</td>
      <td width="218"><input class='input' name='keturunan_ibu' type='text' /></td>
      <td width="50">Negeri Asal</td>
      <td width="3">:</td>
      <td width="140"><input class='input' name='negeri_ibu' type='text' /></td>
    </tr>
    <tr>
      <td>Tarikh Lahir</td>
      <td>:</td>
      <td><select name='hari_ibu'>
        <option value='none' selected='selected'>Hari*</option>
        ";
                
        
        
        <?php
			for($h=1; $h<=31; $h++) 
			{ 
				echo"<option value=",$h,">",$h,"</option>";
			} 
	echo"</select>
	<select name='bulan_ibu'>
            	<option value='none' selected='selected'>Bulan*</option>
				<option value='1'>Januari</option>
				<option value='2'>Februari</option>
				<option value='3'>Maret</option>
				<option value='4'>April</option>
				<option value='5'>Mei</option>
				<option value='6'>Juni</option>
				<option value='7'>Juli</option>
				<option value='8'>Agustus</option>
				<option value='9'>September</option>
				<option value='10'>Oktober</option>
				<option value='11'>November</option>
				<option value='12'>Desember</option>
			</select>
	<select name='tahun_ibu'>
            <option value='none' selected='selected'>Tahun*</option>";
			$now =  date("Y");
			$saiki = 1965;
			for($l=$saiki; $l<=$now; $l++)
			{
				echo"<option value=",$l,">",$l,"</option>";
			}	
			
			?>
        
        
        
	echo "
      </select></td>
      <td>No. Telefon</td>
      <td>:</td>
      <td><input class='input' name='no_telefon_ibu' type='text' /></td>
    </tr>
  </table>
  <input type="submit" class="styled-button-5" value="Seterusnya" name="submit"/>
</form>

</body>
</html>
