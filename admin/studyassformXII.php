<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){

    $file = $_FILES['file'];

    //  print_r($file);

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){

        $destfile = 'upload/classxiiass/' .$filename;
        move_uploaded_file($filepath, $destfile);
        
        $insertquery = "insert into classxii_ass (assignment) values ('$destfile')";
        $query = mysqli_query($con, $insertquery);
    
            if($query){

                ?>
                    <script>alert("STUDY MATERIALS UPLOADED");</script> -->
                <?php
                     header("location:assignmentxii.php");
            }else{
                ?>
                    <script>alert("FAILED TO UPLOAD Assignment");</script>
                <?php 
                header("location:assignmentxii.php");
            }
    

    }

}
?>