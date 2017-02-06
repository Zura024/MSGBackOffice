<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.02.2017
 * Time: 14:42
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="zura tevdoradze">
    <title>Back office</title>
    <link rel="stylesheet" type="text/css" href="rsc/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <script src=""></script>
</head>
<body>


<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="controller/loginController.php" method="post">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
        </form>
    </div>
</div>
</body>
</html>