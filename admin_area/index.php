<?php
session_start();
include("includes/db.php");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{

?>
<?php
$admin_session = $_SESSION['admin_email'];

$get_admin = "select * from admins where admin_email='$admin_session'";
$run_admin = mysqli_query($con,$get_admin);
$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];
$admin_name = $row_admin['admin_name'];

$get_products = "select * from products";
$run_products = mysqli_query($con, $get_products);
$count_products = mysqli_num_rows($run_products);

$get_customers = "select * from customers";
$run_customers = mysqli_query($con, $get_customers);
$count_customers = mysqli_num_rows($run_customers);

$get_p_categories = "select * from product_categories";
$run_p_categories = mysqli_query($con, $get_p_categories);
$count_p_categories = mysqli_num_rows($run_p_categories);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7181822bb7.js" crossorigin="anonymous"></script>
    </head>  
    <body>
        <div id="wrapper"><!--wrapper starts-->
            <?php include("includes/sidebar.php"); ?>
            <div id="page-wrapper"><!--page-wrapper starts-->
                <div class="container-fluid"><!--container-fluid starts-->
                    <?php
                    if(isset($_GET['dashboard'])){
                        include("dashboard.php");
                    }
                    ?>
                </div><!--container-fluid ends-->
            </div><!--page-wrapper ends-->
        </div><!--wrapper ends-->
        
        
      <script src="js/jquery.min.js"></script>  
      <script src="js/bootstrap.min.js"></script> 
    </body>
    
    
</html>
<?php } ?>