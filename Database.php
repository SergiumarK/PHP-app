<?php

class Database
{
    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=cara;charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }
    public function query($query)
    {


        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}






