<?php

include "../model/UsersModel.php";

class UsersController extends UsersModel
{
    public function registerUser($username, $password, $email)
    {
        $this->addUser($username, $password, $email);
    }
    
    public function loginUser($email, $password)
    {

    }
}