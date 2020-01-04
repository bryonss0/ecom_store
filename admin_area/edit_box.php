<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{
    
?>
<?php
if(isset($_GET['edit_box'])){
    $edit_box = $_GET['edit_box'];
    $get_boxes = "select * from boxes_section where box_id='$edit_box'";
    $run_boxes = mysqli_query($con, $get_boxes);
    $row_boxes = mysqli_fetch_array($run_boxes);
    $box_id = $row_boxes['box_id'];
    $box_title = $row_boxes['box_title'];
    $box_desc = $row_boxes['box_desc'];
    
}
?>
<div class="row"><!--1 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <ol class="breadcrumb"><!--breadcrumb starts-->
            <i class="fa fa-dashboard"></i> Dashboard / Edit Box
        </ol><!--breadcrumb ends-->
    </div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--2 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <div class="panel panel-default"><!--panel panel-default starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <h3 class="panel-title"><!--panel-title starts-->
                    <i class="fa fa-money fa-fw"></i> Edit Box
                </h3><!--panel-title ends-->
            </div><!--panel-heading ends-->
            <div class="panel-body"><!--panel-body starts-->
                <form class="form-horizontal" action="" method="post"><!--form-horizontal starts-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> Box Title</label>
                        <div class="col-md-6">
                            <input type="text" name="box_title" class="form-control" value="<?php echo $box_title; ?>">
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> Box Description</label>
                        <div class="col-md-6">
                            <textarea name="box_desc" class="form-control" fows="6" cols="19"><?php echo $box_desc; ?></textarea>
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> </label>
                        <div class="col-md-6">
                            <input type="submit" name="update" value="Update Box" class="btn btn-primary form-control">
                        </div>    
                    </div><!--form-group ends-->
                </form><!--form-horizontal ends-->
            </div><!--panel-body ends-->
        </div><!--panel panel-default ends-->
    </div><!--col-lg-12 ends-->
</div><!--2 row ends-->
<?php
if(isset($_POST['update'])){
    $box_title = $_POST['box_title'];
    $box_desc = $_POST['box_desc'];
    $update_box = "update boxes_section set box_title='$box_title',box_desc='$box_desc' where box_id='$box_id'";
    $run_box = mysqli_query($con, $update_box);
        echo "<script>alert('One Box has been updated')</script>";
        echo "<script>window.open('index.php?view_boxes','_self')</script>";
}
?>


<?php } ?>


