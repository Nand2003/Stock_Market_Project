

<html>
<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="client.php" method="POST">
        <div class="signupsell">
            <div class="div1">New Client Registration</div>
            <br>
                <div class="div2">
                    <label>First Name</label><br>
                    <input type="text" class="" name="first_name" placeholder="First Name"><br><br>

                    <label>Last Name</label><br>
                    <input type="text" class="" name="last_name" placeholder="Last Name"><br><br>
                    
                    <label>Gender</label><br>
                    
                    <input type="radio" value="male" name="gender">
                    <label>Male</label>

                    <input type="radio" value="female" name="gender">
                    <label>Female</label><br><br>

                    <label>Address</label><br>
                    <input type="text" class="" name="address" placeholder="Address"><br><br>

                    <label>Phone Number</label><br>
                    <input type="text" class="" name="phone_number" placeholder="Phone Number"><br><br>

                    <!-- <label>Gmail</label><br>
                    <input type="text" class="" name="city_name" placeholder="Gmail"><br><br> -->

                    <label>City Name</label><br>
                    <input type="text" class="" name="city_name" placeholder="City Name"><br><br>

                    <label>Password</label><br>
                    <input type="password" class="" name="password" placeholder="Password"><br><br>
                    <input type="hidden" name="status">
                    <input type="submit" value="submit">
                </div>
        </div>

        
    </form>

    <form>
        <div class="signupsell2" style="background-image: url('./image/1.png');">
            
        </div>
    </form>
</body>
</html>