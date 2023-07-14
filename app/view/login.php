<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmolPaper | Login</title>
</head>

<body>
    <div id="wrapper">
        <nav>
            <a href="#" id="logo">SmolPaper</a>
        </nav>
        <content class="content">
            <div class="welcome">
                <p>Welcome!</p>
            </div>
            <div class="intro">
                <span id=pre-logo>This is</span>
                <span id="logo">SmolPaper</span>
                <br>
                <span id=post-logo>where you can jot down your little notes!</span>
            </div>
            <div class="loginForm">
                <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                    <label for="username">Username </label><br>
                    <input type="text" name="username"><br>
                    <label for="password">Password </label><br>
                    <input type="text" name="password"><br>
                    <input type="submmit" name="login" value="Login">
                </form>
                <a href="forgotPassword.php">
                    <input type="submit" name="forgotPassword" id="forgotPassword" value="Forgot Password">
                </a>
                <a href="register.php">
                    <input type="submit" name="register" id="register" value="Register">
                </a>
            </div>
        </content>
        <footer>
            <div class="right">
                <p id="since">@since2023</p>
            </div>
            <div class="left">
                <img src="icons\mail-icon.png" alt="mail-icon.img">
                <a href="mailto: mxkazix@gmail.com">mxkazix@gmail.com</a>
            </div>
        </footer>
    </div>
</body>

</html>