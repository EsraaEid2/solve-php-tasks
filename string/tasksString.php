<?php
//---------------task4------------------
// Define the URL
$url = 'www.orange.com/index.php';

// Parse the URL to get the path
$parsedUrl = parse_url($url);

// Check if the path exists
if (isset($parsedUrl['path'])) {
    // Get the file name from the path
    $fileName = basename($parsedUrl['path']);
    echo $fileName."<br>";
} else {
    echo "No file name found in the URL."."<br>";
}
//---------------task5------------------
// Define the email address
$email = 'info@orange.com';

// Extract the username from the email
$username = substr($email, 0, strpos($email, '@'));

// Output the result
echo "Expected Output: " . $username."<br>";

//---------------task6------------------
// Define the string
$string = 'info@orange.com';

// Get the last three characters
$lastThreeCharacters = substr($string, -3);

// Output the result
echo  $lastThreeCharacters."<br>";


//---------------task7------------------

// Define the characters to choose from
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

// Define the length of the password
$passwordLength = 10; 

$password = '';

// Generate the random password
for ($i = 0; $i < $passwordLength; $i++) {
    // Get a random index from the characters string
    $randomIndex = mt_rand(0, strlen($characters) - 1);
    // Append the character at the random index to the password
    $password .= $characters[$randomIndex];
}

// Output the result
echo"$password .<br>";

//---------------task8------------------

// Define the original sentence
$sentence = 'That new trainee is so genius.';

$newWord = 'Our';

// Use a regular expression to replace the first word
$updatedSentence = preg_replace('/^\w+/', $newWord, $sentence);

// Output the result
echo  $updatedSentence;
?>
