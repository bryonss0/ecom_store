<?php
    session_start();
    include("includes/db.php");
    include("functions/functions.php");
?>

<?php
if(isset($_GET['pro_id'])){
    $product_id  = $_GET['pro_id'];
    $get_product = "select * from products where product_id='$product_id'";
    $run_product = mysqli_query($con, $get_product);
    $row_product = mysqli_fetch_array($run_product);
    $p_cat_id    = $row_product['p_cat_id'];
    $pro_title   = $row_product['product_title'];
    $pro_price   = $row_product['product_price'];
    $pro_desc    = $row_product['product_desc'];
    $pro_img1    = $row_product['product_img1'];
    $pro_img2    = $row_product['product_img2'];
    $pro_img3    = $row_product['product_img3'];
    $get_p_cat   = "select * from product_categories where p_cat_id='$p_cat_id'";
    $run_p_cat   = mysqli_query($con, $get_p_cat);
    $row_p_cat   = mysqli_fetch_array[$run_p_cat];
    $p_cat_title = $row_p_cat['p_cat_title'];
} 
?>

<!DOCTYPE html>
<!--- Created by Mohammad Tahir Ahmed;  website computerfever.com
 Udemy course: https://www.udemy.com/course/modern-e-commerce-store-in-php-mysqli-with-bootstrap
 modified by Bryon Severns; Alphabry LLC
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
                            <li class="active">
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
                            <li>
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
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"> <?php echo $p_cat_title; ?></a></li>
                        <li> <?php echo $pro_title; ?> </li>
                        
                    </ul><!-- breadcrumb ends -->
                </div><!-- col-md-12 ends --> 
                <div class="col-md-3"><!-- col-md-3 starts -->
                    <?php include("includes/sidebar.php"); ?>                    
                </div><!-- col-md-3 ends -->          
                
                <div class="col-md-9"><!-- col-md-9 starts -->
                    <div class="row" id="productMain"><!-- row id=productMain starts -->
                        <div class="col-sm-6"><!-- col-sm-6 starts -->                                                       
                            <div id="mainImage"><!-- mainImage starts -->
                                                                    
                                <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide starts -->                                        
                                    <div class="carousel-inner"><!-- carousel-inner starts --><!-- Wrapper for slides -->
                                        <div class="item active">
                                                <center>
                                                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">                                          
                                                </center>
                                        </div>                                                
                                        <div class="item">
                                                <center>
                                                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">                                          
                                                </center>
                                        </div>
                                        <div class="item">
                                                <center>
                                                    <img src="admin_area/product_images/<?php echo $pro_img3 ?>" class="img-responsive">                                          
                                                </center>
                                        </div>                                             
                                    </div><!-- carousel-inner ends --><!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                </div><!-- carousel slide ends -->                                                                                        
                            </div><!-- mainImage ends -->
                        </div><!-- col-sm-6 ends --> 
                        
                        <div class="col-sm-6"><!--coll-sm-6 starts -->
                            <div class="box"><!-- box -->
                                <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                                <?php add_cart(); ?>
                                <form action="details.php?add_cart=<?php echo $product_id; ?>" method="post" class="form-horizontal"><!-- form-horizontal starts-->
                                    <div class="form-group"><!-- form-group -->
                                        <label class="col-md-5 control-label">Product Quantity</label>
                                        <div class="col-md-7"><!-- col-md-7 -->
                                            <select name="product_qty" class="form-control">
                                                <option>Select quantity</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div><!-- col-md-7 -->
                                    </div><!-- form-group -->
                                    <div class="form-group"><!-- form-group -->
                                        <label class="col-md-5 control-label">Product Size</label>
                                        <div class="col-md-7"><!-- col-md-7 -->
                                            <select name="product_size" class="form-control">                                                
                                                <option>select size</option>
                                                <option>small</option>
                                                <option>medium</option>
                                                <option>large</option>
                                            </select>
                                        </div><!-- col-md-7 -->
                                    </div><!-- form-group -->
                                    <p class="price"> $<?php echo $pro_price; ?></p>
                                    <p class="text-center buttons"><!-- text-center buttons -->
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-shopping-cart"></i>Add to Cart
                                        </button>
                                    </p><!-- text-center buttons -->
                                </form><!-- form-horizontal ends-->
                            </div><!-- box ends-->
                            <div class="row" id="thumbs"><!-- row id=thumbs-->
                                <div class="col-xs-4"><!-- col-xs-4 -->
                                    <a href="#" class="thumb">
                                        <img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">
                                    </a>
                                </div><!-- col-xs-4 -->
                                <div class="col-xs-4"><!-- col-xs-4 -->
                                    <a href="#" class="thumb">
                                        <img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">
                                    </a>
                                </div><!-- col-xs-4 -->
                                <div class="col-xs-4"><!-- col-xs-4 -->
                                    <a href="#" class="thumb">
                                        <img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive">
                                    </a>
                                </div><!-- col-xs-4 -->                               
                            </div><!-- row id=thumbs ends-->                            
                        </div><!--coll-sm-6 ends -->
                    </div><!-- row id=productMain ends -->    
                        <div class="box" id="details"><!-- box -->
                            <p><!-- p starts-->
                                <h4>Product details</h4>
                                    <p>
                                        <?php echo $pro_desc  ?>
                                    </p>
                                <h4>Size</h4>
                                <ul>
                                    <li>Small</li>
                                    <li>Medium</li>
                                    <li>Large</li>
                                </ul>
                            </p><!-- p ends-->
                            <hr><!-- thematic break line  -->
                        </div><!-- box -->
                        
                        
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
                    
                </div><!-- col-md-9 ends -->
                
            </div><!-- container ends -->
        </div><!-- content ends -->
        

        <?php include("includes/footer.php"); ?>       
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>            
    </body>
</html>