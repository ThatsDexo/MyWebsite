<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //two ways of creating arrays
        $fruits = array("apple", "banana", "grape");
        $fruits2 = ["apple", "banana", "grape"];
       
        //appends item onto indexed array
        $fruits2[] = "orange";

        //array_push($fruits2, "orange") <- This is another way to append items, but this only works on INDEXED ARRAYS

        //changes certain index of array
        $fruits2[0] = "pineapple";

        //accessing certain element of an array
        echo $fruits2[3];

        unset($fruits2[0]); //unsets an index
        array_splice($fruits2, 0, 1); //deletes a range of indexs

        array_splice($fruits, 2, 0, "mango"); 
        /*The first number is the starting position, the second number is 
        the number of elements to remove(positve to go right, negative to go left)?
        so we are inserting a value at index 2?
        
        -you can even insert a whole other array
        */

        $tasks = ["Laundry" => "Daniel", "Trash" => "Sam","vaccum" => "Bella", "Dishes" => "Bob"];

        $tasks["Dusting"] = "Callista";

        echo $tasks["Laundry"];

        print_r($fruit2); // Prints out array and shows the key value pairs

        echo count($fruit2); //getting length of array

        sort($tasks); //Sort in ascending order ---- When using this on an associative array, it sorts the VALUES and turns it into an indexed array

        $food = [array("apple", "grape", "pineapple"), array("ice cream", "brownies", "cake")];

        //To get pineapple you do:
        echo $food[0][0];

        $food2 =["fruit" => array("apple", "strawberry"), "meat" => array("chicken", "pork", "beef")];
        
        //to get pork with a multi-dimensional array you do
        echo $food["meat"][1];
    ?>
</body>
</html>