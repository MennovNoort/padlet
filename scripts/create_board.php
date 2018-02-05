<?php 

    session_start();

    include '../helpers/config.php';
    include '../helpers/db.php';
    
    $title = strip_tags ($_POST['title']);
    $description = strip_tags ($_POST['description']);
    $adress = strip_tags ($_POST['adress']);
    $date = $_POST['date'];
    $username = $_SESSION['username'];

    if ($username){
    $insert_board = ("INSERT INTO boards (title, description, adress, maxdate, user) VALUES ('$title','$description','$adress','$date','$username')");

    $run_insert = mysqli_query($connect, $insert_board);
    header('location: ../index.php');
    }
    else{
        session_destroy();
        header('location: ../index.php');
    }
    

?>