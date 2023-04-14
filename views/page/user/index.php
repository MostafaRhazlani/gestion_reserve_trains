<div id="containers" class="containers">
    <div class="forms_container">
        <div class="signin_signup">
            <!-- sign in -->
            <form action="<?php echo BASE_URL?>user/auth" method="post" class="sign_in_form">
                <h2 class="itle">Sign in</h2>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="username">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" name="password" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-danger rounded-pill solid">Login</button>

                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </form>

            <!-- sign up -->
            <form action="" method="post" class="sign_up_form">
                <h2 class="itle">Sign up</h2>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn btn-danger rounded-pill solid">

                <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <!-- button sign up -->
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptate unde beatae sunt perferendis enim possimus, harum delectus exercitationem soluta!</p>
                <button class="btn btn-outline-light rounded-pill" id="sign-up-btn">Sign up</button>
            </div>

            <img src="<?php echo BASE_URL;?>public/logo/login.svg" class="image" alt="">
        </div>

        <!-- button sign in -->
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta laboriosam quisquam reprehenderit, autem ullam consectetur facere cupiditate pariatur expedita minus!</p>
                <button class="btn btn-outline-light rounded-pill" id="sign-in-btn">Sign in</button>
            </div>

            <img src="<?php echo BASE_URL;?>public/logo/register.svg" class="image" alt="">
        </div>
    </div>
</div>