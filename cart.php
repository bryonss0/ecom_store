<?php
    session_start();
    include("includes/db.php");
    include("functions/functions.php");
?>
<!DOCTYPE html>
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
                            <a href="customer_register.php">
                                Register
                            </a>
                        </li>
                        <li>
                            <?php
                         if(!isset($_SESSION['customer_email'])){
                             echo "<a href='checkout.php'>My Account</a>";
                         }else{
                             echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                         }
                         ?>
                        </li>
                        <li>
                            <a href="cart.php">
                                Go to Cart
                            </a>
                        </li>
                        <li>
                          <?php 
                          if(!isset($_SESSION['customer_email'])){
                              echo "<a href='checkout.php'>Login</a>";
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
                        <img src="images/allnaturalmedlogo.png" alt="All Natural Medical" class="hidden-xs">
                        <img src="images/allnaturalmedlogo.png" alt="All Natural Medical" class="visible-xs">
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
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <?php
                         if(!isset($_SESSION['customer_email'])){
                             echo "<a href='checkout.php'>My Account</a>";
                         }else{
                             echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                         }
                         ?>
                            </li>
                            <li class="active">
                                <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
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
                        <li>Cart</li>
                    </ul><!-- breadcrumb ends -->
                </div><!-- col-md-12 ends -->
                
                <div class="col-md-9" id="cart"><!-- col-md-9 id="cart"-->
                    <div class="box"><!--box starts-->
                        <form action="cart.php" method="post" enctype="multipart-form-data"><!--form action starts-->
                            <h1>Shopping Cart</h1>
                            <?php
                            $ip_add = getRealUserIp();
                            $select_cart = "select * from cart where ip_add='$ip_add'";
                            $run_cart = mysqli_query($con, $select_cart);
                            $count = mysqli_num_rows($run_cart);                           
                            ?>
                    
                            <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart.</p>
                            <div class="table-responsive"><!--table-responsive -->
                                <table class="table"><!--table-->
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Size</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="2">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $total =0;
                                            while($row_cart = mysqli_fetch_array($run_cart)){  
                                                $pro_id = $row_cart['p_id'];
                                                $pro_size = $row_cart['size'];
                                                $pro_qty = $row_cart['qty'];
                                                $get_products = "select * from products where product_id='$pro_id'";
                                                $run_products = mysqli_query($con, $get_products);
                                                while($row_products = mysqli_fetch_array($run_products)){  
                                                    $product_title = $row_products['product_title'];
                                                    $product_img1 = $row_products['product_img1'];
                                                    $only_price = $row_products['product_price'];
                                                    $sub_total = $row_products['product_price']*$pro_qty;
                                                    $total += $sub_total;
                                        ?>                                     
                                        <tr>
                                            <td>
                                                <img src="admin_area/product_images/<?php echo $product_img1; ?>">
                                            </td>
                                            <td>
                                                <a href="#"><?php echo $product_title; ?></a>
                                            </td>
                                            <td>
                                                <?php echo $pro_qty; ?>
                                            </td>
                                            <td>
                                               $<?php echo $only_price; ?>
                                            </td>
                                            <td>
                                                <?php echo $pro_size; ?>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">                                               
                                            </td>
                                            <td>
                                                $<?php echo $sub_total; ?>
                                            </td>
                                        </tr><!-- tr ends -->
                                        <?php } } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$<?php echo $total; ?></th>
                                        </tr>
                                    </tfoot>
                                </table><!--table-->
                            </div><!--table-responsive -->
                            <div class="box-footer"><!--box-footer-->
                                <div class="pull-left"><!--pull-left-->
                                    <a href="index.php" class="btn btn-default">
                                        <i class="fa fa-chevron-left"></i>Continue Shopping
                                    </a>
                                </div><!--pull-left-->
                                <div class="pull-right"><!--pull-right-->
                                    <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                        <i class="fa fa-refresh"></i>Update Cart
                                    </button>
                                    <a href="checkout.php" class="btn btn-primary">
                                        Proceed to checkout<i class="fa fa-chevron-right"></i>
                                    </a>                                   
                                </div><!--pull-right ends-->
                            </div><!--box-footer ends-->
                        </form><!--form  ends-->
                    </div><!--box ends-->  
                    <?php  
                        function update_cart(){
                            global $con;
                            if(isset($_POST['update'])){
                                foreach($_POST['remove'] as $remove_id){
                                    $delete_product = "delete from cart where p_id='$remove_id'";
                                    $run_delete = mysqli_query($con, $delete_product);
                                    if($run_delete){
                                        echo "<script>window.open('cart.php','_self')</script>";
                                    }
                                }
                            }
                        }
                        echo @$up_cart = update_cart();
                    ?>
                </div><!-- col-md-9 id="cart" ends-->
                           
                <div class="col-md-3"><!--col-md-3-->
                    <div class="box" id="order-summary"><!-- box id=order-summary  -->
                        <div class="box-header"><!-- box-header-->
                            <h3>Order Summary</h3>
                        </div><!-- box-header-->
                        <p class="text-muted">
                            Shipping and additional costs are calculated based on the values you have entered.
                        </p>
                        <div class="table-responsive"><!--table-responsive-->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order Subtotal</td>
                                        <th>$<?php echo $total; ?></th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <td>$0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$<?php echo $total; ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--table-responsive-->
                    </div><!-- box id=order-summary  -->
                </div><!--col-md-3 ends-->  
                <div class="col-md-9"><!-- col-md-9 starts -->
                        <div id="row same-height-row"><!--row same-height-row -->
                            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 -->
                                <div class="box same-height headline"><!--box same-height -->
                                    <h3 class="text-center">You may also like these products</h3> 
                                </div><!--box same-height headline ends-->
                            </div><!-- col-md-3 col-sm-6 ends-->
                            <?php
                            $get_products = "select * from products order by rand() LIMIT 0,3";
                            $run_products = mysqli_query($con,$get_products);
                            while($row_products = mysqli_fetch_array($run_products)){
                                $pro_id    = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1  = $row_products['product_img1'];
                                echo "
                                    <div class='center-responsive col-md-3 col-sm-6'>
                                    <div class='product same-height'>
                                    <a href='details.php?pro_id=$pro_id'>
                                    <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
                                    </a>
                                    <div class='text'>
                                    <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                                        <p class='price'>$$pro_price</p>
                                    </div>
                                    </div>
                                    </div>
                                ";
                            }
                            ?>
                            
                        </div><!--row same-height-row -->
                </div class="col-md-9"><!-- col-md-9 ends -->
                
            </div><!-- container ends -->           
        </div><!-- content ends -->       

        <?php include("includes/footer.php"); ?>        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>            
    </body>
</html>