<?php

namespace App\Models;

class Model
{
    protected $conn;

    public function __construct()
    {
        $host = env("DATABASE_HOST");
        $port = env("DATABASE_PORT");
        $username = env("DATABASE_USERNAME");
        $password = env("DATABASE_PASSWORD");
        $db = env("DATABASE_NAME");
        try {
            $this->conn = new \PDO("mysql:host=$host;dbname=$db",$username,$password);
        } catch (\PDOException $exception) {
            dd($exception);
            dd($exception->getMessage());
        }
    }
}