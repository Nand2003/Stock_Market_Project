<html>

<body>
<div>
  <?php 
  include("../dbconnection.php");
  include "./header.php"; ?>
  </div>

  
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
        
        <form action="" method="POST">
          <input type="hidden" name="id" value="<?php $row['ID'] ?>">
          <td><input type="submit" name="delete"></td> 
      </tr><br>";
   <?php  }
   } else {
     echo "0 results";
    } ?>
  
  

  ?> 
  
  
  
    </table>
</body>
</html>