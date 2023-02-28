<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Structure Kendali</title>
</head>
<body>
    <?php
    //variable nama depan dan nama belakang

$nama_depan ="Alvin";
$nama_belakang ="Abdul Sahab";
    
// menampilkan deretan angka dari 1 sampai 100 kebawah
for ($a = 1; $a <= 100; $a++) {
    // kalo abis dibagi 3 dan 5
    if ($a % 3 == 0 && $a % 5 == 0) {
        print $nama_depan . $nama_belakang . "<br>";
    }
    // kalaw habis dibagi 3
    elseif ($a % 3 == 0) {
        print $nama_depan . "<br>";
    }
    // klaw habis dibagi 5
    elseif ($a % 5 == 0) {
        print $nama_belakang . "<br>";
    }
    // kl nda habis dibagi 3 dan 5
    else {
        print $a . "<br>";
    }
}
?>
</body>
</html>