<?php
    session_start();

        $servername = "localhost:3306";
        $username = "nand";
        $password = "123";
        $dbname = "share_market";
        $conn = mysqli_connect($servername, $username,  $password, $dbname);
          
         //Check connection
         if(!$conn){
             die("ERROR: Could not connect. ". mysqli_connect_error());
         }
          
         
        //$clinetid =  $_POST['ID'];
        $firstname =  $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $gend =  $_POST['gender'];
        $addres = $_POST['address'];
        $phonnum = $_POST['phone_number'];
        $cityn = $_POST['city_name'];
        $pass = $_POST['password'];
        $stu = $_POST['status'];

        
        $sql = "INSERT INTO new_client_login(first_name,last_name,gender,address,phone_number,city_name,password,status) VALUES ('$firstname','$lastname','$gend','$addres','$phonnum','$cityn','$pass','$stu')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."; 
              //  . " Please browse your localhost php my admin" 
                //. " to view the updated data</h3>"; 
  
            //echo nl2br("$clinetid\n $firstname\n $lastname\n $gend\n $addres\n $phonnum\n $cityn\n $pass\n $stu");
            header('Location : ./Deshbord.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
   
?> 