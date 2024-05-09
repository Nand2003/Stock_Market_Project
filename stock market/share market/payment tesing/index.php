<?php 
include('./header.php');
session_start();
if(isset($_POST['buynow']))
{
	$amount = $_POST['amount'];
	$_SESSION['amount'] = $amount;
	// echo $amount;
	header("Location: ./pay.php");
}
?>

<title>Shree Ram Investment</title>
<?php include('./container.php');?>

<div class="container">
	<div class="row">		
		<div class="col-sm-12">	
			<h2>Razorpay Payment</h2>
			<br><br>
			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="./image/egr_pic.gif" alt="">
					<form method="POST">
					<div class="caption">
						
						<h4>Amount</h4>

					</div>
					</form>
					<form id="checkout-selection" action="index.php" method="POST">	
					<!-- <h4 class="pull-right"> -->
						<input type="text" name="amount"><!--</h4>	-->
						<input type="hidden" name="item_name" value="Amount">
						<input type="hidden" name="item_description" value="">
						<input type="hidden" name="item_number" value="3456">
						<input type="hidden" name="amount1" value="<?php//  $_POST['amount']; ?>">
						<input type="hidden" name="address" value="Nand Thaker">
						<input type="hidden" name="currency" value="INR">	
						<input type="hidden" name="cust_name" value="Nand">								
						<input type="hidden" name="email" value="nandthaker2003@gmail.com">	
						<input type="hidden" name="contact" value="9409297324">								
						<input type="submit" class="btn btn-primary" name='buynow' value="Buy Now">					
					</form>						
				</div>
			</div>

			<!--<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="./image/egr_pic.gif" alt="">
					<div class="caption">
						<h4 class="pull-right">₹10,000</h4>
						<h4><a href="#">Amount</a></h4>
						
					</div>
					<form id="checkout-selection" action="pay.php" method="POST">		
						<input type="hidden" name="item_name" value="Amount">
						<input type="hidden" name="item_description" value="">
						<input type="hidden" name="item_number" value="3456">
						<input type="hidden" name="amount" value="10,000">
						<input type="hidden" name="address" value="Nand">
						<input type="hidden" name="currency" value="INR">	
						<input type="hidden" name="cust_name" value="Nand">								
						<input type="hidden" name="email" value="nandthaker2003@gmail.com">	
						<input type="hidden" name="contact" value="9409297324">								
						<input type="submit" class="btn btn-primary" value="Buy Now">					
					</form>						
				</div>
			</div>

			<div class="col-sm-4 col-lg-4 col-md-4">
				<div class="thumbnail">
					<img src="./image/egr_pic.gif" alt="">
					<div class="caption">
						<h4 class="pull-right">₹15,000</h4>
						<h4><a href="#">Amount</a></h4>
						
					</div>
					<form id="checkout-selection" action="pay.php" method="POST">		
						<input type="hidden" name="item_name" value="Amount">
						<input type="hidden" name="item_description" value="">
						<input type="hidden" name="item_number" value="3456">
						<input type="hidden" name="amount" value="15,000">
						<input type="hidden" name="address" value="Nand">
						<input type="hidden" name="currency" value="INR">	
						<input type="hidden" name="cust_name" value="nand">								
						<input type="hidden" name="email" value="nandthaker2003@gmail.com">	
						<input type="hidden" name="contact" value="9409297324">								
						<input type="submit" class="btn btn-primary" value="Buy Now">					
					</form>						
				</div>
			</div>
-->
		</div>
	</div>	
</div>
<?php include('./footer.php');?>