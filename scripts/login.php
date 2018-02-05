<?php 
session_start();

$username = $_POST['username'];
$password = md5 ($_POST['password']);

if ($username && $password) {
    include '../helpers/config.php';
    include '../helpers/db.php';
    
    $queryusername = "SELECT * FROM users WHERE username = '$username'";
    $resultsusername = $connect->query($queryusername);
    
    if ($resultsusername->num_rows > 0){
        while($row = $resultsusername->fetch_assoc()){
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
            $dbuser = $row['id'];
        }
        if ($username == $dbusername && ($password) == $dbpassword)
        {
            
            $_SESSION['username']=$dbusername;
            $_SESSION['userid']=$dbuser;
            header ("location: ../index.php?goed");
        }
        else 
        {
            header ("location: ../index.php?fout=fout");
        }
    }
    else 
    {
        header ("location: ../index.php?fout=fout");
    }
}
else 
{
    echo "Both fields needs to be filled in!";
}

?>