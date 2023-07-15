<?php

include "view/header.php";

if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        default:
            include "view/HomeView.php";
            break;

        case 'login':
            include "view/LoginView.php";
            break;

        case 'register':
            include "view/RegisterView.php";
            break;
    }
} else {
    include "view/HomeView.php";
}

include "view/footer.php";
