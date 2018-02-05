<?php
include '../helpers/config.php';
include '../helpers/db.php';
$firstname = strip_tags ($_POST["username"]);
$lastname = strip_tags ($_POST["lastname"]);
$email = strip_tags ($_POST["email"]);
$username = strip_tags ($_POST["username"]);
$password = strip_tags ($_POST["password"]);
$password2 = strip_tags ($_POST["password2"]);
    if ($firstname&&$lastname&&$email&&$password&&$password2){
        if ($password == $password2){
            if (strlen($firstname) > 4){
                if (strlen($password) < 20 && strlen($password) > 5){
                    //kijkt of de username al in de database staat 
                    $username_check = ("SELECT username FROM users WHERE username ='username'");
                    $run_check = mysqli_query($connect, $username_check);
                    //telt het aantal rijen
                    $check = mysqli_num_rows($run_check);
                    if ($check == 0){
                        $password = md5 ($password);
                        $password2 = md5 ($password2);
                        
                        $email_check = ("SELECT email FROM users WHERE email ='$email'");
                        $run_check2 = mysqli_query($connect, $email_check);
                        $check2 = mysqli_num_rows($run_check2);
                        if ($check2 == 0){
                            $sql = ("INSERT INTO users (firstname, lastname, username, email, password) VALUES ('$firstname','$lastname','$username','$email','$password')");
                        }
                         if ($connect->multi_query($sql)) {
                                header("location: ../index.php");
                            } 
                        else {
                            echo "This email is already in use!";
                        }
                    }
                    else {
                        echo "This username is already exist!";    
                    }
                }
                else {
                    echo "Password max 20 min 6!";
                }
            }
            else {
                echo "Username min 5 characters!";
            }
        }
        else {
            echo "Password doesn't match";
        }
    }
    else {
        echo "Vul alle velden in!";
    }
?>