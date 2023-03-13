<?php 
//array
//membuat array
$hari = array('senin','selasa','rabu','kamis');
$bulan = ['januari','februari','maret'];
$myarray = ['Alvin',30,false];
$binatang = ['🦁','🦓','🙉'];

//mencetak array
print $bulan[2]; //1 elemen menggunakan indexnya
print "<br>";
print_r($hari);
print "<br>";
print_r($bulan);
print "<hr>";

//manipulasi array
//menambahkan elemen diakhir menggunakan index
$hari[] = 'jumat';
print_r($hari);
print "<hr>";

//menambahkan elemen diakhir menggunakan array_push()
array_push($bulan, 'april','mei','juni','juli');
print_r($bulan);
print "<br>";
print_r($binatang);
print "<hr>";

//menghapus elemen di akhir, menggunakan array_pop()
array_pop($bulan);
print_r($bulan);
print "<hr>";







?>