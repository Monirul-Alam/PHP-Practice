<?php
for($x=0; $x< 10; $x++){
  echo 'Number '  . $x . '<br>';
}


// $x =1;
// while($x <= 9){
//   echo 'Number' . $x. '<br>';
//   $x++;
// }

// DO WHILE LOOP
// $x =1;
// do {
//   echo 'Number' .$x. '<br>';
//    $x++;

// } while($x <= 5);


 $posts = ['first post', 'second post', ' third post'];
// for($x =0 ; $x < count($posts); $x++) {
//   echo $posts[$x];
// }


// foreach( $posts as $item) {
//   echo $item;
// }

foreach( $posts as $index => $item) {
  echo $index. '-' . $item . '<br>';
}


?>