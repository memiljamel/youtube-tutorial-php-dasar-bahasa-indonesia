<?php

$name = "Eko";

function sayName()
{
  echo "Hello {$GLOBALS['name']}" . PHP_EOL;
}

sayName();
