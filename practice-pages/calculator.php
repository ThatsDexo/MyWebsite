<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num1" placeholder = "First Number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder = "Second Number" required>
        <button>Calculate</button>
    </form>

    <?php
        //Grab data
        if($_SERVER["REQUEST_METHOD"] == "POST")
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT); // directly filters from superglobals
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        //make sure to take security measures via server side language so it cannot be manipulated

        //Error Handlers
        $errors = false;

        if(empty($num1) || empty($num2) || empty($operator)){
            echo "<p class ='calc-error'>Fill in all fields </p>";
            $errors = true;
        }

        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "<p class = calc-error>Only numbers allowed</p>";
        }

        //Calculate the numbers if no errors

        if(!$errors){
            switch($operator){
                case "add":
                    echo "<p class = calc-result>Answer: " . $num1 + $num2 . "</p>";
                    break;
                case "subtract":
                    echo "<p class = calc-result>Answer: " . $num1 - $num2 . "</p>";
                    break;
                case "multiply":
                    echo "<p class = calc-result>Answer: " . $num1 * $num2 . "</p>";
                    break;
                case "divide":
                    echo "<p class = calc-result>Answer: " . $num1 / $num2 . "</p>";
                    break;
                default:
                    echo "<p class = calc-error>Error occured.</p>";
            }

        }
    ?>

</body>
</html>