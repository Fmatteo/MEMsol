<?php 
session_start();
include('../dist/includes/dbcon.php');
	$branch=$_SESSION['branch'];
	$name = $_POST['exp_name'];
	$qty = $_POST['qty'];
	
	
	
	date_default_timezone_set('Asia/Manila');

	$date = date("Y-m-d H:i:s");
	$id=$_SESSION['id'];
	
	$query=mysqli_query($con,"select * from expenses where exp_id='$name'")or die(mysqli_error());
  
        $row=mysqli_fetch_array($query);
		$expenses =$row['exp_name'];
		$qty =$row['qty'];
		$remarks ="added $qty of $expenses";  
	
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
		

			
			echo "<script type='text/javascript'>alert('Successfully added new stocks!');</script>";
					  echo "<script>document.location='expensesinput.php'</script>";  
	
?>