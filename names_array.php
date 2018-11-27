#!/usr/bin/php
<?php
/* https://selftaughtcoders.com/php-variables-functions-arrays-loops/ */

$people = array(
  array('Bob', 20),
  array('Sally', 22),
  array('Tom', 22),
  array('Jane', 23)
);

function printPerson(string $name, int $number, int $age) {
  echo "$name is person #$number, they are $age years old\n";
}
/* printPerson('James', 1, 33); */

for($i=0; $i<count($people); $i++) {
  printPerson($people[$i][0], $i+1, $people[$i][1]);
}
?>
