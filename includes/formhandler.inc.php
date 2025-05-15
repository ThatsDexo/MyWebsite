<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $message = $_POST["message"];
        $name = $_POST["name"];

        try{
            require_once "dbh.inc.php"; //same thing as including a file one time, but makes it an error instead of warning if something goes wrong
            
            $query = "INSERT INTO guestbook (name, message) VALUES(:name, :message)";

            $stmt -> bindParam(":name", $name);
            $stmt -> bindParam(":message", $message);
            $stmt-> execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../index.php");
            die();
        }catch(PDOException $e){
            die("Error occured: " . $e->getMessage());
        }

    }
    else{
        header("Location: ../index.php"); //Uses header function to send user back to index page if not using post method
    }