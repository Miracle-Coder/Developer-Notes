
<?php if (isset($_SESSION['logged_user'])) : ?>
<script>
    $('.cd-main-content').css('display:none');
</script>

<div class="logged-user"> <?php echo $_SESSION['logged_user']->login; ?> </div>
    <a href="http://developer-notes.h1n.ru/include/connection/logout.php" class="logout" name="logout_b"><em class="fa fa-sign-out"></em></a>

<?php else: ?>





<main class="cd-main-content">
    <em class="fa fa-sign-in"></em>
    <div class="button-container-2">

        <span class="mas">Login</span>
        <button type="button" name="Hover" class="cd-btn cd-modal-trigger">Login</button>

    </div>

    <div class="cd-modal">
        <div class="modal-content">
            <div class='login-sign--form'>
                <!-- form-container to shrink nav menu -->
                <div class='form-container'>
                    <input checked='true' class='nav-item login' name='nav-item' title='login' type='radio'>
                    <label>login</label>
                    <input class='nav-item sign-up' name='nav-item' title='sign up' type='radio'>
                    <label>sign up</label>
                    <div class='sb'></div>
                    <!-- form-expand to expand form width -->
                    <div class='form-expand'>
                        <div class='form-outer'>
                            <!-- start sign up form-->



                            <div class='login-form'>
                                <button class='facebook-btn facebook-login'>
                                    <i aria-hidden='true' class='fa fa-facebook'></i>
                                    <span>login with facebook</span>
                                </button>
                                <button class='gplus-btn gplus-login'>
                                    <i aria-hidden='true' class='fa fa-google-plus'></i>
                                    <span>login with google plus</span>
                                </button>
                                <div class='social-btn-divider'>
                                    <span>or</span>
                                </div>
                                <div class='user-name input-box'>
                                    <input class='input' id='login-userName' name="login" formmethod="POST" type='text'>
                                    <label class='placeholder' for='login-userName'>
                                        <span>u</span>
                                        <span>s</span>
                                        <span>e</span>
                                        <span>r</span>
                                        <span>&nbsp;</span>
                                        <span>n</span>
                                        <span>a</span>
                                        <span>m</span>
                                        <span>e</span>
                                    </label>
                                </div>
                                <div class='password input-box'>
                                    <input class='input' id='login-password' name="password" formmethod="POST" type='password'>
                                    <label class='placeholder' for='login-password'>
                                        <span>p</span>
                                        <span>a</span>
                                        <span>s</span>
                                        <span>s</span>
                                        <span>w</span>
                                        <span>o</span>
                                        <span>r</span>
                                        <span>d</span>
                                    </label>
                                </div>
                                <div class='login-options'>
                                    <p class='remember-me'>
                                        <label>
                                            <input type='checkbox'>
                                            <i aria-hidden='true' class='fa fa-check-circle'></i>
                                        </label>
                                        <span class='remember-me-txt'>remember me</span>
                                    </p>
                                    <p class='forgot-password'>
                                        <a href='#'>forgot password?</a>
                                    </p>
                                </div>
                                <button class='login-submit' name="do_login">
            <span>
              login
            </span>
                                    <div class='btn-hover-overlay'>
                                        <span>login</span>
                                    </div>
                                </button>
                                <div class="result"></div>
                            </div>
                            <!--start sign up form-->




                            <div class='sign-up-form'>
                                <button class='facebook-btn facebook-login'>
                                    <i aria-hidden='true' class='fa fa-facebook'></i>
                                    <span>sign up with facebook</span>
                                </button>
                                <button class='gplus-btn gplus-login'>
                                    <i aria-hidden='true' class='fa fa-google-plus'></i>
                                    <span>sign up with google plus</span>
                                </button>
                                <div class='user-name input-box'>
                                    <input class='input' id='signUp-userName' name="login" type='text'>
                                    <label class='placeholder' for='signUp-userName'>
                                        <span>u</span>
                                        <span>s</span>
                                        <span>e</span>
                                        <span>r</span>
                                        <span>&nbsp;</span>
                                        <span>n</span>
                                        <span>a</span>
                                        <span>m</span>
                                        <span>e</span>
                                    </label>
                                </div>
                                <div class='email input-box'>
                                    <input class='input' id='signUp-email' name="email" type='text'>
                                    <label class='placeholder' for='signUp-email'>
                                        <span>e</span>
                                        <span>m</span>
                                        <span>a</span>
                                        <span>i</span>
                                        <span>l</span>
                                    </label>
                                </div>
                                <div class='password input-box'>
                                    <input class='input' id='signUp-password' name="password" type='password'>
                                    <label class='placeholder' for='signUp-password'>
                                        <span>p</span>
                                        <span>a</span>
                                        <span>s</span>
                                        <span>s</span>
                                        <span>w</span>
                                        <span>o</span>
                                        <span>r</span>
                                        <span>d</span>
                                    </label>
                                </div>
                                <button class='sign-submit' name="do_signup">
            <span>
              sign up
            </span>
                                    <div class='btn-hover-overlay'>
                                        <span>sign up</span>
                                    </div>
                                </button>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .modal-content -->

        <a href="" class="modal-close">Close</a>
    </div> <!-- .cd-modal -->

    <div class="cd-transition-layer">
        <div class="bg-layer"></div>
    </div>


</main>
    <!-- AJAX -->

    <script src="/js/AJAX.js" defer></script>

    <!-- AJAX -->
<?php endif; ?>