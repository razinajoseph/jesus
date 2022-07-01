<?php
$servername="localhost";
$username="root";
$password="";
$database="jesus";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("Error deleting record:".mysqli_error($con));

} 
?>