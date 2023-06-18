<?php

$name = "Eko"; // Global scope

function sayName() 
{
  global $name; // Global keyword
  echo "Hello $name" . PHP_EOL;
}

sayName();