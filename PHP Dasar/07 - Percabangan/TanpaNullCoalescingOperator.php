<?php

$data = [];

if (isset($data['action'])) {
  $action = $data['action'];
} else {
  $action = 'nothing';
}

echo $action . PHP_EOL;