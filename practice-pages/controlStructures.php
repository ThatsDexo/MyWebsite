<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //string operator / concatenation
    $a = "Hello";
    $b = "World";
    echo $a . " " . $b;

    $c = 1;
    $d = "1";

    $answer1 = $c == $d; //true, does not check for data type
    $answer2 = $c === $d; //false, checks for data types

    if($a != $b and $c == $d){ 
        echo "and";
    }

    if($a != $b && $c == $d){
        echo "&&";
    }
    
    if($a != $b || $c == $d){ //can use &&, ||, or you can use and, or 
        echo "||";
    }

    $increment = 1;
    echo "increment" . $increment;
    echo ++$increment; //increment must be before variable name if you want it to be updated in browser
    
    echo "<br>";

    $abc = "123";

    switch($abc) { //Swtich statement is good when checking for one type of data
        case "1":
            echo "23";
            break;

        case "12":
            echo "3";
            break;

        case "123":
            echo "Winner";
            break;
        
        default:
            echo "None statement was true.";
    }

    $letters = "456";
    $ans = match($letters){ //Within matches, you must also match the variable type. 1 != "1"
        "123" => "The answer is 123.", 
        "456" => "The answer is 456",
        "111", "222", "333" => "The answer repeats",
        default => "IT AAINT EVEN RIGHT",

    };
    echo "<br>";
    echo $ans;

    ?>
</body>
</html>