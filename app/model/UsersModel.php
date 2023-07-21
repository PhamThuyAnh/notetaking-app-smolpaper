<?php

include "dbh.class.php";

class UsersModel extends Dbh
{
    protected function addUser($username, $password, $email)
    {
        $sql = "SELECT * FROM users WHERE username = :username OR email = :email";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([':username' => $username, ':email' => $email]);
        if ($stmt->rowCount() > 0) {
            return false;
        } // user already exists

        $sql = "INSERT INTO users (user_name, user_password, user_email) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([$username, $password, $email]);
    }
}