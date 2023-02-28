<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 2d</title>
  <style>
    .kotak_hitam {
      height: 30px;
      width: 30px;
      background-color: #000;
    }

    .kotak_putih {
      height: 30px;
      width: 30px;
      background-color: #fff;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <tr>
        <?php for ($k = 1; $k <= 5; $k++) : ?>

          <?php $total = $i + $k; ?>

          <?php if ($total % 2 == 0) : ?>
            <td class="kotak_hitam"></td>
          <?php else :  ?>
            <td class="kotak_putih"></td>
          <?php endif ?>

        <?php endfor ?>

      </tr>
    <?php endfor ?>
  </table>

</body>

</html>