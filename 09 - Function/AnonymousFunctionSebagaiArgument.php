<?php

function sayGoodBye(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function (string $name) {
  return strtoupper($name);
});