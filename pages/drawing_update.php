<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$qty =$_POST['qty'];
	
	mysqli_query($con,"update drawing set qty='$qty' where dra_id='$id'")or die(mysqli_error());
	
	echo "<script>document.location='drawing.php'</script>";  

	
?>
