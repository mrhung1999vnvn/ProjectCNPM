<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>My Site</title>
</head>
<body>

<div class=" container d-flex justify-content-center jumbotron">
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <form action="signup.inc.php" method="post">
                <input  class="form-control mr-sm-2 mb-3" type="text" name="uid" id="uid" placeholder="Username" value="mrhung1999vnvn">
                <input  class="form-control mr-sm-2 mb-3" type="email" name="mail" id="mail" placeholder="E-mail" value="phamhoaihung2408@gmail.com">
                <input  class="form-control mr-sm-2 mb-3" type="password" name="pwd" id="pwd" placeholder="Password" value="hungprokute123">
                <input  class="form-control mr-sm-2 mb-3" type="password" name="pwd-repeat" id="pwd-repeat" placeholder="Password" value="hungprokute123">
                <button class="btn my-2 my-sm-0 btn-dark" type="submit" name="signup-submit">SignUp</button>
            </form>
        </section>
    </div>
</div>

</body>
</html>