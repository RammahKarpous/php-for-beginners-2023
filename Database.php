<?php

class Database
{

    public $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=php-for-beginners-2023;charset=utf8mb4';
        $this->connection = new PDO($dsn, 'root', 'welkom01');
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}