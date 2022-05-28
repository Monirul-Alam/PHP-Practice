<?php


$file = 'extras/users1.txt';

if(file_exists($file)){
  // echo readfile($file);

  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'tanvir' . PHP_EOL . 'Monir' . PHP_EOL . 'MIKE';
  fwrite($handle, $contents);
  fclose($handle);
}



?>