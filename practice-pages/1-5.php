<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> html hello world </p>
    <?php
        echo "Hello World";
        //if you had a whole page of php, you would have the first opening
        //tag (<?php) but you would not have any closing tag

        /*
        multiple 
        line 
        comment
        */

    


    ?>

     
    <?php if(true){?> 
         
        <p> some HTML </p>
    <?php } //you can mix and match php and html ?>

    <?php
    // variables
        $fullName = "dan";
        echo $fullName;

        //Scalar types (one value):
        $string = "daniel";
        $int = 123;
        $float = 3.14;
        $boolean = false; // 0 = false, 1 = true

        // Array type (multiple data types):
        $name = array("dan", "sam", "luke");
        $names2 = ["fran", "bam", "clam"];

        //Object type
        //$obj1 = new Car();
    ?>

    <p>Hi my name is <?php echo $fullName ?>, how are you?</p>

     
    <?php
        echo "<br>";
        echo "------------------Superglobal Variables ------------------";
        echo "<br>";
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";
        echo $_SERVER["REMOTE_ADDR"]

    ?>

    <?php
        // echo "<br>";
        // echo "-----------------GET METHOD-------------------";
        // echo "<br>";
        // echo $_GET["fart"];
        // echo "<br>";
        // echo $_GET["eyecolor"];

        //post is more secretive and does not shows information
        //within the browsers URL

    ?>

    <?php
        echo $_REQUEST["fart"];
        //request looks for get, post, and cookies.
        //however you don't really know what youre grabbing
        //and can get risky when dealing with data 
    ?>

    <?php echo $_FILES["name"]; 
    //allows to grab information on files that users submit
    //to check different attributes of it
    ?>

    <?php
        echo $_COOKIE["name"];
        $_SESSION["username"] = "dex";
        echo $_SESSION["username"];

        //can use these to grab data form a session and cookie
    ?>

    <?php
        //$_ENV[];
    ?>



</body>
</html>

