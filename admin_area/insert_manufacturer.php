<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{
    
?>
<div class="row"><!--1 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <ol class="breadcrumb"><!--breadcrumb starts-->
            <i class="fa fa-dashboard"></i> Dashboard / Insert Manufacturer
        </ol><!--breadcrumb ends-->
    </div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--2 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <div class="panel panel-default"><!--panel panel-default starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <h3 class="panel-title"><!--panel-title starts-->
                    <i class="fa fa-money fa-fw"></i> Insert Manufacturer
                </h3><!--panel-title ends-->
            </div><!--panel-heading ends-->
            <div class="panel-body"><!--panel-body starts-->
                <form class="form-horizontal" action="" method="post"><!--form-horizontal starts-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> Manufacturer Name</label>
                        <div class="col-md-6">
                            <input type="text" name="manufacturer_name" class="form-control">
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> Show as Top Manufacturers</label>
                        <div class="col-md-6">
                            <input type="radio" name="manufacturer_top" value="yes">
                            <label> Yes </label>
                            <input type="radio" name="manufacturer_top" value="no">
                            <label> No </label>
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> Select Manufacturer Image</label>
                        <div class="col-md-6">
                            <input type="file" name="manufacturer_image" class="form-control">                            
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> </label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Insert Manufacturer" class="btn btn-primary form-control">
                        </div>    
                    </div><!--form-group ends-->
                </form><!--form-horizontal ends-->
            </div><!--panel-body ends-->
        </div><!--panel panel-default ends-->
    </div><!--col-lg-12 ends-->
</div><!--2 row ends-->
<?php
if(isset($_POST['submit'])){
    $manufacturer_name = $_POST['manufacturer_name'];
    $manufacturer_top = $_POST['manufacturer_top'];
    $manufacturer_image = $_FILES['manufacturer_image']['name'];
    $temp_manufacturer_image = $_FILES['tmp_manufacturer_image']['name'];
    move_uploaded_file($temp_manufacturer_image,"admin_images/$manufacturer_image");
    $insert_manufacturer = "insert into manufacturers (manufacturer_name,manufacturer_top,manufacturer_image) values ('$manufacturer_name','$manufacturer_top','$manufacturer_image')";
    $run_manufacturer = mysqli_query($con, $insert_manufacturer);
    if($run_manufacturer){
        echo "<script>alert('New Manufacturer has been inserted')</script>";
        echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
    }
}
?>


<?php } ?>


