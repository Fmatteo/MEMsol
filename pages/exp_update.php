<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$expenses =$_POST['expenses'];
	
	
	mysqli_query($con,"update expenses set exp_name='$expenses' where exp_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated expenses!');</script>";
	echo "<script>document.location='expenses.php'</script>";  

	
?>
