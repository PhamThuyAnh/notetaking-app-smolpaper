<main class="content-view container register-view">
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
	                <label for="username">Username
		                <input type="text" name="username" placeholder="Enter your username"><br>
	                </label>
                </div>
                <div id="password">
	                <label for="password">Password
		                <input type="password" name="password" placeholder="Enter your password"><br>
	                </label>
                </div>
                <div id="email">
	                <label for="email">Email
		                <input type="email" name="email" placeholder="Enter your email"><br>
	                </label>
                </div>
                <div id="repeatPassword">
	                <label for="repeatPassword">Repeat Password
		                <input type="password" name="repeatPassword" placeholder="Repeat your password"><br>
	                </label>
                </div>
            </div>
            <div class="btns">
	            <?php
	            $registerUser = new UsersController();
	            $registerUser->registerAction();
	            ?>
                <a href="#">
                    <input type="submit" name="submit" id="big" value="Register">
                </a>

	            <br>
                <a href="index.php?act=login" id="link-btn">Go to Login</button>
                </a>
            </div>
        </form>
    </div>

</main>