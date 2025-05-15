<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
        <label for="noun1">Enter a noun: </label>
        <input type="text" id="noun1" name="noun1" required> <br>

        <label for="place">Enter a place: </label>
        <input type="text" id="place" name="place" required> <br>

        <label for="num1">Enter a number: </label>
        <input type="number" id="num1" name="num1" required> <br>

        <label for="adjective1">Enter an adjective: </label>
        <input type="text" id="adjective1" name="adjective1" required> <br>

        <label for="occupation">Enter an occupation: </label>
        <input type="text" id="occupation" name="occupation" required> <br>

        <label for="verb1">Enter a verb ending in "ing": </label>
        <input type="text" id="verb1" name="verb1" required> <br>

        <input type="submit" value="SUBMIT MY FRIEND">
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $noun1 = htmlspecialchars($_POST["noun1"]);
        $place = htmlspecialchars($_POST["place"]);
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $adjective1 = htmlspecialchars($_POST["adjective1"]);
        $occupation = htmlspecialchars($_POST["occupation"]);
        $verb1 = htmlspecialchars($_POST["verb1"]);

        $errors = false;

        if(empty($noun1) || empty($place) || empty($num1) || empty($adjective1) || empty($occupation) || empty($verb1)){
            echo "<p>Fill out all fields brother.</p>";
            $errors = true;
        }

        if(!is_numeric($num1)){
            echo "<p>Please enter a number.</p>";
        }

        if(!$errors){

            echo "<p>There once existed a very special " . $noun1 .".</p>";
            echo "<p>No one would expect it, but it resided in " . $place ."!</p>";
            echo "<p>Can you believe that??? " . $place . "!</p>";
            echo "<p>Rumor on the street was that the " . $noun1 . " was very " . $adjective1 . ".";
            echo "<p>The worst of it all was that " . $num1 . " " . $occupation . "s wanted to destroy it.</p>";
            echo "<p>One day these " . $occupation . "s were caught " . $verb1 . ". Thats when everyone became real worried.</p>";
        }
    }

    ?>
</body>
</html>