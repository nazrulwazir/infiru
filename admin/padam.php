<?php
// Warning Error To Login Admin Page

$ambil=mysql_query("select * from slot where nama_slot='$_GET[id]'");
$t=mysql_fetch_array($ambil);

echo "Padam Slot ini ?";

echo"
<span>
	<a href=\"?module=padam_comfirm&id=$t[nama_slot]\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapusnya?')\">Hapus</a></span>";


?>