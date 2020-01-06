<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{
    
?>
<?php
$file = "../styles/style.css";
if(file_exists($file)){
    $data = file_get_contents($file);      
}
?>
<div class="row"><!--1 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <ol class="breadcrumb"><!--breadcrumb starts-->
            <i class="fa fa-dashboard"></i> Dashboard / Edit CSS
        </ol><!--breadcrumb ends-->
    </div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--2 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <div class="panel panel-default"><!--panel panel-default starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <h3 class="panel-title"><!--panel-title starts-->
                    <i class="fa fa-money fa-fw"></i> Edit CSS File
                </h3><!--panel-title ends-->
            </div><!--panel-heading ends-->
            <div class="panel-body"><!--panel-body starts-->
                <form class="form-horizontal" action="" method="post"><!--form-horizontal starts-->
                    <div class="form-group"><!--1 form-group starts-->
                        <div class="col-md-12"><!--col-md-12 starts-->
                            <textarea class="form-control" name="newdata" rows="25">
                                
                            </textarea>
                        </div> <!--col-md-12 ends-->   
                    </div><!--1 form-group ends-->
                    
                    <div class="form-group"><!--submit form-group starts-->
                        <label class="col-md-3 control-label"> </label>
                        <div class="col-md-6"><!--col-md-6 starts-->
                            <input type="submit" name="update" value="Update CSS File" class="btn btn-primary form-control">
                        </div> <!--col-md-6 ends-->   
                    </div><!--form-group ends-->
                </form><!--form-horizontal ends-->
            </div><!--panel-body ends-->
        </div><!--panel panel-default ends-->
    </div><!--col-lg-12 ends-->
</div><!--2 row ends-->
<?php
if(isset($_POST['update'])){
    $newdata = $_POST['newdata'];
    $handle = fopen($file, "w");
    fwrite($handle, $newdata);
    fclose($handle);
    echo "<script>alert('CSS file has been updated')</script>";
    echo "<script>window.open('index.php?view_css','_self')</script>";    
}
?>


<?php } ?>





