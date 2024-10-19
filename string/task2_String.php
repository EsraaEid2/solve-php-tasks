<?php
// Input numeric string
$numericString = '085119';

// Validate that the string has exactly 6 digits
if (preg_match('/^\d{6}$/', $numericString)) {
    // Split the string into hours, minutes, and seconds
    $hours = substr($numericString, 0, 2);
    $minutes = substr($numericString, 2, 2);
    $seconds = substr($numericString, 4, 2);

    // Format the output
    $formattedTime = $hours . ':' . $minutes . ':' . $seconds;

    // Display the result
    echo "Expected Output: " . $formattedTime . "<br>";
} else {
    echo "Invalid input. Please enter a numeric string with exactly 6 digits.";
}
?>
