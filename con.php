<?php
   $db = mysqli_connect('127.0.0.1','root','root','USER');
   if (!$db){
        die("Unable to connect to database: ". mysqli_connect_error());
}
?>
