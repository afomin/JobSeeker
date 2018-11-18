<?php

class Database
{
    private $host = "localhost";
    private $db_name = "jobseeker_db";
    private $username = "jobseeker_user";
    private $password = "password";
    private $conn;

    public function getUserDbConnection()
    {
        return $this->getConnection();
    }

    private function getConnection()
    {

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
