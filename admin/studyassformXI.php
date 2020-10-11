<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){

    $file = $_FILES['file'];

    //  print_r($file);

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){

        $destfile = 'upload/classxiass/' .$filename;
        move_uploaded_file($filepath, $destfile);
        
        $insertquery = "insert into classxi_ass (assignment) values ('$destfile')";
        $query = mysqli_query($con, $insertquery);
    
            if($query){

                ?>
                    <script>alert("STUDY MATERIALS UPLOADED");</script> -->
                <?php
                     header("location:assignmentxi.php");
            }else{
                ?>
                    <script>alert("FAILED TO UPLOAD STUDY MATERIALS");</script>
                <?php 
                header("location:assignmentxi.php");
            }
    

    }

}
?>