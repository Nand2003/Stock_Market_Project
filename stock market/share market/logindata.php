<?php
    session_start();

    
        include("./dbconnection.php");

        
        $first_name =  $_POST['first_name'];
        $password = $_POST['password'];
       

        
        $sql = "select * from new_client_login where first_name='$first_name' and password='$password'";
          $res = mysqli_query($conn, $sql);
        if($res->num_rows > 0){
            $row = $res->fetch_assoc();
            $_SESSION['client_name'] = $first_name;
            $_SESSION['client_password'] = $password;
            
            header("Location: ./Deshbord.php");

        } else{
            //header("Location: ./login.php");
            echo "<script>alert('Wrong Username'); location.href='login.php'</script>";
        }
          
   
?> 