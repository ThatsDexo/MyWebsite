<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            //for loop:
            for($i = 0; $i <= 10; $i++){
                echo $i;
            }
            echo "<br>";

            
            //while loop
            $count = 1;
            while($count <= 10){
                $count++;
            }


            //do while
            $i = 8;

            do {
                echo "numba: " . $i . "<br>";
                $i++;
            } while ($i < 6);


            //foreach loop

            //indexed array
            $fruits = ["apple", "pineapple", "strawberry"];
            foreach($fruits as $fruit){
                echo $fruit ."<br>";
            }

            //associative array
            $fruitColor = ["apple" => "red", "pineapple" => "yellow", "strawberry" => "red"];
            foreach($fruitColor as $fruit => $color){ //if no "=>" and second variable, the loop will give the value each iteration
                echo $fruit . " has the color of " . $color . "<br>";
            }
        ?>
    </body>
</html>