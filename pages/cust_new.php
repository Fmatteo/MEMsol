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
    <title>Customer | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/sample1.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <style>
      ::-webkit-scrollbar{
  width: 12px;
}
::-webkit-scrollbar-thumb{
  background:linear-gradient(#000, green);
  border-radius: 6px;
}

   .sidebar{  
    width:250;
    height:100%;
    display: block;
    left:-240px;
    top:0px;
    transition: left 0.3s linear;
    
    }
    .sidebar.visible{
    left:0px;
    transition: left 0.3s linear;
    }

    .nav-txt {
      color: white;
    }

    .subnav-txt:hover {
      color: #59abe3;
    }

    .nav-txt:hover {
      background-color: #1f3a93;
      color: white;
      transition: all .2s;
    }

    .main-sidebar {
      background-image: linear-gradient(to left, rgba(52, 152, 219, 1) , rgba(0, 115, 183, 1));
      position: fixed;
      z-index: 5;
    }

    .main-sidebar * a {
      color: white;
    }

    .treeview-menu {
      background-color: #1f3a93;
    }

    .reorder-count {
      font-size: 10px !important;
    }

    .box-header {
      background-image: linear-gradient(to left, rgba(52, 152, 219, 1) , rgba(0, 115, 183, 1));
    }

    .box-title {
      color: white;
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
                      <span class="label label-danger">
                      <?php 
                      $query=mysqli_query($con,"select COUNT(*) as count from product where prod_qty<=reorder and branch_id='$branch'")or die(mysqli_error());
                      $row=mysqli_fetch_array($query);
                      echo $row['count'];
                      ?>  
                      </span>
                    </a>  
              <ul class="treeview-menu">
       <li class="header nav-txt reorder-count">You have <?php echo$row['count'];?> products that needs reorder</li>
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
                        <?php
                        $queryprod=mysqli_query($con,"select prod_name from product where prod_qty<=reorder and branch_id='$branch'")or die(mysqli_error());
        while($rowprod=mysqli_fetch_array($queryprod)){
      ?>
                          <li><!-- start notification -->
                            <a href="reorder.php">
                              <i class="glyphicon glyphicon-refresh text-red"></i> <?php echo $rowprod['prod_name'];?>
                            </a>
                          </li><!-- end notification -->
                          <?php }?>
                        </ul>
                      </li>
                      <li class="footer nav-txt"><a href="inventory.php" class="subnav-txt">View all</a></li>
                    </ul>
                  </li>
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
                         <a href="income.php" class="subnav-txt">
                              <i class="glyphicon glyphicon-th-list text-white"></i>Branch Income
                            </a>
                          </li><!-- end notification -->
                          <li><!-- start notification -->
                         <a href="purchase_request.php" class="subnav-txt">
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
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-warning" href="home.php">Back</a>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Customer</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
             <div class="col-md-8">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add New Customer</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="customer_add.php" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Last Name</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="date" name="last" placeholder="Customer Last Name" required>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
                    
                    <div class="col-md-6">  
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">First Name</label>
                        <div class="input-group col-md-8">
                          <input type="text" class="form-control pull-right" id="date" name="first" placeholder="Customer First Name">
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Contact #</label>
                        <div class="input-group col-md-8">  
                          <input type="text" class="form-control pull-right" id="date" name="contact" placeholder="Contact Number">
                        </div>
                      </div>  
                    </div>
                          
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Address</label>   
                        <div class="input-group col-md-8">
                          <textarea class="form-control pull-right" id="date" name="address" placeholder="Complete Address"></textarea>
                        </div>
                      </div>
                    </div>     

                    
          
                    <div class="col-md-12">
                       <div class="col-md-12">
                        <button class="btn btn-lg btn-primary pull-right" id="daterange-btn" name="">Next</button>
          </div>  
                    </div>  
          
          </form> 

                
        
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
            <div class="col-md-4">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Existing Customer</h3>
                </div>
                <div class="box-body">
                
                <form method="post" action="cash_transaction.php" enctype="multipart/form-data">
  
                  <div class="form-group">
                    <label for="date">Search Customer Name</label>
                    <div class="input-group col-md-12">
                      <select class="form-control select2" style="width: 100%;" name="cid" required>
                      <?php
                       include('../dist/includes/dbcon.php');
                        $query2=mysqli_query($con,"select * from customer where branch_id='$branch' order by cust_last, cust_first")or die(mysqli_error());
                          while($row2=mysqli_fetch_array($query2)){
                      ?>
            <option value="<?php echo $row2['cust_id'];?>"><?php echo $row2['cust_last'].", ".$row2['cust_first'];?></option>
          <?php }?>
                    </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
      
                  
                  <div class="form-group">
                    <div class="input-group col-md-12">
                      <button class="btn btn-lg btn-primary pull-right" id="daterange-btn" name="">
                        Search
                      </button>
           
                    </div>
                  </div><!-- /.form group -->
        </form> 
        
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            

          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
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
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

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
  </body>
</html>
