<?php
include("../dbconnection.php");

$con = $GLOBALS["conn"];
if(isset($_GET['ID']))
{
	$ID=$_GET['ID'];

	if($_GET['type']=="delete")
	{
		$sql = "DELETE FROM new_client_login  WHERE ID=".$ID;

		if ($con->query($sql) === TRUE)
		{
			echo "<script>alert('Record deleted successfully.');</script>";
			echo "<script>window.location.href='clientdata.php'</script>";
		}
		else
		{
			echo "<script>alert('Something Went Wrong. Please try again.');</script>".$con->error;
			echo "<script>window.location.href='clientdata.php'</script>";
		}
	}
}
?>