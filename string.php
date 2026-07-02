
<?php

// String Task - Reverse Order

$fullName = "John Michael Doe";

// Matches the first letter of each word
preg_match_all('/\b\w/', $fullName, $pickFirstLetter);

// Brings all the initials together
$initials = strtoupper(implode('', $pickFirstLetter[0]));

echo "The initials is: $initials <br><br>";
// echo 'The initials is: ' . $initials . '<br>';

// Reverse the letters
$reversed_letter = strrev("$fullName");
echo ("The Reversed Letters are: $reversed_letter <br><br>");

//Reverse each words - last word would become the first
$words = explode(" ", $fullName);
$reversed_words = array_reverse($words);
echo implode(" ", $reversed_words);

?>

