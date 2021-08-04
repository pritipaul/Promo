<?php
include "../php/server.php";
 
 $name = $_POST['name'];
 $room = $_POST['room'];

 $sql= "INSERT INTO `promo`.`dfg`(`name`, `room`) VALUES ('$name','$room')";

 mysqli_query($con,$sql);
 mysqli_close($con);

?>
