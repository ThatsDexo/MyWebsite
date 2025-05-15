<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $message = $_POST["message"];
        
        try{
            require_once "dbh.inc.php";

            $query = "INSERT INTO guestbook (name, message)  VALUES(:name, :message);";
            $stmt = $pdo->prepare($query);
            

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":message", $message);

            $stmt->execute();

            $pdo = $null;
            $stmt = $null;

            die();
            header("Location: ../index.php");

        }catch(PDOException $e){
            echo "Error occured: " . $e->getMessage();
            die();
        }

    }
    else{
        header("Location: ../index.php");
    }