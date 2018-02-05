<?php 

    include '../helpers/config.php';
    include '../helpers/db.php';

    $post_id = $_GET['id'];
    $board_id= $_GET['board'];

    $delete_post = "DELETE FROM posts WHERE post_id = '$post_id'";
    $run_delete = mysqli_query($connect, $delete_post);
    
    header("location: ../view.php?id=$board_id");
?>