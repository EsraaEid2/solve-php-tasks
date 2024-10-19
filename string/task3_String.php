<?php
// Define the sentence
$sentence = 'I am a full stack developer at orange coding academy';

// Define the word to search for
$wordToFind = 'Orange';

// Check if the word exists in the sentence (case insensitive)
if (stripos($sentence, $wordToFind) !== false) {
    echo "Word Found!<br>";
} else {
    echo "Word Not Found! <br>";
}
?>
