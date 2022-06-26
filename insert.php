<?php
 include 'config.php';

 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $item=$_POST['item'];
 $address=$_POST['address'];
 $comment=$_POST['comment'];
 

 $sql="INSERT INTO `rahe`(`name`, `email`,`mobile`,`item`,`address`, `comment`) VALUES ('$name','$email','$mobile','$item','$address','$comment')";

 if(mysqli_query($conn,$sql)){
     echo "<br>We store your record successfully <br>";
     echo "You will get your order as soon <br> Our Team on the way. Thankyou";

 }
 else{
     echo "error";
     }

?>