<?php

//var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] == "POST"){ //check for the request type 

    $firstName = htmlspecialchars($_POST["firstname"]); //htmlspecialchars is function to avoid users injecting code or other characters into dialog boxes
    $lastName = htmlspecialchars($_POST["lastname"]);
    $pets = htmlspecialchars($_POST["favoritepet"]);
    
    if(empty(firstName)){
        header("location: ../index.php");
        exit();

        /* You could use html "required" attribute for the input boxes
        however this could be manipulated by using the inspect tool and still be submitted

        Always try to use server side security as most front end things can be easily penetrated
        */
    }

    echo "Here are the values entered by the user:";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $pets;
    header("location: ../index.php"); //takes the user back to the original page
}