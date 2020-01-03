
<?php
    session_start();
    include("includes/db.php");
    include("functions/functions.php");
?>

<!DOCTYPE html>
<!--- template created by Mohammad Tahir Ahmed;  website computerfever.com
 Udemy course: https://www.udemy.com/course/modern-e-commerce-store-in-php-mysqli-with-bootstrap
 modified by Bryon Severns, for Alphabry LLC
--->
<html>
    <head>
        <meta charset="UTF-8">
        <title> E Commerce Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>       
        <link href="http://fonts.googleapis.com/css" rel="stylesheet">        
        <link href="styles/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7181822bb7.js" crossorigin="anonymous"></script>
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
                            <li class="active">
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
        
        <!-- image carousel  start-->     
        <div class="container">  
          <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner"><!--carousel-inner starts-->
                <?php
                $get_slides = "select * from slider LIMIT 0,1";
                $run_slides = mysqli_query($con,$get_slides);
                while($row_slides = mysqli_fetch_array($run_slides)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                    $slide_url = $row_slides['slide_url'];
                    echo "
                        <div class='item active'>
                        <a href='$slide_url'><img src='admin_area/slides_images/$slide_image'></a>
                        </div>
                    ";                 
                }                
                ?>
                <?php
                $get_slides = "select * from slider LIMIT 1,12 ";
                $run_slides = mysqli_query($con, $get_slides);
                while($row_slides = mysqli_fetch_array($run_slides)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                    $slide_url = $row_slides['slide_url'];
                    echo "
                        <div class='item'>
                        <a href='$slide_url'><img src='admin_area/slides_images/$slide_image'></a>
                        </div>
                    ";
                }
                ?>
            </div><!--carousel-inner ends-->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!-- image carousel ends  -->

        <div id="advantages"><!-- advantages starts -->
            <div class="container"><!-- container starts -->            
                <div class="same-height-row"><!-- same-height-row starts -->  
                    <?php
                                $get_boxes = "select * from boxes_section";
                                $run_boxes = mysqli_query($con, $get_boxes);
                                while($run_boxes_section = mysqli_fetch_array($run_boxes)){
                                    $box_id = $run_boxes_section['box_id'];
                                    $box_title = $run_boxes_section['box_title'];
                                    $box_desc = $run_boxes_section['box_desc'];                                                                  
                            ?>
                    <div class="col-sm-4"><!-- col-sm-4 starts -->
                        <div class="box same-height"><!-- box same-height starts -->                           
                            <div class="icon"><!-- icon starts  -->
                                <i class="fa fa-heart"></i>  
                            </div><!-- icon ends -->
                            <h3><a href="#"> <?php echo $box_title; ?> </a></h3>
                            <p>
                                <?php echo $box_desc; ?>
                            </p>                       
                        </div><!-- box same-height ends -->
                    </div> <!-- col-sm-4 ends -->                   
                    <?php } ?>
                </div>   <!-- same-height-row ends -->

            </div><!--container stops -->
        </div><!-- advantages stops -->
        
        
        <div id="hot"><!--hot starts-->
            <div class="box"><!-- box starts -->
                <div class="container"><!-- container starts -->
                    <div class="col-md-12"><!-- col-md-12 starts -->
                        <h2>Latest this week</h2>
                    </div><!-- col-md-12 ends -->
                </div> <!-- container ends -->
            </div> <!-- box ends -->
        </div><!--hot ends-->
        
        <div id="content" class="container"><!-- container starts -->
            <div class="row"><!-- row starts -->             
                 <?php
                 getPro();
                 ?>
            </div><!-- row ends -->
        </div><!-- container ends -->
        
        <?php include("includes/footer.php");?> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>            
    </body>
</html>
