<?php
session_start();
include('../dist/includes/dbcon.php');
    $branch=$_SESSION['branch'];
    $name = $_POST['prod_name'];
    $qty = $_POST['qty'];
    $price = 0;
    $base_price = $_POST['base_price'];
 
    $_base_price = $_POST['base_price'];
    $_qty = $_POST['qty'];
   
    date_default_timezone_set('Asia/Manila');
 
    $date = date("Y-m-d H:i:s");
    $id=$_SESSION['id'];
   
    $query=mysqli_query($con,"select * from product where prod_id='$name'")or die(mysqli_error());
 
        $row=mysqli_fetch_array($query);
        $product =$row['prod_name'];
        $prod_qty =$row['prod_qty'];
        $remarks ="added $qty of $product";  
   
        mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
       
   
 
   
   
 
           
            mysqli_query($con,"INSERT INTO stockin(prod_id,qty,date,branch_id,base_price) VALUES('$name','$qty','$date','$branch','$base_price')")or die(mysqli_error($con));
 
        $total_base_price = 0;
        $base_price = 0;
        $qty = 0;
        $base_price = 0;
        $product_base_price = 0;
        $total_base_price = 0;
        $total_qty = 0;
        $average_base_price = 0;
        $new_qty = 0;
        $average_base_price_query= mysqli_query($con,"select * from stockin where prod_id='$name'")or die(mysqli_error());
 
                    while($base_price_row =mysqli_fetch_array($average_base_price_query)){
                          $qty = $base_price_row['qty'];
                          $base_price = $base_price_row['base_price'];
                          $total_qty = $total_qty + $qty;
                          $product_base_price = $base_price * $qty;
                          $total_base_price = $total_base_price + $product_base_price;        
                    }  
 
         $get_qty = mysqli_query($con, "select * from product where prod_id='$name'")or die(mysqli_error());
         while ($get_qty_row = mysqli_fetch_array($get_qty))
         {
             $new_qty = $get_qty_row['prod_qty'];  
             $new_price = $get_qty_row['base_price'];        
 
         }          
 
        $total_qty = $prod_qty + $qty;
 
                if ($new_qty > 0)
                {    
                    $average_base_price = (($_base_price * $_qty) + ($new_price * $new_qty)) / ($total_qty);
           /* echo "<script type='text/javascript'>alert('> 0 qty');</script>";
                */
                }
                else
                {
                    $average_base_price = $base_price;
           /* echo "<script type='text/javascript'>alert('0 qty');</script>";
                */
                }
                   
 
            mysqli_query($con,"UPDATE product SET prod_qty='$total_qty', base_price = '$average_base_price', prod_price = '0' where prod_id='$name' and branch_id='$branch'") or die(mysqli_error($con));
           
            echo "<script type='text/javascript'>alert('Successfully added new stocks!');</script>";
                      echo "<script>document.location='stockin.php'</script>";  
   
?>