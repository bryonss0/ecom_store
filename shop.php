
<?php
    include("includes/db.php");
    include("functions/functions.php");
?><!DOCTYPE html>
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
                            <li class="active">
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="checkout.php">My Account</a>
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
                        <li><a href="shop.php">Shop</a></li>
                    </ul><!-- breadcrumb ends -->
                </div><!-- col-md-12 ends --> 
                
                <div class="col-md-3"><!-- col-md-3 starts -->
                    <?php include("includes/sidebar.php"); ?>                    
                </div><!-- col-md-3 ends -->
                <div class="col-md-9"><!-- col-md-9 starts -->
                <?php
                if(!isset($_GET['p_cat'])){
                    if(!isset($_GET['cat'])){
                        echo "
                            <div class='box'>
                            <h1>Shop</h1>
                            <p>It is a long established fact that text distracts people from the images and that is why you are reading this.</p>
                            </div>
                        ";
                } 
                }
                ?>
                    
                    <div class="row"><!-- row starts -->
                        <?php
                            if(!isset($_GET['p_cat'])){
                                if(!isset($_GET['cat'])){
                                  $per_page = 6;
                                  if(isset($_GET['page'])){
                                      $page = $_GET['page'];
                                  }else{
                                      $page = 1;
                                  }
                           $start_from = ($page-1) * $per_page;
                           $get_products = "select * from products order by 1 DESC LIMIT $start_from, $per_page";
                           $run_products = mysqli_query($con, $get_products);
                           while($row_products = mysqli_fetch_array($run_products)){
                               $pro_id = $row_products['product_id'];
                               $pro_title = $row_products['product_title'];
                               $pro_price = $row_products['product_price'];
                               $pro_img1 = $row_products['product_img1'];
                               $pro_id = $row_products['product_id'];
                               echo "
                                   <div class='col-md-4 col-sm-6 center-responsive'>
                                   <div class='product'>
                                   <a href='details.php?pro_id=$pro_id'>
                                        <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
                                    </a>
                                    <div class='text'>
                                    <h3><a href='details.php?pro_id=$pro_id'>$pro_title<a/></h3>
                                    <p class='price'>$$pro_price</p>
                                        <p class='buttons'>
                                        <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View details</a>
                                            <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                                                <i class='fa fa-shopping-cart'></i>Add To Cart
                                            </a>
                                        </p>
                                    </div>
                                    </div>                                  
                                    </div>
                               ";
                           }
                        ?>                        
                    </div><!-- row ends -->
                    <center><!-- center starts -->
                        <ul class='pagination'><!-- pagination starts -->
                            <?php
                                $query = "select * from products";
                                $result = mysqli_query($con,$query);
                                $total_records = mysqli_num_rows($result);
                                $total_pages = ceil($total_records / $per_page);
                                echo "
                                    <li><a href='shop.php?page=1'>".'First Page'."</a></li>
                                ";
                                for($i=1; $i<=$total_pages;$i++){
                                    echo "
                                        <li><a href='shop.php?page=".$i."'>".$i."</a></li>
                                    ";
                                };
                                echo "
                                    <li><a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>
                                ";
                                }
                            }
                            ?>               
                        </ul><!-- pagination ends -->
                    </center><!-- center ends -->

                        <?php
                            getpcatpro();
                            getcatpro();
                        ?>

                </div><!-- col-md-9 ends -->
                
            </div><!-- container ends -->
        </div><!-- content ends -->
        

        <?php include("includes/footer.php"); ?>        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>            
    </body>
</html>