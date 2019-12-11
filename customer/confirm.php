<?php
    session_start();
        if(!isset($_SESSION['customer_email'])){
        echo "<script>window.open('../checkout.php','_self')</script>";
    }else{ 
    include("includes/db.php");
    include("functions/functions.php");
?>
<!DOCTYPE html>
<!---
Bryon Severns
Alphabry LLC
--->
<html>
    <head>
        <meta charset="UTF-8">
        <title>E Commerce Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>       
        <link href="http://fonts.googleapis.com/css" rel="stylesheet">        
        <link href="styles/style.css" rel="stylesheet">
        <link href="font-awesome/CSS/font-awesome.min.css" rel="stylesheet">
    </head>
    
    <body>
        <div id="top"><!---top starts--->
            <div class="container"><!---container starts--->
                <div class="col-md-6 offer"><!---col-md-6 offer starts--->
                    <a href="#" class="btn btn-success btn-sm">
                        <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo "Welcome: Guest ";
                        }else{
                            echo "Welcome:  " . $_SESSION['customer_email'] . "";
                        }          
                        ?>
                    </a>
                    <a href="#">
                        Shopping Cart Total: <?php total_price(); ?>, Total Items: <?php items(); ?>
                    </a>
                </div><!---col-md-6 offer ends--->
                <div class="col-md-6"><!---col-md-6 starts--->
                    <ul class="menu"><!---menu starts--->
                        <li>
                            <a href="../customer_register.php">
                                Register
                            </a>
                        </li>
                        <li>
                            <?php
                         if(!isset($_SESSION['customer_email'])){
                             echo "<a href='../checkout.php'>My Account</a>";
                         }else{
                             echo "<a href='my_account.php?my_orders'>My Account</a>";
                         }
                         ?>
                        </li>
                        <li>
                            <a href="../cart.php">
                                Go to Cart
                            </a>
                        </li>
                        <li>
                          <?php 
                          if(!isset($_SESSION['customer_email'])){
                              echo "<a href='../checkout.php'>Login</a>";
                          }else{
                              echo "<a href='logout.php'>Logout</a>";
                          }
                          ?>
                        </li>
                    </ul><!---menu ends--->                 
                </div><!---col-md-6 ends--->
            </div><!---container ends--->
        </div><!---top ends--->
        
        <div class="navbar navbar-default" id="navbar"><!---navbar navbar-default starts--->
            <div class="container"><!---container starts--->
                <div class="navbar-header"><!---navbar-header starts--->
                    <a class="navbar-brand home" href="index.php"><!---navbar-brand home starts--->
                        <img src="images/wowdealslogo.png" alt="Wow Deals" class="hidden-xs">
                        <img src="images/wowdealslogo.png" alt="Wow Deals" class="visible-xs">
                    </a><!---navbar-brand home ends--->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i><!---menu icon--->
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span><!---screen reader for blind users--->
                        <i class="fa fa-search"></i><!---search icon--->
                    </button>
                </div><!---header ends--->
                <div class="navbar-collapse collapse" id="navigation"><!---navbar-collapse collapse starts--->
                    <div class="padding-nav"><!---padding-nav starts--->
                        <ul class="nav navbar-nav navbar-left "><!---nav navbar-nav navbar-left starts--->
                            <li>
                                <a href="../index.php">Home</a>
                            </li>
                            <li>
                                <a href="../shop.php">Shop</a>
                            </li>
                            <li class="active">
                                <?php
                         if(!isset($_SESSION['customer_email'])){
                             echo "<a href='../checkout.php'>My Account</a>";
                         }else{
                             echo "<a href='my_account.php?my_orders'>My Account</a>";
                         }
                         ?>
                            </li>
                            <li>
                                <a href="../cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="../contact.php">Contact Us</a>
                            </li>
                        </ul><!---nav navbar-nav navbar-left ends--->
                    </div><!---padding-nav ends--->
                    <a class="btn btn-primary navbar-btn right" href="cart.php"><!---btn btn-primary navbar-btn right starts--->
                        <i class="fa fa-shopping-cart"></i> 
                        <span> <?php items(); ?> items in cart </span>
                    </a><!---btn btn-primary navbar-btn right ends--->
                    <div class="navbar-collapse collapse right"><!---navbar-collapse collapse right start--->
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                            <span class="sr-only">Toggle Search</span><!---screen reader for blind users--->
                            <i class="fa fa-search"></i><!---search icon--->
                        </button>                       
                    </div><!---navbar-collapse collapse right ends--->
                    <div class="collapse clearfix" id="search"><!---collapse clearfix starts--->
                        <form class="navbar-form" method="get" action="results.php"><!---navbar-form starts--->
                            <div class="input-group"><!---input-group--->
                                <input class="form-control" type="text" placeholder="Search" name="user_query" required>
                                <span class="input-group-btn"><!---input-group-btn starts--->
                                <button type="submit" value="search" name="search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                                </span>  <!---input-group-btn ends--->  
                            </div><!---input-group--->
                        </form><!---navbar-form ends--->
                    </div>   <!---collapse clearfix ends--->        
                </div><!---navbar-collapse collapse ends--->
            </div><!---container ends--->
        </div><!---navbar navbar-default ends--->
        
        <div id="content" ><!-- content starts -->
            <div class="container"><!-- container starts -->
                <div class="col-md-12"><!-- col-md-12 starts -->
                    <ul class="breadcrumb"><!-- breadcrumb starts -->
                        <li><a href="index.php">Home</a></li>
                        <li><a href="my_account.php">Shop</a></li>
                    </ul><!-- breadcrumb ends -->
                </div><!-- col-md-12 ends --> 
                
                <div class="col-md-3"><!-- col-md-3 starts -->
                    <?php include("includes/sidebar.php"); ?>                    
                </div><!-- col-md-3 ends -->
                <div class="col-md-9"><!--col-md-9-->
                    <div class="box"><!--box-->
                        <h1 align="center">Please Confirm Your Payment</h1>
                        <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--form starts-->
                            <div class="form-group"><!--form-group-->
                                <label>Invoice No:</label>
                                <input type="text" class="form-control" name="invoice_no" required>
                            </div><!--form-group-->
                                                        <div class="form-group"><!--form-group-->
                                <label>Account Sent:</label>
                                <input type="text" class="form-control" name="amount_sent" required>
                            </div><!--form-group-->
                            <div class="form-group"><!--form-group-->
                                <label>Select Payment Mode:</label>
                                <select name="payment_mode" class="form-control">
                                    <option>Select Payment Mode</option>
                                    <option>Credit Card</option>
                                    <option>Debit Card</option>
                                    <option>Pay Pal</option>
                                    <option>Venmo</option>
                                </select>
                            </div><!--form-group-->
                            <div class="form-group"><!--form-group-->
                                <label>Transaction/Reference Id:</label>
                                <input type="text" class="form-control" name="ref_no" required>
                            </div><!--form-group-->
                            <div class="form-group"><!--form-group-->
                                <label>Visa/Mastercard/PayPal/Venmo Code:</label>
                                <input type="text" class="form-control" name="code" required>
                            </div><!--form-group-->
                            <div class="form-group"><!--form-group-->
                                <label>Payment Date:</label>
                                <input type="text" class="form-control" name="date" required>
                            </div><!--form-group-->
                            <div class="text-center"><!--text-center-->
                                <button type="submit" name="confirm_payment"class="btn btn-primary btn-lg">
                                    <i class="fa fa-user-md"></i>Confirm Payment
                                </button>
                            </div><!--text-center-->
                        </form><!--form ends-->
                        <?php
                            if(isset($_POST['confirm_payment'])){
                                $update_id = $_GET['update_id'];
                                $invoice_no = $_POST['invoice_no'];
                                $amount = $_POST['amount_sent'];
                                $payment_mode = $_POST['payment_mode'];
                                $ref_no = $_POST['ref_no'];
                                $code = $_POST['code'];
                                $payment_date = $_POST['date'];
                                $complete = "Complete";
                                $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
                                $run_payment = mysqli_query($con,$insert_payment);
                                $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";//maybe error:  where order_id='$update_id'
                                $run_customer_order = mysqli_query($con,$update_customer_order);
                                $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";//maybe error:    where order_id='$update_id'
                                $run_pending_order = mysqli_query($con,$update_pending_order);
                                if($run_pending_order){
                                    echo "<script>alert('your payment has been recieved, order will be completed within 24 hours')</script>";
                                    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                                }
                            }
                        ?>
                    </div><!--box-->
                </div><!--col-md-9-->

                
                
                
                   </div><!-- container ends -->
        </div><!-- content ends -->
        

        <?php include("includes/footer.php"); ?>        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>            
    </body>
</html>   
    <?php } ?>