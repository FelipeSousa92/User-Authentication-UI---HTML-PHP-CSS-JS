<?php
    include('includes/header.php');
?>
    <header>
        <a class="logo"><h2>Logo</h2></a>
        <!-- Navigation Menu -->
        <div class="menu web-menu">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">services</a>
            <a href="#">contact</a>
            <button class="btnLogin-popup" id="webLoginBtn">Login</button>
        </div>

        <div class="menu mobile-menu">
            <a id="icon-mobile-menu" href="javascript:void(0);" onclick="menuMobileOpen()"><i class="fa-solid fa-bars"></i></a>
            <div class="mobile-menu-options">
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">services</a>
                <a href="#">contact</a>
                <button class="btnLogin-popup" id="mobileLoginBtn">Login</button>
            </div>
        </div>

    </header>

    <!-- Wrapper -->
    <div class="wrapper">
         <!-- Close Icon -->
        <span class="icon-close"><i class="fa-regular fa-circle-xmark"></i></span>
        <!-- Login Form -->
        <div class="form-box login">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" id="email" require>
                    <label>Email</label>
                </div><!--input-box-->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" id="password">
                    <label>Password</label>
                </div><!--input-box-->
                <div class="remember-forget">
                    <label for=""><input type="checkbox" name="remember" id="remember">Remember me</label>
                    <a href="#" target="_blank">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <!-- Sign up Form -->
        <div class="form-box register">
            <h2>New Nakama</h2>
            <form action="" method="post">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="username" id="username" require>
                    <label>Username</label>
                </div><!--input-box-->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" id="email" require>
                    <label>Email</label>
                </div><!--input-box-->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" id="password">
                    <label>Password</label>
                </div><!--input-box-->
                <div class="remember-forget">
                    <label for=""><input type="checkbox" name="remember" id="remember"> I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- MAIN-SECTION -->
    <section class="main-section">
        <div class="main-text">
            <h3>How to become...</h3>
            <h1>Full Stack Developer</h1>
            <p>Becoming a full stack developer requires a combination of technical skills and practical experience. It's important to have a strong foundation in both front-end and back-end development, as well as knowledge of popular tools and technologies used in the industry. Building real-world projects, collaborating with other developers, and continuously learning and improving your skills are also essential steps to becoming a successful full stack developer</p>
        </div>
        <div class="main-img">
            <img src="./img/Elite-Full-Stack-Development.png" alt="Elite Full Stack Development">
        </div>
    </section>
<?php
    include('includes/footer.php');
?>