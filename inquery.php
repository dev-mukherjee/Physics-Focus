<?php

include 'dbconfig.php';

if (isset($_POST['submit'])) {
	
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $parents_name = mysqli_real_escape_string($con, $_POST['parents']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $school = mysqli_real_escape_string($con, $_POST['school']);
    $board = mysqli_real_escape_string($con, $_POST['board']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $insertquery = "insert into inquery ( name, parents, phone, email, class, school, board, message) values ('$name','$parents_name','$phone','$email','$class','$school','$board','$message')";
    $result = mysqli_query($con, $insertquery);

    if($result){
        
       header('location: studymaterials.php');

    }else {

        ?>

        <script>alert("Unable to send");</script>

        <?php

    }

}

?>