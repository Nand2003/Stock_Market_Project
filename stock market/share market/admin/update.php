<?php 
include("../dbconnection.php");
if(isset($_POST["updateValue"]))
{
    $ID = $_POST['ID'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender =$_POST['gender'];
    $address =$_POST['address'];
    $phone_number = $_POST['phone_number'];
    $city_name = $_POST['city_name'];
    $password = $_POST['password'];

    $query= "UPDATE  new_client_login SET first_name='$first_name',last_name='$last_name',gender='$gender',address='$address',phone_number='$phone_number',city_name='$city_name',password='$password' where ID=$ID";
    
    $data = mysqli_query($conn,$query);
    if ($data) {
    header('location : ./clientdata.php');
  }
  else
    {
      echo "Something Went Wrong. Please try again";
    }
}

?>

<html>
<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="update.php" method="post">
        <?php
        $ID=0;
        if(isset($_GET['ID'])){
            $ID=$_GET['ID'];
        }
            
            $sql=mysqli_query($conn,"select * from  new_client_login where ID=$ID");
            $cnt=1;
            while ($row=mysqli_fetch_array($sql)) {
            
        ?>
        <div class="signupsell">
            <div class="div1">UP Date Client Profile</div>
            <br>
                <div class="div2">
                <input type="hidden" name="ID" value=<?php echo $ID; ?> >
                    <label>First Name</label><br>
                    <input type="text" value="<?php echo $row['first_name']; ?>" name="first_name" placeholder="First Name"><br><br>

                    <label>Last Name</label><br>
                    <input type="text" value="<?php echo $row['last_name']; ?>" name="last_name" placeholder="Last Name"><br><br>
                    
                    <label>Gender</label><br>
                    
                    <input type="radio" value="<?php echo $row['gender']; ?>" name="gender">
                    <label>Male</label>

                    <input type="radio" value="<?php echo $row['gender']; ?>" name="gender">
                    <label>Female</label><br><br>

                    <label>Address</label><br>
                    <input type="text" value="<?php echo $row['address']; ?>" name="address" placeholder="Address"><br><br>

                    <label>Phone Number</label><br>
                    <input type="text" value="<?php echo $row['phone_number']; ?>" name="phone_number" placeholder="Phone Number"><br><br>

                    
                    <label>City Name</label><br>
                    <input type="text" value="<?php echo $row['city_name']; ?>" name="city_name" placeholder="City Name"><br><br>

                    <label>Password</label><br>
                    <input type="password"value="<?php echo $row['password']; ?>" name="password" placeholder="Password"><br><br>
                    <input type="hidden" name="status">
                    <input type="submit" value="submit" name="updateValue">
                    <?php } ?>
                </div>
        </div>

        
    </form>

    <form>
        <div class="signupsell2" style="background-image: url('./image/1.png');">
            
        </div>
    </form>
</body>
</html>