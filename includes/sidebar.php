<div class="panel panel-default sidebar-menu"><!--panel panel-default sidebar-menu starts-->
    <div class="panel-heading"><!--panel-heading starts-->
        <h3 class="panel-title"><!--panel-title starts-->
            Manufacturers
            <div class="pull-right"><!--pull right starts-->
                <a href="#" style="color:black">
                    <span class="nav-toggle hide-show">
                        Hide
                    </span>
                </a>
            </div><!--pull right ends-->
        </h3><!--panel-title ends-->
    </div><!--panel-heading ends-->
    <div class="panel-collapse collapse-data"><!--panel-collapse collapse-data start-->
        <div class="panel-body"><!--panel-body starts-->
            <div class="input-group"><!--input-group starts-->
                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-manufacturer" placeholder="Filter Manufacturers">
                <a class="input-group-addon"> <i class="fa fa-search"></i></a>
            </div><!--input-group ends-->
        </div><!--panel-body ends-->
        <div class="panel-body scroll-menu"><!--panel-body scroll-menu starts-->
            <ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer"><!--nav nav-pills nav-stacked category-menu starts-->
                <?php
                $get_manufacturer = "select * from manufacturers where manufacturer_top='yes'";
                $run_manufacturer = mysqli_query($con, $get_manufacturer);
                while($row_manufacturer = mysqli_fetch_array($run_manufacturer)){
                    $manufacturer_id = $row_manufacturer['manufacturer_id'];
                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
                    $manufacturer_image = $row_manufacturer['manufacturer_image'];
                    if($manufacturer_image == ""){
                        
                    }else{
                        $manufacturer_image = "
                            <img src='admin_area/other_images/$manufacturer_image' width='20px' >&nbsp; 
                        ";    
                    }
                    echo "
                        <li style='background:#ddddd;' class='checkbox checkbox-primary'>
                        <a>
                        <label>
                        <input type='checkbox' value='$manufacturer_id' name='manufacturer' class='get_manufacturer'> 
                            <span>
                            $manufacturer_image
                            $manufacturer_title
                            </span>
                        </label>
                        </a>
                        </li>
                        ";
                }
                $get_manufacturer = "select * from manufacturers where manufacturer_top='no'";
                $run_manufacturer = mysqli_query($con, $get_manufacturer);
                while($row_manufacturer = mysqli_fetch_array($run_manufacturer)){
                    $manufacturer_id = $row_manufacturer['manufacturer_id'];
                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
                    $manufacturer_image = $row_manufacturer['manufacturer_image'];
                    if($manufacturer_image == ""){
                        
                    }else{
                        $manufacturer_image = "
                            <img src='admin_area/other_images/$manufacturer_image' width='20px'> &nbsp;
                    ";        
                    }
                    echo "
                        <li class='checkbox checkbox-primary'>
                            <a>
                                <label>
                                    <input type='checkbox' value='$manufacturer_id' name='manufacturer' class='get_manufacturer'>
                                    <span>
                                        $manufacturer_image
                                        $manufacturer_title
                                    </span>
                                </label>
                            </a>
                        </li>
                    ";
                }
                
                ?>
            </ul><!--nav nav-pills nav-stacked category-menu ends-->
        </div><!--panel-body scroll-menu ends-->
    </div><!--panel-collapse collapse-data ends-->
</div><!--panel panel-default sidebar-menu ends-->

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu starts -->
    
    <div class="panel-heading"><!--panel-heading starts-->
        <h3 class="panel-title"><!--panel-title starts-->
            Products Categories
            <div class="pull-right"><!--pull-right starts-->
                <a href="#" style="color:black;">
                    <span class="nav-toggle hide-show">
                        Hide
                    </span>
                </a>
            </div><!--pull-right ends-->
        </h3><!--panel-title ends-->
    </div><!--panel-heading ends-->
    
    <div class="panel-collapse collapse-data"><!--panel-collapse collapse-data starts-->
        <div class="panel-body"><!--panel-body starts-->
            <div class="input-group"><!--input-group starts-->
                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-p-cats" placeholder="Filter Product Categories">
                <a class="input-group-addon"> <li class="fa fa-search"></li> </a>
            </div><!--input-group ends-->
        </div><!--panel-body ends-->
        
        <div class="panel-body scroll-menu"><!--panel-body scroll-menu starts-->
            <ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cats"><!--nav nav-pills nav-stacked category-menu starts-->
                <?php
                $get_p_cats = "select * from product_categories where p_cat_top='yes'";
                $run_p_cats = mysqli_query($con, $get_p_cats);
                while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                    $p_cat_id = $row_p_cats['p_cat_id'];
                    $p_cat_title = $row_p_cats['p_cat_title'];
                    $p_cat_image = $row_p_cats['p_cat_image'];
                    if($p_cat_image == ""){
                        
                    }else{
                        $p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20'> &nbsp;";
                    }
                    echo "
                        <li class='checkbox checkbox-primary' style='background:#ddddd;'>
                        <a>
                        <label>
                        <input type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat' id='p_cat'>
                            <span>
                            $p_cat_image
                            $p_cat_title
                            </span>
                        </label>
                        </a>
                        </li>
                    ";
                }
                
                $get_p_cats = "select * from product_categories where p_cat_top='no'";
                $run_p_cats = mysqli_query($con, $get_p_cats);
                while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                    $p_cat_id = $row_p_cats['p_cat_id'];
                    $p_cat_title = $row_p_cats['p_cat_title'];
                    $p_cat_image = $row_p_cats['p_cat_image'];
                    if($p_cat_image == ""){
                        
                    }else{
                        $p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20'> &nbsp;";
                    }
                    echo "
                        <li class='checkbox checkbox-primary' >
                        <a>
                        <label>
                        <input type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat' id='p_cat'>
                            <span>
                            $p_cat_image
                            $p_cat_title
                            </span>
                        </label>
                        </a>
                        </li>
                    ";
                }
                ?>
            </ul><!--nav nav-pills nav-stacked category-menu ends-->
        </div><!--panel-body scroll-menu ends-->
    </div><!--panel-collapse collapse-data ends-->
    
</div><!-- panel panel-default sidebar-menu ends -->

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu starts -->
    <div class="panel-heading"><!-- panel-heading starts -->
        <h3 class="panel-title"> Categories</h3>
    </div><!-- panel-heading ends -->
    <div class="panel-body"><!-- panel-body starts -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked categories-menu starts -->
        <?php  getCats()   ?>
        </ul><!-- nav nav-pills nav-stacked categories ends -->
    </div><!-- panel-body ends -->
</div><!-- panel panel-default sidebar-menu ends -->