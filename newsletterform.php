		<!--  Bootstrap css file  -->
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php

include 'dbconfig.php';

if(isset($_POST['newsletter_sub'])){
    $email = mysqli_real_escape_string($con, $_POST['newsletter_email']);

    $emailquery = "select * from newsletter_subs where email = '$email'";
    $query = mysqli_query($con,$emailquery);
    $emailcount = mysqli_num_rows($query);

    if($emailquery > 0 ){
        header('location: index.php');
    }else{
        $insertquery = "insert into newsletter_subs(email) values('$email')";
        $insquery = mysqli_query($con,$insertquery);
    }

        if($insquery){  

            header('location: index.php');
            
        }else{
            header('location: index.php');
        }

}
?>