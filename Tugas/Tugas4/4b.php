<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $var =[ 'motherboard','procesor','Hardisk','PC coller','VGA card','SSD'];
    ?>

    <h2>Macam-macam perangkat keras komputer</h2>

    
        <ol>
            <?php foreach( $var as $i ) { ?>
            <li><?= $i ?> </li>
            <?php } ?>
        </ol>

        <?php 
        array_push( $var, 'Card reader','Modem' ); sort($var)
        ?>


    <h2>Macam-macam perangkat keras komputer baru </h2>

                <ol>
                    <?php foreach( $var as $i ) { ?>
                        <li><?= $i ?> </li>
                        <?php } ?>
                </ol>
       





</body>
</html>