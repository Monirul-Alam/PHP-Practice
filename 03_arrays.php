<?php

// simple Array
$numbers = [1,44,33,55];
$fruits = array('apple', 'orange', 'pear');
// print_r($numbers);
// var_dump($numbers);

// echo $fruits[1];

// Assiciative Array

$colors = [
  1 => 'red',
  2 => 'blue',
  3 => 'green'
];
// echo $colors[2];

$hex = [
  'red' => '#f00',
  'green' => '#00f'
];

// echo $hex['red'];

$people = [
  [
  'first_name' => 'monir',
  'email' => 'monirul@gmail.com'
],
[
  'first_name' => 'sakin',
  'email' => 'sakin@gmail.com'

]
];

echo $people[1]['email'];

var_dump(json_encode($people))







?>
