<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adavnced Calculator</title>
</head>
<style>
    *
    {
        padding: 0px;
        margin: 0px;
    }
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: cyan;
        text-align: center;

    }
    form{
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        display: inline-block;
        margin-top: 50px;
        width:30%;
    }
    label,input,select{
        display: block;
        margin: 10px auto;
        width: 100px;
        font-size:15px;
        margin-bottom:10px;

    }
    button{
        padding:20px;
        background-color: black;
        height:15px;
        color: beige;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover{
        background-color: cyan;
        color:black;
    }
    h2{
        color:white;
        margin-top:10px;
       
    }
</style>
<body>
    <h2>Advanced calculator</h2>
    <form method="post">
       Enter Number 1:
       <input type="number" name="number1" required><br>
       Enter Number 2:
       <input type="number" name="number2" ><br><br>

       Enter operation:
       <select name="operation" required>
            <option value="add">Addition</option>
            <option value="Subtract">Subtracton</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponentiation">Exponential</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="logarithm">Logarithm</option>
       </select>
        <button type="submit" name="calculate">Calculate</button>


    </form>
    <?php
if (isset($_POST['calculate'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        case 'exponentiation':
            $result = pow($number1, $number2);
            break;
        case 'percentage':
            $result = ($number1 / 100) * $number2;
            break;
        case 'sqrt':
            $result = sqrt($number1);
            break;
        case 'logarithm':
            if ($number1 > 0) {
                $result = log($number1);
            } else {
                $result = "Error: Logarithm of non-positive number";
            }
            break;
        default:
            $result = "Invalid operation";
    }

    echo "Result: " . $result;
}
?>
</body>
</html>