<?php 
session_start();
include('../dist/includes/dbcon.php');
	$branch=$_SESSION['branch'];
	$name = $_POST['exp_name'];
	$qty = $_POST['qty'];
	$amount = $_POST['amount'];
	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d H:i:s");
	$id=$_SESSION['id'];
	$remarks ="added $qty of $name";  
	
	mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	mysqli_query($con,"INSERT INTO expensesinput(exp_name,qty,amount,date,branch_id) VALUES('$name','$qty','$amount','$date','$branch')")or die(mysqli_error($con));
		

			
			echo "<script type='text/javascript'>alert('Successfully added new stocks!');</script>";
					  echo "<script>document.location='expensesinput.php'</script>";  
	
?>