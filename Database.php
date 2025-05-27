<?php


//connect to the database and execute a query
class Database{
    public PDO $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=posterboard;charset=utf8mb4"; //dsn = data source name, tells pdo where to connect
        $username = "root";
        $password = "";
        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // settings error mode to throw errors

        } catch (PDOException $e) {
            echo "Error occurred: " . $e->getMessage();
        }
    }
    public function query($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();
        return  $statement;

    }
}