<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "traffic";

$con = mysqli_connect($server,$user,$password,$dbname);

if($con){
    echo "connected";
}else{
    echo "not";
}
?>