<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
if(empty($_SESSION['branch'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sales Report | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <script type="text/javascript" src="../dist/js/jquery.min.js"></script>
<script type="text/javascript" src="../dist/js/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../plugins/daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../plugins/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="dist/css/sample1.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <style type="text/css">
      h5,h6{
        text-align:center;
      }
    

      @media print {
          .btn-print {
            display:none !important;
          }
      .main-footer  {
      display:none !important;
      }
      .box.box-danger{
        display: none !important;
      }
    }
      
      ::-webkit-scrollbar{
  width: 12px;
}
::-webkit-scrollbar-thumb{
  background:linear-gradient(darkred,white);
}

    .sidebar {  
    width: 250;
    height:100%;
    display: block;
    left: -240px;
    top: 0px;
    transition: left 0.3s linear;
    }

    .sidebar.visible {
    left:0px;
    transition: left 0.3s linear;
    }

    .nav-txt {
      color: white;
    }

    .subnav-txt:hover {
      color: #ff0000;
    }

    .nav-txt:hover {
      background-color: #7d0000;
      color: white;
      transition: all .2s;
    }

    .main-sidebar {
      background-image: linear-gradient(to left, rgba(232,76,61,1) , rgba(193,57,43,1));
      position: fixed;
      z-index: 5;
    }

    .main-sidebar * a {
      color: white;
    }

    .treeview-menu {
      background-color: #7d0000;
    }

    .reorder-count {
      font-size: 10px !important;
    }

    .box-header {
      background-image: linear-gradient(to right, rgba(232,76,61,1) , rgba(193,57,43,1));
    }

    .menu {
      list-style-type: none;
      margin: 0;
      padding: 10px 15px;
    }

    .box-title {
      color: white;
      text-align: center;
      display: block !important;
    }

    body{
      background-color: white;
    }

    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body>
  <div class="wrapper">
      <?php include('../dist/includes/header.php');?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
              <!-- Navbar Right Menu -->
            <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
             
            <li class="treeview">
              <a href="#" class="dropdown-toggle nav-txt" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-refresh text-white"></i> Reorder
                      <span class="label label-success">
                      <?php 
                      $query=mysqli_query($con,"select COUNT(*) as count from product where prod_qty<=reorder and branch_id='$branch'")or die(mysqli_error());
                      $row=mysqli_fetch_array($query);
                      echo $row['count'];
                      ?>  
                      </span>
                    </a>  
              
            <li class="treeview">
              <a href="#" class="dropdown-toggle nav-txt" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-wrench text-white"></i> Maintenance
                      
                    </a>
              <ul class="treeview-menu">
       <li>
                        
              <li><!-- start notification -->
                            <a href="category.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-user text-white"></i> Company Name
                            </a>
                          </li><!-- end notification -->
                          <li class="nav-txt"><!-- start notification -->
                            <a href="customer.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-user text-white"></i> Customer
                            </a>
                          </li><!-- end notification -->
                          <li class="nav-txt"><!-- start notification -->
                            <a href="creditor.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-user text-white"></i> Credit Applicants
                            </a>
                          </li><!-- end notification -->
              <li class="nav-txt"><!-- start notification -->
                            <a href="product.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-cutlery text-white"></i> Product
                            </a>
                          </li><!-- end notification -->
             
              <li class="nav-txt"><!-- start notification -->
                            <a href="supplier.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-send text-white"></i> Distributor
                            </a>
                          </li><!-- end notification -->
              <li class="nav-txt"><!-- start notification -->
                            <a href="drawing.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-send text-white"></i> Drawing / Cashout
                            </a>
                          </li><!-- end notification -->          
             <li><!-- start notification -->
                            <a href="expensesinput.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-user text-white"></i> Expenses
                            </a>
                          </li><!-- end notification -->

                        </ul>
                      </li>
                     
                    
                  </li>
    <li class="treeview">
      <a href="stockin.php" class="dropdown-toggle nav-txt">
                      <i class="glyphicon glyphicon-list text-white"></i> Stock in/out
                      
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                      </li>
                     
                    </ul>
                  </li>
    <li class="treeview">
      <a href="#" class="dropdown-toggle nav-txt" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-stats text-white"></i> Report
                     
                    </a>
                   <ul class="treeview-menu">
                     
                          <li><!-- start notification -->
                            <a href="inventory.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-ok text-white"></i>Inventory
                            </a>
                          </li><!-- end notification -->
                        <li><!-- start notification -->
                         <a href="sales.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-usd text-white"></i>Sales
                            </a>
                          </li><!-- end notification -->
              <li><!-- start notification -->
                         <a href="receivables.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-th-list text-white"></i>Account Receivables
                            </a>
                          </li><!-- end notification -->
              <li><!-- start notification -->
                         <a href="income.php" class="subnav-txt" style="display:none;">
                              <i class="glyphicon glyphicon-th-list text-white"></i>Branch Income
                            </a>
                          </li><!-- end notification -->
                          <li><!-- start notification -->
                         <a href="purchase_request.php" class="subnav-txt" style="display:none;">
                              <i class="glyphicon glyphicon-usd text-white"></i>Purchase Request
                            </a>
                          </li><!-- end notification -->
                        </ul>
                      </li>
                    
    <li class="treeview">
      <a href="profile.php" class="dropdown-toggle nav-txt">
                      <i class="glyphicon glyphicon-cog text-white"></i>
                      <?php echo $_SESSION['name'];?>
                    </a>
                  </li>

    <li class="treeview">
       <a href="logout.php" class="dropdown-toggle nav-txt">
                      <i class="glyphicon glyphicon-off text-white"></i> Logout 
                      
                    </a>
                  </li>       
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
           
    
          <!-- Content Header (Page header) -->
          

          <!-- Main content -->
          <section class="content">
            <div class="row">
      <div class="col-xs-12">
              <div class="box box-danger">
          
              
                <div class="box-body">
        
          <!-- /.form group -->
          <form method="post">
          <div class="form-group col-md-6">
            <label>Date range:</label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input type="text" name="date" class="form-control pull-right active" id="reservation" required>
          </div>
                <!-- /.input group -->
          </div>
              <!-- /.form group --><br>
          <button type="submit" class="btn btn-primary" name="display">Display</button>
        </form>
        
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->       
        </div>
    <?php
    if (isset($_POST['display']))
  {
    $date=$_POST['date'];
    $date=explode('-',$date);
    $branch=$_SESSION['branch'];    
      $start=date("Y/m/d",strtotime($date[0]));
      $end=date("Y/m/d",strtotime($date[1]));
    
    ?>
    <div class="col-md-12">
    <?php
include('../dist/includes/dbcon.php');

$branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from branch where branch_id='$branch'")or die(mysqli_error());
  
        $row=mysqli_fetch_array($query);
        
?>      
                  <h5><b><?php echo $row['branch_name'];?></b> </h5>  
                  <h6>Address: <?php echo $row['branch_address'];?></h6>
                  <h6>Contact #: <?php echo $row['branch_contact'];?></h6>
                  
          <h5><b>Cash Sales Report as of <?php echo date("M d, Y",strtotime($start))." to ".date("M d, Y",strtotime($end));?></b></h5>
                  
          <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print" ></i> Print</a>
              <a class = "btn btn-danger btn-print" href = "home.php"><i class ="glyphicon glyphicon-arrow-left"></i> Back to Homepage</a>   
            
    
      <table id="example1" class="table table-bordered table-striped" style="text-align:center;">
                    <thead>
                      <tr>
                        <th>Transaction #</th>
                        <th>Customer Name</th>
                        <th>Product</th>
                        <th>Product Code</th>
                        <th>Qty</th>
                        <th>Selling Price</th>
                        <th>Total Sales</th>
                        <th>Profit</th>
                        <th>Date Paid</th>
                      </tr>
                    </thead>
                    <tbody>


<?php
$qty = 0;
$amount = 0;
$ex_subtotal = 0;
$ex_total = 0;
$dra_total = 0;
$dra_subtotal = 0;

$expenses_query=mysqli_query($con,"select * from expensesinput where date(date)>='$start' and date(date)<='$end' and branch_id='$branch'")or die(mysqli_error($con));
    while($ex_row=mysqli_fetch_array($expenses_query)){
        $qty = $ex_row['qty'];
        $amount = $ex_row['amount'];
        $ex_subtotal = $qty * $amount;
        $ex_total = $ex_total + $ex_subtotal;
    }
$drawing_query=mysqli_query($con,"select * from drawing where date(date)>='$start' and date(date)<='$end' and branch_id='$branch'")or die(mysqli_error($con));
    while($dra_row=mysqli_fetch_array($drawing_query)){
        $qty = $dra_row['qty'];
        $amount = $dra_row['amount'];
        $dra_subtotal = $qty * $amount;
        $dra_total = $dra_total + $dra_subtotal;
    }

  $query=mysqli_query($con,"select * from sales natural join sales_details natural join product natural join customer where date(date_added)>='$start' and date(date_added)<='$end' and branch_id='$branch' and status=''")or die(mysqli_error($con));
    $qty=0;$grand=0;$discount=0;$total_profit=0;
                while($row=mysqli_fetch_array($query)){
                $total=$row['qty']*$row['price'];
                $grand=$grand+$total-$row['discount'];
        $profit = $row['profit'];
        $total_profit = $total_profit + $profit;
        
?>
            <tr>
            <td><?php echo $row['sales_id'];;?></td>
            <td><?php echo $row['cust_last'].", ".$row['cust_first'];?></td>
            <td><?php echo $row['prod_name'];?></td>
            <td><?php echo $row['serial'];?></td>
            <td><?php echo $row['qty'];?></td>
      <td><?php echo $row['price'];?></td>
            <td><?php echo number_format($total,2);
                ?></td>
            <td><?php echo $profit;?></td>
            <td><?php echo date("M d, Y h:i a",strtotime($row['date_added']));?></td>    
      
    
 <?php }?>                       
                      </tr>

                    </tbody>
                    <tfoot>
          <tr>
            <th colspan="8">Total</th>
            <th style="text-align:right;"><h4><b><?php echo  number_format($grand,2);?></b></h4></th>
          </tr>                
          
          <tr>
            <th colspan="8">Total Cash Sales</th>
            <th style="text-align:right;"><h4><b><?php echo  number_format(($grand-$discount),2);?></b></h4></th>
          </tr>
          <tr>
            <th colspan="8">Total Profit</th>
  <th style="text-align:right;"><h4><b><?php echo  number_format(($total_profit),2);}?></b></h4></th>
          </tr>   
          <tr>
            <th colspan="8">Total Expenses</th>
            <th style="text-align:right;"><h4><b><?php if(isset($ex_total)) echo number_format(($ex_total),2); ?></b></h4></th>            
          </tr>
          <tr>
            <th colspan="8">Total Drawing / Cashout </th>
            <th style="text-align:right;"><h4><b><?php if(isset($dra_total)) echo number_format(($dra_total),2); ?></b></h4></th>            
          </tr>
          <tr>
            <th colspan="8">Total Remaining Balance </th>
            <th style="text-align:right;"><h4><b><?php if(isset($dra_total)) echo number_format(($grand-$dra_total-$ex_total),2); ?></b></h4></th>            
          </tr>
          <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr> 
                      <tr>
                        <th>Prepared by:</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr> 
<?php
    $id=$_SESSION['id'];
    $query=mysqli_query($con,"select * from user where user_id='$id'")or die(mysqli_error($con));
    $row=mysqli_fetch_array($query);
 
?>                      
                      <tr>
                        <th><?php echo $row['name'];?></th>
                        <th></th>
                        <th></th>
                      </tr>         
        </tfoot>
       </table>
    </div>
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->

    <script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="../plugins/select2/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="../plugins/input-mask/jquery.inputmask.js"></script>
  <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="../plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="../plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
    <script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

<script language="javascript">
  

var password;
var pass="1234";
password=prompt('Enter Password to View Webpage','');

if(password==pass)
alert('Correct Password, Click OK to Enter Website.');
else
{
  window.location="http://localhost/MEMsol/pages/home.php"
}

</script>

  </body>
</html>
