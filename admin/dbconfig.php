<?php 
// DATABASE CREDENTIALS
$server  = 'localhost';
$serverUsername  = '';
$serverPassword  = "";
$dbName  = 'physics focus';
// Connect with the database
$con = mysqli_connect($server,$serverUsername,$serverPassword,$dbName);

if(mysqli_connect_errno()){
    echo("Unable to Connect<br>").$con;
}

?>
