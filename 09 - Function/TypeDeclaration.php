<?php

function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100"); // valid because it is converted
sum(100, 100); // valid
sum(true, true); // valid because it is converted
sum([], []); // not valid


