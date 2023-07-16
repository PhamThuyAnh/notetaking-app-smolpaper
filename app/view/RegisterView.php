<main class="content-register-view container">
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
            <div class='register-form-title'>
                <h4>CREATE AN ACCOUNT</h4>
            </div>
            <div class="inputInfo">
                <div id="username">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" placeholder="Enter your username"><br>
                </div>
                <div id="password">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" placeholder="Enter your password"><br>
                </div>
                <div id="email">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder="Enter your email"><br>
                </div>
                <div id="repeatPassword">
                    <label for="repeatPassword">Repeat Password</label><br>
                    <input type="password" name="repeatPassword" placeholder="Repeat your password"><br>
                </div>
            </div>
            <div class="btns">
                <a href="index.php?act=register">
                    <input type="submit" name="register" id="register" value="Register">
                </a>
                <br>
                <a href="index.php?act=login">
                    <input type="submit" name="login" id="login" value="Login">
                </a>
            </div>
        </form>
    </div>


</main>