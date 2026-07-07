<?php

$people = require __DIR__ . '/data.php';

function getAverageAge($people)
{
    $ages = array_column($people, 'age');

   //  var_dump($ages);
   // echo count($people);

    $totalAge = array_sum($ages);

    return $totalAge / count($people);
}

$avgPeople = getAverageAge($people);
echo $avgPeople;


// using the array_reduce()

// function avgPeople($people) {
//     $total = array_reduce($people, function ($acc, $person) {
//         return $acc + $person['age'];
//     }, 0);
//     return $total / count($people);
// }

// $answer = avgPeople($people);
// echo $answer;