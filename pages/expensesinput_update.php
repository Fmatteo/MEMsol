<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$qty =$_POST['qty'];
	
	mysqli_query($con,"update expensesinput set qty='$qty' where expensesinput_id='$id'")or die(mysqli_error());
	
	echo "<script>document.location='expensesinput.php'</script>";  

	
?>
