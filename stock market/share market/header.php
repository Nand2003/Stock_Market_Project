<html>
    <head>
        <link rel="stylesheet" href="./css/deshbord.css">
    </head>
    <body>
  



<body>
<section class="header">
	<p><img src="./image/logo.png"></p>
          <ul >
            <li> <a href="Deshbord.php">Home</a> </li>
            <li> <a href="#">SERVICES</a>
               <ul class="dropdown">
					<li><a href="equity.php">Equity</a></li>
					<li><a href="mutual_fund.php">Mutual Fund</a></li>
					<li><a href="insurance.php">Insurance</a></li>
					<li><a href="financial_planning.php">Financial Planning</a></li>
					<li><a href="taxation.php">Taxation</a></li>
					<li><a href="retirement_planning.php">Retirement Planning</a></li>
					<li><a href="fixed_deposit.php">Fixed Deposit</a></li>
					<li><a href="ncd.php">NCD</a></li>
					<li><a href="nps.php">NPS</a></li>
              	</ul> 
            </li>

            <li><a href="market.php">Market</a></li>
            <li> <a href="about.php">About Us</a></li>         
            <li><a href="contact.php">Contact</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="login.php">Logout</a></li>
            <li><?php 
            session_start();
            echo "Client Name ".$_SESSION['client_name']; ?></li>

          </ul>
          
        </section>
    </body>
</html>