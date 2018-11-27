#!/usr/bin/php
<?php
/* https://selftaughtcoders.com/php-variables-functions-arrays-loops/ */

$names = array(
  array('Bob', 20),
  array('Sally', 22),
  array('Tom', 22),
  array('Jane', 23)
);

function printPerson(string $name, int $number, int $age) {
  echo "$name is person #$number, they are $age years old\n";
};
/* printPerson('James', 1, 33); */

for($i=1; $i<=count($names); $i++) {
  printPerson($names[$i-1][0], $i, $names[$i-1][1]);
}
?>
