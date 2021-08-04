<?php

include "server.php";
if (isset($_POST['button'])) {
   
    $name =$_POST['name'];
    $ph = $_POST['ph'];
    $email = $_POST['email'];

    $sql = " INSERT INTO `promo`.`chats`(`name`, `ph`, `email`) VALUES ('$name' ,'$ph' ,'$email')";
    
    if ($con->query($sql) == true) {
        echo "Succesessfully complite";
        include "../html/start.php";
          }
    else{
        echo "You are Alredy Loging this portal!";
    }
    $con->close();
}
?>