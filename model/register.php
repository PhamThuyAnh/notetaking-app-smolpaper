<?php

include('dbh.php');

class RegisterModel extends Dbh
{
    protected function setUser($username, $password, $email)
    {
        $statement = $this->connect()->prepare(
            'INSERT INTO users (user_name, user_password, user_email) VALUES (?, ?, ?)'
        );

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$statement->execute(array($username, $hashedPassword, $email))) {
            $statement = null;
            header("location: ../register.php?error=statementfailed");
            exit();
        }

        $statement = null;
    }

    protected function checkUser($username, $email)
    {
        $statement = $this->connect()->prepare(
            'SELECT user_name FROM users WHERE user_name = ? OR user_email = ?;'
        );

        if (!$statement->execute(array($username, $email))) {
            $statement = null;
            header("location: ../register.php?error=statementfailed");
            exit();
        }

        $resultCheck = null;
        if ($statement->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
