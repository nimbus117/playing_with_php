#!/usr/bin/php
<?php
function multiTable($number) {
  for($x = 1; $x <= $number; $x++) {
    $numArr = [];
    for($y = 1; $y <= $number; $y++) {
      $numArr[] = $x * $y;
    }
    echo implode(" ", $numArr);
    echo "\n";
  }
}


multiTable(3);
echo "\n";
multiTable(5);
echo "\n";
multiTable(10);
