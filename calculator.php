<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="first_value" required placeholder="Enter first number">
        <input type="text" name="second_value" required placeholder="Enter second number"><br><br>
        
        <label for="operation">Choose an operation:</label>
        <select name="operation" id="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $firstNumber = $_POST['first_value'];
        $secondNumber = $_POST['second_value'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'add':
                $result = $firstNumber + $secondNumber;
                break;
            case 'subtract':
                $result = $firstNumber - $secondNumber;
                break;
            case 'multiply':
                $result = $firstNumber * $secondNumber;
                break;
            case 'divide':
                if ($secondNumber != 0) {
                    $result = $firstNumber / $secondNumber;
                } else {
                    $result = 'Error: Division by zero is not allowed.';
                }
                break;
            default:
                $result = 'Invalid operation selected.';
                break;
        }

        // Display the result
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
