<?php

function buatkalender($tanggal,$bulan,$tahun) {

$bulanan=array(1=>"Januari","Februari","Mac","April",

"Mei","Jun","Julai","Ogos","September",

"Oktober","November","Desember");

$bln=date("n");

$thn=date("Y");

 

$jmlhari = date("t",mktime(0,0,0,$bulan,1,$tahun));

$haritglsatu = date("w",mktime(0,0,0,$bulan,1,$tahun));

 

$kalender = "<table cellspacing=2 cellpadding=2

border=0 with=200  id=border  >\n";

$kalender .= "<tr>

<th colspan=7 align=center>Kalendar $bulanan[$bln] $thn

</th></tr>\n";

 

$kalender .= "<tr>

<td align=center>AHAD</td>

<td align=center>ISNIN</td>

<td align=center>SELASA</td>

<td align=center>RABU</td>

<td align=center>KHAMIS</td>

<td align=center>JUMAAT</td>

<td align=center>SABTU</td></tr>\n";

$a = 1;

$adabaris = TRUE;

$mulaicetak = 0;

while ($adabaris) {

$kalender .= "<tr align=center>";

for ($i = 0; $i < 7; $i++ ) {

if ($mulaicetak < $haritglsatu) {

$kalender .= "<td>&nbsp;</td>";

$mulaicetak++;

}

elseif ($a <= $jmlhari) {

$tt = $a;

if ($a == $tanggal) {

$tt = "<span style='color: blue; font-weight: bold; text-decoration: blink;'>$tt</span>";

}

if ($i == 0) {

$tt = "<font color=\"#FF0000\">$tt</font>";

}

$kalender .= "<td align=center>$tt</td>";

$a++;

}

else {

$kalender .= "<td>&nbsp;</td>";

}

}

$kalender .= "</tr>\n";

if ($a <= $jmlhari) {

$adabaris = TRUE;

}

else {

$adabaris = FALSE;

}

}

$kalender .= "</table>\n";

return $kalender;

}

$tgl_skrg=date("d");

$bln_skrg=date("n");

$thn_skrg=date("Y");

echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg);

?>