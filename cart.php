<?php
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
                        Welcome: Guest
                    </a>
                    <a href="#">
                        Shopping Cart Total: $100, Total Items 2
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
                            <a href="checkout.php">
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="cart.php">
                                Go to Cart
                            </a>
                        </li>
                        <li>
                            <a href="checkout.php">
                                Login
                            </a>
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
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="checkout.php">My Account</a>
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
                        <span> 4 items in cart </span>
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
                        <li><a href="cart.php">Cart</a></li>
                    </ul><!-- breadcrumb ends -->
                </div><!-- col-md-12 ends -->
                
                <div class="col-md-9" id="cart"><!-- col-md-9 -->
                    <div class="box"><!--box-->
                        <form action="cart.php" method="post" enctype="multipart-form-data"><!--form -->
                            <h1>Shopping Cart</h1>
                            <p class="text-muted">You currently have 3 item(s) in your cart.</p>
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
                                        <tr>
                                            <td>
                                                <img src="admin_area/product_images/coverup.jpg">
                                            </td>
                                            <td>
                                                <a href="#">Cover-up for Swimsuit</a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                               $29.99
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">                                               
                                            </td>
                                            <td>
                                                $59.98
                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td>
                                                <img src="admin_area/product_images/coverup.jpg">
                                            </td>
                                            <td>
                                                <a href="#">Cover-up for Swimsuit</a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                               $29.99
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">                                               
                                            </td>
                                            <td>
                                                $59.98
                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td>
                                                <img src="admin_area/product_images/coverup.jpg">
                                            </td>
                                            <td>
                                                <a href="#">Cover-up for Swimsuit</a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                               $29.99
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">                                               
                                            </td>
                                            <td>
                                                $59.98
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$100</th>
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
                                    
                                </div><!--pull-right-->
                            </div><!--box-footer-->
                        </form><!--form -->
                    </div><!--box-->
                    
                </div><!-- col-md-9 -->
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
                                        <th>$200.00</th>
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
                                        <th>$200.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--table-responsive-->
                    </div><!-- box id=order-summary  -->
                </div><!--col-md-3-->
                
                
            </div><!-- container ends -->
        </div><!-- content ends -->       

        <?php include("includes/footer.php"); ?>        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>            
    </body>
</html>