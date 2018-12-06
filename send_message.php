<?php
    $cn = mysqli_connect('localhost','root','');
      if (!$cn) {
	  echo "unable to connect to server";
    }
    if (!mysqli_select_db($cn,'chatbox')){
   	echo "Database not selected";
   }
     $username = $_GET['username'];
     $message = $_GET['message'];
     $messageTime = time();
     $sql = "INSERT INTO chathistory(username,message,messageTime) VALUES
             ('".$username."','".$message."','".$messageTime."')";
             
     $result =mysqli_query($cn,$sql) or 
       die(mysqli_error($cn));




?>
