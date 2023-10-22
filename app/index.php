<?php

require_once __DIR__ . "/controller/UsersController.php";
require_once __DIR__ . "/helpers/helpers.php";

include_once __DIR__ . "/view/partials/header.php";

if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'login':
            include "view/LoginView.php";
            break;
        case 'logged-in':
            include "view/LoggedinView.php";
            break;
        case 'register':
            include "view/RegisterView.php";
            break;
        case 'forgot-password':
            include "view/ForgotPasswordView.php";
            break;
        case 'take-notes':
            include "view/TakeNotesView.php";
            break;
        case 'profile':
            include "view/ProfileView.php";
            break;
        default:
            include "view/HomeView.php";
            break;
    }
} else {
    include "view/HomeView.php";
}

include_once "view/partials/footer.php";