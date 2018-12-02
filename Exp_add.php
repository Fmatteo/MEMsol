<?php 

include('../dist/includes/dbcon.php');

	$cat = $_POST['expenses'];
	
	$query2=mysqli_query($con,"select * from expenses where Exp_name='$Exp'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Expenses already exist!');</script>";
			echo "<script>document.location='expenses.php'</script>";  
		}
		else
		{			
			mysqli_query($con,"INSERT INTO category(Exp_name) VALUES('$Exp')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new category!');</script>";
					  echo "<script>document.location='Expenses.php'</script>";  
		}
?>