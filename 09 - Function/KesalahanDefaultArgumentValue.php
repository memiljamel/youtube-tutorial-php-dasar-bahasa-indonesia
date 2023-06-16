<?php

function sayHello($firstName = "Anonymous", $lastName)
{
  echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Kurniawan"); // Error: Uncaught ArgumentCountError