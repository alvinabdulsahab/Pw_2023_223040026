<?php 
$binatang = ['🦁','🦓','🙉'];
$makanan = ['🍕','🍔','🌭','🌮'];


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>DAFTAR BINATANG</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) {  ?>
        <li><?= $binatang [$i]; ?></li>
        <?php } ?>
        <br>
        <?php for ($a = 0; $a < count($makanan); $a++) {  ?>
        <li><?= $makanan [$a]; ?></li>
        <?php } ?>
    </ul>
    <hr>

    <h2>DAFTAR BINATANG</h2>
    <ol>
        <?php foreach($binatang as $b ) { ?>
        <li>🐘 </li>
        <?php } ?>
    </ol>
</body>
</html>