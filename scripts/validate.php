<?php 
include '../helpers/config.php';
include '../helpers/db.php';

session_start();

$title = $_POST['posttitle'];
$text = $_POST['posttext'];
$date = date("d/m/Y");
$username = $_SESSION['username'];

//echo $title."<br>".$text."<br>".$username;

$insert_post = ("INSERT INTO posts (title, text, date, username) VALUES ('$title','$text','$date','$username')");

$run_post = mysqli_query($connect, $insert_post);


?>