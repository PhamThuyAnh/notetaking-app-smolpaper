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
	                <label for="email">Email
		                <input type="text" name="email" placeholder="Enter your username"><br>
	                </label>
                </div>
                <div id="password">
	                <label for="password">Password
		                <input type="password" name="password" placeholder="Enter your password">
	                </label>
                </div>
            </div>
            <?php
            $loginUser = new UsersController;
            $loginUser->loginAction();
            ?>
            <div class="btns">
                <a href="#" id="submit-btn">
	                <input type="submit" name="submit" value="Login">
                </a>
                <div>
                    <a href="index.php?act=register" id="link-btn">Register</a>
                    <a href="index.php?act=forgot-password" id="link-btn">Forgot Password</a>
                </div>
            </div>
        </form>
    </div>

</main>