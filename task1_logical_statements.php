<?php
// ---------------task 1 ---------------
function checkSum($firstInteger, $secondInteger) {
    // Calculate the sum of the two numbers
    $sum =  $firstInteger + $secondInteger ;
   return ($sum === 30)? $sum :'false';
}

$firstInteger = 10;
$secondInteger = 10;

$result = checkSum($firstInteger, $secondInteger);
echo "$result <br>"; // Output will be 'false'

// ---------------task 2 ---------------

function multiply3($number){
    return ( $number >0 && $number%3 ===0)?'true':'false';
}

$number = 20;
echo  multiply3($number)."<br>";

// ---------------task 3---------------
function in_range($num){
    return ($num >= 20 && $num<= 50)?'true':'false';
}

$num = 50;
echo in_range($num)."<br>";

// ---------------task 4---------------
function largestNum($x,$y,$z){
    $max = MAX($x,$y);
    return(MAX($max,$z));
}
$res = largestNum(1,5,9);
echo "$res<br>";

// ---------------task 5---------------

function calculateElectricityBill($units) {
    $bill = 0;

    // Calculate bill for first 50 units
    if ($units <= 50) {
        $bill = $units * 2.50;
    }
    // Calculate bill for the next 100 units
    elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    }
    // Calculate bill for the next 100 units
    elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    }
    // Calculate bill for units above 250
    else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return $bill;
}

// Example usage
$unitsConsumed = 300;
$billAmount = calculateElectricityBill($unitsConsumed);
echo "The electricity bill for $unitsConsumed units is: " . number_format($billAmount, 2) . " JOD<br>";
// ---------------task 6---------------
// in calculator file>>>>>>>>>>>>>
// ---------------task 7---------------

function isEligible($age){
    $str;
    if ($age >=18){
        $str = "is eligible";
    }else {
        $str = "is not eligible";
    }
    return $str;
}
echo isEligible(15)."<br>";


// ---------------task 8---------------

function checkNumber($number) {
    // Check if the number is positive, negative, or zero
    if ($number > 0) {
        return 'Positive';
    } elseif ($number < 0) {
        return 'Negative';
    } else {
        return 'Zero';
    }
}

$status = checkNumber(-60);

// Display the result
echo "$status<br>";
// ---------------task 9---------------

function calculateGrade($scores) {
    // Calculate the average score
    $totalScores = array_sum($scores);
    $numberOfSubjects = count($scores);
    $averageScore = $totalScores / $numberOfSubjects;

    // Determine the grade based on the average score
    if ($averageScore >= 90 && $averageScore < 100) {
        $grade = 'A';
    } elseif ($averageScore >= 80 && $averageScore < 90) {
        $grade = 'B';
    } elseif ($averageScore >= 70 && $averageScore < 80) {
        $grade = 'C';
    } elseif ($averageScore >= 60 && $averageScore < 70) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    return $grade;
}

// Sample Input
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$grade = calculateGrade($scores);

// Display the result
echo "The student's grade is: " . "$grade<br>";


// ---------------task 9---------------
    
?>
