<?php
 include 'config.php';

 $fullname=$_POST['fullname'];
 $email=$_POST['email'];
 $password=$_POST['password'];


 $sql="INSERT INTO `login`(`fullname`, `email`, `password`) VALUES ('$fullname','$email','$password')";

 if(mysqli_query($conn,$sql)){
     echo "<br>Your Login record store successfully <br> Now you can order any food <br> Press Order bottom for ordering food. Enjoy!!!!";

 }
 else{
     echo "error";
     }

?>