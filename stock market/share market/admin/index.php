<html>

<body>
<div>
  <?php include "./header.php"; ?>
  </div>

  <section>
	<div class="simg"><img src="./image/slide1.png"></div>
		
	</section>

  <table>
      <div>
          <div>Total Clinet</div>
          <?php
           $servername = "localhost";
           $username = "nand";
           $password = "123";
           $dbname = "share_market";
           $conn = mysqli_connect($servername, $username,  $password, $dbname);
          // // Check connection
           if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
           }
                 
           $total_user = "SELECT * FROM new_client_login";
           $result = mysqli_query($conn, $total_user);
           if($row = mysqli_num_rows($result))
           {
            echo'<h1>'.$row.'</h1>';
           }
           else{
             echo'0';
           }
           
          ?>
        </div>
</table>
    
</body>
</html>