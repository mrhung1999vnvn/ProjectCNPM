
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="./public/img/logo.jpg" alt="test_file"
                                              style="width: 70px; border-radius: 14px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="form-inline">
                <form action="views/signin.inc.php" method="post"class="form-inline">
                    <input class="form-control mr-sm-2" type="text" name="mailuid" id="mailuid" placeholder="Username/E-Mail....">
                    <input class="form-control mr-sm-2" type="password" name="password" id="mailuid" placeholder="Password ....">
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Submit">
                </form>
                <div class="p-4">
                    <form class="form-inline" action="includes/logout.inc.php" method="post">
                        <button class="btn  my-2 my-sm-0 btn-dark"    type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>
                <a href='http://localhost:81/PHP_LOGIN_PROJECT/myapp/views/signup.php'>Signup</a>
            </div>
        </div>
    </nav>
</header>
