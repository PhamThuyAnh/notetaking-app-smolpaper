<?php

include("../model/register.php");

class RegisterController extends RegisterModel
{
    private $username;
    private $password;
    private $cf_password;
    private $email;

    public function __construct($username, $password, $cf_password, $email)
    {
        $this->$username = $username;
        $this->$password = $password;
        $this->$cf_password = $cf_password;
        $this->$email = $email;
    }

    public function registerUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../register.php?error=emptyinput");
            exit();
        }
        if ($this->validUsername() == false) {
            header("location: ../register.php?error=invalidusername");
            exit();
        }
        if ($this->validEmail() == false) {
            header("location: ../register.php?error=invalidemail");
            exit();
        }
        if ($this->passwordMatch() == false) {
            header("location: ../register.php?error=passwordmatch");
            exit();
        }
        if ($this->usernameTakenCheck() == false) {
            header("location: ../register.php?error=usernametaken");
            exit();
        }

        $this->setUser($this->username, $this->password, $this->email);
    }

    private function emptyInput()
    {
        $result = null;
        if (empty($username) || empty($password) || empty($cf_password) || empty($email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function validUsername()
    {
        $result = null;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function validEmail()
    {
        $result = null;
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function passwordMatch()
    {
        $result = null;
        if ($this->password == $this->cf_password) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function usernameTakenCheck()
    {
        $result = null;
        if (!$this->checkUser($this->username, $this->email)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
}
