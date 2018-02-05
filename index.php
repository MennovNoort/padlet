<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
    <script src=""></script>
</head>

<body>
    <div id="container">
        <?php
        session_start();
        if(!isset($_SESSION['username'])){?>
            <div id="login-scherm">
                <p>Heb je geen account?</p>
                <a href="register_form.php">Aanmelden</a>
                <form method="POST" action="scripts/login.php">
                    <p>Email of gebruikersnaam</p>
                    <input type="text" name="username" placeholder="Email of gebruikersnaam"><br>
                    <p>Wachtwoord</p>
                    <input type="password" name="password" placeholder="Wachtwoord"><br><br>
                    <a href="">Wachtwoord vergeten?</a> <br><br>
                    <input type="submit" value="LOG IN">
                </form>
            </div>
        <?php
                                   }
        else{
            echo "Hi ".$_SESSION['username']."!"."<br>";
            echo "<a href='scripts/logout.php'>uitloggen</a><br>";
            include 'board.php';
            include 'scripts/select_boards.php';

        }
        ?>
    </div>    
</body>
</html>
