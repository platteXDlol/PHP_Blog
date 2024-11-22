<header>
    <nav class="navbar" style="background-color: #00ABE4">
        <div class="navbar-start">
            <!-- Home Link -->
            <a href="home" class="navbar-item has-text-weight-bold is-size-5" style="color: #1e38fc">
                Home
            </a>

            <!-- Write a Blog Link -->
            <a href="writeBlog" class="navbar-item has-text-weight-bold is-size-5" style="color: #1e38fc">
                Write a Blog
            </a>
        </div>

        <div class="navbar" style="background-color: #00ABE4"
             <div class="navbar-center">

                 <a href="otherBlogs" class="navbar-item has-text-weight-bold is-size-5" style="color: #1e38fc">
                     Other Blogs
                    </a>
             </div>
        </div>


        <?php if (isset($_SESSION['user_id'])) : ?>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <!-- Logout Button -->
                        <a href="logout" class="button is-primary is-medium is-rounded">
                            <strong style="color: #112dfa">Logout</strong>
                        </a>
                    </div>
                </div>
            </div>

        <?php else: ?>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons" style="margin-top: 0;">
                        <!-- Sign Up Button -->
                        <a href="sign_up" class="button is-primary is-medium is-rounded">
                            <strong style="color: #112dfa">Sign up</strong>
                        </a>
                        <!-- Log In Button -->
                        <a href="login" class="button is-light is-medium is-rounded">
                            Log in
                        </a>
                    </div>
                </div>
            </div>

        <?php endif; ?>
    </nav>
</header>
