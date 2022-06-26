<?php
$serverName = "localhost";
$userName="root";
$password="";
$dbName="project_rahe";

$conn= mysqli_connect($serverName,$userName,$password,$dbName);
if(!$conn){
    die("connection field". mysql_connect_error());
}
else{
    echo "Hiii";
}
?>