<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Import Style-->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container">
    <div class="section login row">
        <div class="login-from horizontal center col s6 offset-s3">
            <form action="" method="post">
                <div class="title center">Login</div>
                <?php include('errors.php');?>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="text" name="username" class="validate">
                        <label for="last_name">Username</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <input type="submit" name="login" value="Login" class="btn center">
            </form>
        </div>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--Main JS-->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>