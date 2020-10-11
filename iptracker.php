<?php
    include 'dbconfig.php';

$ip=$_SERVER['REMOTE_ADDR'];


$ipquery = "select * from visitor_counter where ip_address='$ip'";
$query = mysqli_query($con,$ipquery);
$rows = mysqli_num_rows($query);

if($rows < 1){
    $insertquery ="insert into visitor_counter (ip_address) values ('$ip')";
    $insquery = mysqli_query($con,$insertquery);

}

?>