<?php

function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Eko", function ($name) { return strtoupper($name); });
sayHello("Eko", fn($name) => strtoupper($name));
sayHello("Eko", "strtoupper"); // Agar menjadi variable function
sayHello("Eko", "strtolower"); // Agar menjadi variable function