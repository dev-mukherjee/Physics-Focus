<?php

include 'dbconfig.php';

if(isset($_POST['submit'])){

    $news = $_POST['news'];

    $insertquery = "insert into news(news) values ('$news')";
    $query = mysqli_query($con,$insertquery);


    if($query){
        ?>
        <script>alert("NEWS ANNOUNCED");</script>
        <?php
        header("location:news_editor.php");
    }else{
        ?>
        <script>alert("UNABLE TO ANNOUNCE THE NEWS");</script>
        <?php
        header("location:news_editor.php");
    }
}

?>