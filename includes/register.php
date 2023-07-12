<?php

if (isset($_POST['login'])) {
    # grabing the data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cf_password = $_POST['password'];
    $email = $_POST['email'];

    # instantiate register-controller class
    include("../model/dbh.php");
    include("../model/register.php");
    include("../controller/register.php");
    $register = new RegisterController($username, $password, $cf_password, $email);

    # running error handlers and user register
    $register->registerUser();

    # go to dashboard
    header("location:: ../register.php?error=none");
}
