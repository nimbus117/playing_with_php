#!/usr/bin/php

<?php

function iFact($num) {
  $sum = $num;
  for ($i = $num - 1; $i > 1; $i--) {
    $sum *= $i;
  }
  return $sum;
}

function r1Fact($num) {
  if ($num <= 1) {
    return 1;
  } else {
    return $num * r1Fact($num - 1);
  }
}

function r2Fact($n) {
  return $n<=1 ? 1 : $n*r2Fact($n-1);
}

echo iFact(100);
echo "\n";
echo r1Fact(100);
echo "\n";
echo r2Fact(100);
