<?php
// include("./db-conn.php");
include("../includes/register.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmolPaper | Register</title>
</head>

<body>
    <nav>
        <?php include("navbar.html") ?>
    </nav>
    <header>
        <?php include("header.html") ?>
    </header>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your Username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your Password">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your Email">
        <br>
        <label for="cf-password">Confirm Password</label>
        <input type="password" name="cf-password" placeholder="Confirm your Password">
        <br>
        <input type="submit" name="register" value="Register">
        <br>
    </form>
    <footer>
        <?php include("footer.html") ?>
    </footer>
</body>

</html>