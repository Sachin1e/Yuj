<?php
$servername="localhost";
$username="root";
$password="";
$dbname="yuj_database";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo " connection established";
}
else{
    echo " connection failed";
}
?>
