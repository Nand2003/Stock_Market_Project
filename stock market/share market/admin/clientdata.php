 <html>

 <body>
  <?php   
   include("./dbconnection.php");
   include "./header.php";
    ?>




  
     <table>
         <h2>All Clinet Data</h2>
     
         <?php
   


   $sql = "SELECT * FROM new_client_login";
   $result = mysqli_query($conn, $sql);
 
   if (mysqli_num_rows($result) > 0) {
  //    output data of each row
     echo "<table border=1>
      <tr>
        <th>ID</th>
        <th>first name</th>
        <th>last name</th>
        <th>gender</th>
        <th>Address</th>
        <th>phone number</th>
        <th>city</th>
        <th>password</th>
        <th>status</th>
        <th>Delete</th>
        <th>UP Date</th>
      </tr>";
    
     while($row = mysqli_fetch_assoc($result)) {
      echo "
     
      <tr>
        <td>".$row["ID"]."</td>
        <td>".$row["first_name"]."</td>
        <td> ".$row["last_name"]."</td>
        <td> ".$row["gender"]."</td>
        <td> ".$row["address"]."</td>
        <td> ".$row["phone_number"]."</td>
        <td> ".$row["city_name"]."</td>
        <td> ".$row["password"]."</td>
        <td> ".$row["status"]."</td>
        <td>
        <a href='delete.php?ID=".$row['ID']."&type=delete'><button>delete</button></a>
        </td>
        <td>
        <a href='update.php?ID=".$row['ID']." &type=update'><button>Up Date</button></a>
        </td> </tr>";
     }
      echo "</table>";
    }else{
      echo "no";
    }
     ?>
 

    <div>
 <form action="./clientdata.php" method="POST">
 <input type="hidden" name="id" value="<?php $row['ID']?>">
  
  <br>
</form>
   </div>
  
  
     </table>
 </body>
 </html>