<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style7.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form action="login.php" method="post">
        <div class="input-group">
            <label>Username</label>
            <input type="text" class="username" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" class="password" name="password">
        </div>
        <div class="input-group">
            <button class="btn" type="submit"  name="login_user">Login</button>
        </div>
        <p>
            Don't have an account?<a href="register.php">Sign Up</a>
        </p>
    </form>
</body>

</html>