<main class="content-view container login-view">
    <div class="welcome">
        <p>Welcome!</p>
        <div class="intro">
            <span id=pre-logo>This is</span>
            <span id="logo">SmolPaper</span>
            <br>
            <span id="post-logo">where you can jot down your little notes!</span>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <div class="inputInfo">
                <div id="username">
                    <label for="email">Email</label><br>
                    <input type="text" name="email" placeholder="Enter your username"><br>
                </div>
                <div id="password">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
            </div>
            <?php
            if (isset($_POST["login"])) {
                if ($_POST["email"] == "" || $_POST["password"] == "") {
                    echo "<p style='font-size:15px; color:rgb(238, 62, 62); background-color: rgb(213, 237, 203);'>" . "Username and Password can't be empty!" . "</p>";
                } else {
                    echo $inputEmail = trim($_POST["email"]);
                    echo $inputPwd = $_POST["password"];
                }
            }
            ?>
            <div class="btns">
                <a href="#" id="submit-btn">
                    <input type="submit" name="login" value="Login">
                    <br>
                </a>

                <div>
                    <a href="index.php?act=register" id="link-btn">Register</a>
                    <a href="index.php?act=forgot-password" id="link-btn">Forgot Password</a>
                </div>
            </div>
        </form>
    </div>

</main>