<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

			
	mysqli_query($con,"update product set prod_name='$name',base_price='$price',prod_price='0',
	reorder='$reorder',supplier_id='$supplier',cat_id='$category',serial='$serial',prod_desc='$desc' where prod_id='$id'")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully updated product details!');</script>";
	echo "<script>document.location='product.php'</script>";  

	
?>
