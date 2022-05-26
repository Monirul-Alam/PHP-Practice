<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
$fruits = ['apple', 'orange', 'pear'];
// GET LENGTH
// echo count($fruits);

// Search Array
// var_dump(in_array('apple', $fruits));


// Add to array
$fruits[] = 'grapes';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'apple');

// Remove from array
array_pop($fruits); // pop at end
array_shift($fruits); // pop at beginning
// unset($fruits[2]);

// Split into 2 chunks
// $chuked_array = array_chunk($fruits, 2);
// print_r($chuked_array);


$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
// $arr4 = [...$arr1, ...$arr2]; // same as previous one.

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];
$c = array_combine($a, $b);
// a will be key and b will be value
// green: "avacado",
// red: "apple",
// yellow: "banana"

// $keys = array_keys($c);


$flipped = array_flip($c);

 $numbers = range(1, 20);

$newNumbers = array_map(function($number){
  return "Number ${number}";
}, $numbers);
 

$lessThan10 = array_filter($numbers, function($number){
 return $number <= 10;
});

 print_r($lessThan10);
?>