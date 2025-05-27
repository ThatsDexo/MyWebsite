<?php
    $dsn = "mysql:host=localhost;dbname=myfirstdatabase"; //Data Source Name. Tells PDO where to connect
    $username = "root";
    $password = "";

    try{
        $pdo = new PDO($dsn, $username, $password); //PDO object 
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //setting error mode to throw exceptions
        /*PDO:: ATTR_ERRMODE can be one of the following:
        PDO:: ERRMODE_SILENT - PDO surpresses errors(default)
        PDO:: ERRMODE_WARNING - PDO will raise warnings
        PDO:: ERRMODE_EXCEPTION - PDO will throw a PDOException if error occours */
        
    } catch(PDOException $e){
        echo "Connection failed: " . $e -> getMessage();

    }