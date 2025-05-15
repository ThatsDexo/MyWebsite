<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //top PHP functions: https://www.exakat.io/top-100-php-functions/
    //String Functions:

    $string = "Hello World!";

    echo strlen($string); //length of string

    echo strpos($string, "o"); //index of designated string. if you type more than one char, it will do return the starting index of the string

    str_replace("World!", "Kenny", $string); //This does not reassign this change to the orignal variable

    echo strtolower($string);
    echo strtoupper($string);

    echo substr($string, 2, 2); // Substring function: (string variable, starting point, length), length can be - if you want start from the end and go right to left. 

    print_r(explode(" ", $string)); //similar to a split function, turning a string into an array.


    //Math Functions:

    $num = -5.5;

    echo abs($num); //absoulute value

    echo round($num);

    echo pow($num, 2); //(base, exponent)

    echo sqrt(16);

    echo rand(1, 100); //random number(min, max) 


    //More Array Functions:

    $arr = ["apple", "banana", "strawberry"];

    $arr2 = ["kiwi", "fart"];

    echo count($arr);

    in_array("apple", $arr); //boolean if item is in array

    echo is_array($arr); //Boolean

    array_pop($array); //deletes the last index of an array

    print_r(array_reverse($arr)); //reverse array

    array_merge($arr, $arr2); //append all the contents of an array to the end of another array, merging


    //Date and Time Functions:

    echo date("Y-m-d H:i:s");

    echo time(); //seconds since a certain date in history (Unix time stamp). Can be used to get time difference

    $date = "2023-04-11 12:00:00";
    echo strtotime($date); //unix time difference: difference of time from string to unix time


    

    ?>
</body>
</html>