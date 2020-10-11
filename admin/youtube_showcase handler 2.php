<?php 
include 'dbconfig.php';

if(isset($_POST['submit'])){
    $video = $_POST['link'];

    $insertquery = "insert into youtube_showcase2(link) values ('$video')";
    $result = mysqli_query($con,$insertquery);

    if($result){
        header("location: youtube_showcase.php");
    }
}
?>