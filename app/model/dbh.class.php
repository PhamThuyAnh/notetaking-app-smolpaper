<?php

// database handler
class Dbh
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "smol-paper-database";

    protected function connect()
    {
        try {
            $dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name; // dsn = data source name
            $pdo = new PDO($dsn, $this->db_user, $this->db_pass); // pdo = php data object

            // optional attributes: determine how data is pulled out from the database / fetching mode
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}