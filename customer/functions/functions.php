<?php
$host = "localhost:8889";
$db = mysqli_connect($host,"root","root","ecom_store");

function getPro(){
    global $db;
    
    $get_products = "select * from products order by 1 ASC LIMIT 0, 8";
    
    $run_products = mysqli_query($db, $get_products);
    
    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id    = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1  = $row_products['product_img1'];
        echo "
        <div class='col-md-4 col-sm-6 single'><!--col-md-4 col-sm-6 single starts-->
        <div class='product'><!--product starts-->
        <a href='details.php?pro_id=$pro_id'>
            <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
        </a>
        <div class='text'><!--text starts-->
        <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
            <p class='price'>$pro_price</p>
            <p class='buttons'>
            <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                    <i class='fa fa-shopping-cart'></i>Add to cart
                </a>
            </p>  
        </div><!--text ends-->
        </div><!--product ends-->
        </div><!--col-md-4 col-sm-6 single ends-->
        ";
    }
    
}



?>