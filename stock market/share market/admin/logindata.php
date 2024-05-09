<?php
    session_start();

    
        include("./dbconnection.php");

        
        $ad_name  =  $_POST['ad_name'];
        $ad_pass = $_POST['ad_pass'];
       

        
        $sql = "select * from admin_login where ad_name='$ad_name' and ad_pass='$ad_pass'";
          $res = mysqli_query($conn, $sql);
        if($res->num_rows > 0){
            $row = $res->fetch_assoc();
            
            header("Location: ./index.php");

        } else{
            //header("Location: ./login.php");
            echo "<script>alert('Wrong Username'); location.href='login.php'</script>";
        }
          
   
?> 