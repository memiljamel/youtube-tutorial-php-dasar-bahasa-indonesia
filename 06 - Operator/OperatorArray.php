<?php

// Union
$first = [
  "first_name" => "Eko"
];

$last = [
  "last_name" => "Khannedy"
];

var_dump($first + $last);

// Equality & Identity
$a = [
  "first_name" => "Eko",
  "last_name" => "Khannedy"
];

$b = [
  "last_name" => "Khannedy",
  "first_name" => "Eko",
];

var_dump($a == $b);
var_dump($a === $b);

