<?php 
function menentukan_ganjil_genap($angka) //parameter
 {
//memeriksa apakah $angka itu bilangan GANJIL
//bilangan yang jika dibagi 2 sisanya 1
if($angka % 2 == 1) {
return "$angka adalah bilangan GANJIL!";
} 
else { 
return    "$angka adalah bilangan GENAP!";
}
}

 print menentukan_ganjil_genap(10);//argument
 print "<br>";
 print menentukan_ganjil_genap(5);
 print "<br>";
 print menentukan_ganjil_genap(100);
?>