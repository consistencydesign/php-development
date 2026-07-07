<?php

$people = require __DIR__ . "/data.php";

// print_r($people);

function groupByCity($people) {

   $grouped = [];
   
   foreach ($people as $person) {
   

   $city = $person['city'] . "<br>";

   // echo $city;

   $grouped[$city][] = $person;
}

return $grouped;
}


$result = groupByCity($people);

print_r($result);



?>