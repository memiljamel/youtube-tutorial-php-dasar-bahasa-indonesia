<?php

$contoh = "Eko";
unset($contoh);

var_dump(isset($contoh));

$contoh = "Kurniawan";

var_dump(isset($contoh));

$contoh = null;

var_dump(isset($contoh));