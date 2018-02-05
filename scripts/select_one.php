<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
    <div class="container">
<?php 
    include 'helpers/config.php';
    include 'helpers/db.php';
    session_start();
    $id = $_GET['id'];
    
        $_SESSION['id'] = $id;
    $select_one = "SELECT * FROM boards WHERE board_id = '$id'";
    $do_one =  mysqli_query($connect, $select_one);

if ($do_one->num_rows > 0) {
    
        $datum = "";
        while($row = $do_one->fetch_assoc()) {
            
            $datum = $row['maxdate'];
            echo "<br><br><div id='title'>";
            echo $row['title']."</div><br>";
            echo "Deze opdracht moet ingeleverd worden voor ".$datum;
            echo "<hr><div id='results'>";
                $select_all_posts = "SELECT * FROM posts";
                $do_select =  mysqli_query($connect, $select_all_posts);
        }
    $username = $_SESSION['username'];
    if ($do_select->num_rows > 0) {
        while($row = $do_select->fetch_assoc()) {
            //if ($row['date'] > $datum){echo "henk";}
            echo "<div class='result'>".$row['title']." <br>";
            echo $row['text']."<br> ".$row['username']." <br>".$row['date'];
            $post_id = $row['post_id'];
            if ($username == $row['username']){
                echo "<a href='scripts/delete_post.php?id=".$post_id."&board=".$id."'><button id='delete'>X</button></a>";
            }
            echo "<br></div>";
            
        }}echo "</div>";
        }
    else{
    header('location:index.php?check=no');
}
echo "<br><br><button id='add'>+</button>";
    ?>
        <div id="formid">
                <p>Titel</p>
                <input type="text" id="title"><br>
                <p>Tekst</p><br>
                <input type="text" id="text"><br><br>
                <button id="voegtoe">Toevoegen</button><br>
            <br>
            <button id="annuleer">annuleer</button>
        </div>
        <div id="results">
        </div>
   <!--<script> var init_opdrachten='
<?php
    /*$data="file-not-found";
    if(is_file("temp.txt"))
        $data=file_get_contents("scripts/temp.txt");
    echo $data;*/
?>
';</script>-->
    <script src="js/add.js"></script>
        
        </div>