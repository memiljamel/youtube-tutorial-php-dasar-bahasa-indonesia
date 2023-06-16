<?php

function sayHello(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Eko", "strtolower");
sayHello("Eko", "strtolower");