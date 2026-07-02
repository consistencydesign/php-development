<?php

// Using for loop - Assignment 1

// for ($i = 1; $i < 100; $i++) {
//    if ($i % 3 === 0 && $i % 5 === 0) {
//       echo "FizzBuzz <br>";
//    } else if ($i % 3 === 0) {
//       echo "Fizz <br>";
//    } else if ($i % 5 === 0) {
//       echo "Buzz <br>";
//    } else {
//       echo "$i <br>";
//    }
// }


// Using while loop - Assignment 1


$i = 1;

while ($i < 100) {
   if ($i % 3 === 0 && $i % 5 === 0) {
      echo "FizzBuzz <br>";
   } else if ($i % 3 === 0) {
      echo "Fizz <br>";
   } else if ($i % 5 === 0) {
      echo "Buzz <br>";
   } else {
      echo "$i <br>";
   }
   $i++;
}







// Pushing all the values to an array

// $arr1 = [];
// for ($i = 1; $i < 20; $i++) {
//    echo array_push($arr1, "$i");
// }
