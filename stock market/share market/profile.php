<?php include "./header.php"; 
include("./dbconnection.php");

?>
   
   
   
   
<html>
    <head>
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/deshbord.css">
    <style>
table, th, td {
  border: 1px solid;
}
</style>
    </head>
<body>
<!---<section>
	<div class="simg"><img src="./image/about.jpg"></div>
		
	</section>--->

   
    

    <section class="cteam">
        <img src="./image/time.jpg" ali=""  />
        
</section> 

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <table 	text-align: center;>
    <h2>User Profile</h2>
    

<tr>
    <th>Client name</th>
    <td><?php
   // session_start();
    echo "".$_SESSION['client_name']; 
    ?></td>
  </tr>


  <tr>
    <th>Password</th>
    <td><?php
   // session_start();
    echo "".$_SESSION['client_password']; 
    ?></td>
  </tr>

  <tr>
    <th>Your current balance</th>
    <td>0</td>
  </tr>

  
  <tr>
    <th>Your Order</th>
    <td>0</td>
  </tr>

  <tr>
    <td>Payment</td>
    <td><a href="./payment tesing/index.php"><button>payment</button></a></td>
  </tr>
    

</table>

</body>
</html>

<?php include "./footer.php";?>