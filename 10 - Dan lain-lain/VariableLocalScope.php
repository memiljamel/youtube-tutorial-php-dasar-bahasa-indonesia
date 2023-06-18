<?php

function createName()
{
  $name = "Eko"; // Local scope
}

createName();
echo $name; // Error: undifined variable