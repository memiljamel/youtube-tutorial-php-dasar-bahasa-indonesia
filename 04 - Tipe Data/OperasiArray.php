<?php

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names[0]);

$names[0] = "Budy";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Eko";
var_dump($names);

var_dump(count($names));