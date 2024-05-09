<?php

$servername = "localhost";
   $username = "nand";
   $password = "123";
   $dbname = "share_market";
   $conn = mysqli_connect($servername, $username,  $password, $dbname);
  // // Check connection
   
   if(!$conn){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

  // mysqli_close($conn);

?>