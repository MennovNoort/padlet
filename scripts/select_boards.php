<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
    <script src=""></script>
</head>
    <div id="all-boards">
<?php 
    
    include 'helpers/config.php';
    include 'helpers/db.php';
    
    $username = $_SESSION['username'];

    $select_all = "SELECT * FROM boards WHERE user = '$username'";
    $do_select =  mysqli_query($connect, $select_all);

    if ($do_select->num_rows > 0) {
        while($row = $do_select->fetch_assoc()) {
            echo "<br><br>";
            echo "<div class='board'><a href='view.php?id=" .$row['board_id']  ."'>".$row['title']."</a><br><br><p>".$username."</p></div>";
        }
    }
        else{
            echo " <br><br>U heeft nog geen board aangemaakt";
        }
?>
        </div>