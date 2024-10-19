<?php

//-----------------------task 1-----------------------
echo'<h1>Function Tasks</h1>';
echo'<h3> Task 1 </h3>';

function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 3;

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}

//-----------------------task 2-----------------------
echo'<h3> Task 2 </h3>';

function reverseString($str) {
    // Use the built-in function strrev to reverse the string
    return strrev($str);
}

$inputString = "remove";

$reversedString = reverseString($inputString);
echo "The reversed string of '$inputString' is: $reversedString";

//-----------------------task 3-----------------------
echo'<h3> Task 3 </h3>';

function swapVariables(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;

swapVariables($x, $y);
echo "y = $y, x = $x";

//-----------------------task 4-----------------------
echo'<h3> Task 4 </h3>';

function isArmstrongNumber($number) {
    $numString = (string)$number;
    $length = strlen($numString);
    $sum = 0;

    for ($i = 0; $i < $length; $i++) {
        $digit = $numString[$i];
        $sum += pow($digit, 3);
    }

    if ($sum == $number) {
        return "$number is an Armstrong number";
    } else {
        return "$number is not an Armstrong number";
    }
}

$number = 407;
echo isArmstrongNumber($number);

//-----------------------task 5-----------------------
echo'<h3> Task 5 </h3>';

function isPalindrome($string) {
    // Remove spaces, punctuation, and convert the string to lowercase
    $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));

    // Reverse the cleaned string
    $reversedString = strrev($cleanedString);

    if ($cleanedString === $reversedString) {
        return "Yes, it is a palindrome";
    } else {
        return "No, it is not a palindrome";
    }
}

$inputString = "Eva, can I see bees in a cave?";
echo isPalindrome($inputString);

//-----------------------task 6-----------------------
echo'<h3> Task 6 </h3>';

function removeDuplicates($array) {
    // Use the array_unique() function to remove duplicate values
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}

$array1 = array(2, 4, 7, 4, 8, 4);
$result = removeDuplicates($array1);
print_r($result);
?>