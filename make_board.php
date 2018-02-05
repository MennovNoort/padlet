<?php 
    session_start();
    if (!$_SESSION['username']){
        header('location: index.php');
    }
?>
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
    <a href="index.php">Ga terug</a><br> 
    <form action="scripts/create_board.php" method="post">
        <p>Titel</p>
        <input type="text" name="title" required>
        <p>Beschrijving</p>
        <input type="text" name="description" required>
        <p>adress</p>
        <input type="text" name="adress" required><br>
        <p>Inlever datum</p>
        <input type="date" name="date" required><br><br>
        <input type="submit" class="button" value="Maak board">
    </form>
    <br>
    
</div>