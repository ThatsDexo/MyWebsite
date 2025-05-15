<?php
declare(strict_types=1); //Needed for making sure the correct type of input is being put in functions. P
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $test = "This is a variable, you wont be able to access it without the global keyword";
    $test2 = "HELLO";
    function sayHello(string $name = "Bob"){ //How to assign default value & type delcaration 
        global $test;
        echo $GLOBALS["test2"];
        echo $test;
        return "Hello " . $name . "!";
    }

    function staticTest(){

        static $count = 0; //for all the funcitons in the future, this variable isn't going to reset itself. It shares amongst the functions
        $count++;

        echo $count;
    }

    //echo sayHello();
    staticTest();
    staticTest();
    staticTest();


    //CONSTANTS

    define("PI", 3.14); //put at the top of your code though
    echo PI;

    

    ?>
</body>
</html>