<?php
 $cn = mysqli_connect('localhost','root','');
      if (!$cn) {
	  echo "unable to connect to server";
    }
     if (!mysqli_select_db($cn,'chatbox')){
   	echo "Database not selected";
   }
   $tenMinuteAgo = time('+5:45') - 600;


   $sql = "SELECT username,message,messageTime FROM chathistory
   WHERE messageTime > ".$tenMinuteAgo." ORDER BY messageTime";
  

     $result =mysqli_query($cn,$sql) or 
       die(mysqli_error($cn));


        while( $row = mysqli_fetch_assoc($result)){
        $messageTime = date('g:ia',$row['messageTime']);
         echo'<p><strong>'.$row['username'] . '</strong>:<em>('.$messageTime.')
          </em>'.$row['message'].'</p>';
    }



?>