<?php

class Dbh
{
    protected function connect()
    {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=users-db', $username, $password);
            return $dbh;
        } catch (PDOException $error) {
            print "Error!: " . $error->getMessage() . "<br>";
            die();
        }
    }
}
