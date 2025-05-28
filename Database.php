<?php

//connect to the database and execute a query
class Database
{
    public PDO $connection;

    public function __construct($config, $username, $password)
    {
        $dsn = "mysql:" . http_build_query($config, "", ";"); // seperating with ; instead of &

        try {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

            ]);
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            ); // sets error mode to throw errors

        } catch (PDOException $e) {
            echo "Error occurred: " . $e->getMessage();
        }
    }

    public function query($query, $param = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($param);
        return $statement;
    }
}