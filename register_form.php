<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
    <script src=""></script>
</head>
    <div id="container">
        <form action="scripts/register.php" method="POST">
            <p>Firstname</p>
            <input type="text" name="firstname">
            <p>Lastname</p>
            <input type="text" name="lastname">
            <br>
            <p>Email</p>
            <input type="email" name="email">
            <br>
            <p>username</p>
            <input type="text" name="username">
            <br>
            <p>Password</p>
            <input type="password" name="password">
            <br>
            <p>Re-Password</p>
            <input type="password" name="password2">
            <br>
            <br>
            <input type="submit" value="register"><br><br>
            <a href="index.php">Already a account?</a>
        </form>
    </div>    