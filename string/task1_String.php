<?php
// Initialize variables
$inputString = '';
$results = [
    'uppercase' => '',
    'lowercase' => '',
    'firstLetterUppercase' => '',
    'firstLetterOfEachWord' => '',
];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputString = $_POST['inputString'];

    // Perform string manipulations
    $results['uppercase'] = strtoupper($inputString);
    $results['lowercase'] = strtolower($inputString);
    $results['firstLetterUppercase'] = ucfirst($inputString);
    $results['firstLetterOfEachWord'] = ucwords($inputString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>String Manipulation</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" value="<?php echo htmlspecialchars($inputString); ?>" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <div class="result">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <h2>Results:</h2>
            <p><strong>Uppercase:</strong> <?php echo $results['uppercase']; ?></p>
            <p><strong>Lowercase:</strong> <?php echo $results['lowercase']; ?></p>
            <p><strong>First letter uppercase:</strong> <?php echo $results['firstLetterUppercase']; ?></p>
            <p><strong>First letter of each word capitalized:</strong> <?php echo $results['firstLetterOfEachWord']; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
