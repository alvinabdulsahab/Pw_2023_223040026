<?php
for ($i = 1; $i <= 10; $i++) {
  $p = 1;
  for ($j = 0; $j < $i; $j++) {
    echo $p++ . " ";
  }
  echo '<br>';
}