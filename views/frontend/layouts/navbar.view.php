<header class="stricky anim-5-all">
    <div class="container">
        <div class="logo pull-left">
            <a href="/">
                <img src="assets/img/logo-2.png" alt="Logo image">
            </a>
        </div>
        <nav class="mainmenu pull-right">
            <div class="nav-holder">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About us</a></li>
                    <li><a href="/attorneys">Attorneys</a></li>
                    <li><a href="/contact">contact us</a></li>
                    <?php if (isAuth()): ?>
                        <li><a href="/logout">Logout</a></li>
                    <?php else: ?>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="nav-expander">
                <ul>
                    <li><button class="nav-collapser"><i class="fa fa-bars"></i></button></li>
                </ul>
            </div>
        </nav>
    </div>
</header>