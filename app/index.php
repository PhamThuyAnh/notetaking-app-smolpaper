<?php

include "model/dbh.class.php";
include "controller/UsersController.php";
include "controller/NotesController.php";

include "view/partials/header.php";

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

        case 'forgot-password':
            include "view/ForgotPasswordView.php";
            break;

        case 'take-notes':
            include "view/TakeNotesView.php";
            break;

        case 'profile':
            include "view/ProfileView.php";
            break;
    }
} else {
    include "view/HomeView.php";
}

include "view/partials/footer.php";