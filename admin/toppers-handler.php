<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $image = $_FILES['image'];

    // print_r($image);

    $filename = $image['name'];
    $filepath = $image['tmp_name'];
    $fileerror = $image['error'];

    if($fileerror == 0){

        $destfile = 'upload/toppers/' .$filename;
        move_uploaded_file($filepath, $destfile);
        
        $insertquery = "insert into topper(name, class, image) values ('$name','$class','$destfile')";
        $query = mysqli_query($con, $insertquery);
    
            if($query){
                ?>
                    <script>alert("DATA UPDATED");</script>
                <?php
                    header("location:toppers.php");
            }else{
                ?>
                   <script>alert("FAILED TO UPDATE DATA");</script>
                <?php 
                header("location:toppers.php");
            }
    

    }

}