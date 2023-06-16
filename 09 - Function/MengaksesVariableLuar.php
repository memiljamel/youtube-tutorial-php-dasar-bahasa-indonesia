<?php

$firstName = "Eko";
$lastName = "Khannedy";

$sayHello = function () use ($firstName, $lastName) {
  echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHello();

