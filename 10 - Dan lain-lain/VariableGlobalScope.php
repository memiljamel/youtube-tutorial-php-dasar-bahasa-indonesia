<?php

$name = "Eko"; // Global scope

function sayName()
{
  echo $name; // Error: undifined variable
}

sayName();