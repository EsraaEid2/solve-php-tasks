<?php 
// ----------------task 1--------------
$num =1;
$str = "";
while($num <=10){
    $str .=$num;
    if($num < 10){
        $str.='-';
    }
    $num++;
}
echo "$str<br>";
// ----------------task 2--------------
$sum= 0;
for($i = 1; $i<=30 ; $i++){
    $sum +=$i;
}
echo "$sum <br>";

// ----------------task 3--------------
$rows = 5;

// Initialize a variable to keep track of the letters
$currentLetter = 'A';

// Loop through each row
for ($i = 0; $i < $rows; $i++) {
    // Loop for the columns
    for ($j = 0; $j < $rows; $j++) {
        // Check if we need to print the current letter
        if ($j < $rows - $i) {
            echo $currentLetter . ' ';
        } else {
            echo '  '; // Print spaces for alignment
        }
    }
    // Move to the next line
    echo "<br>";
    
    // Update the current letter for the next row
    if ($i < $rows - 1) {
        $currentLetter++;
    }
}

?>