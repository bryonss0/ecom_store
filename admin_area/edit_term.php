<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{
    
?>
<?php
if(isset($_GET['edit_term'])){
    $edit_id = $_GET['edit_term'];
    $edit_term = "select * from terms where term_id='$edit_id'";
    $run_edit = mysqli_query($con, $edit_term);
    $row_edit = mysqli_fetch_array($run_edit);
    $term_id = $row_edit['term_id'];
    $term_title = $row_edit['term_title'];
    $term_desc = $row_edit['term_desc'];
    $term_link = $row_edit['term_link'];
    
}
?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
<div class="row"><!--1 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <ol class="breadcrumb"><!--breadcrumb starts-->
            <i class="fa fa-dashboard"></i> Dashboard / Edit Terms And Conditions
        </ol><!--breadcrumb ends-->
    </div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--2 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <div class="panel panel-default"><!--panel panel-default starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <h3 class="panel-title"><!--panel-title starts-->
                    <i class="fa fa-money fa-fw"></i> Edit Terms And Conditions
                </h3><!--panel-title ends-->
            </div><!--panel-heading ends-->
            <div class="panel-body"><!--panel-body starts-->
                <form class="form-horizontal" action="" method="post"><!--form-horizontal starts-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> Term Title</label>
                        <div class="col-md-6">
                            <input type="text" name="term_title" class="form-control" value="<?php echo $term_title; ?>">
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> Term Description</label>
                        <div class="col-md-6">
                            <textarea type="text" name="term_desc" class="form-control">
                                <?php echo $term_desc; ?>
                            </textarea>
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> Term Link</label>
                        <div class="col-md-6">
                            <input type="text" name="term_link" class="form-control" value="<?php echo $term_link; ?>">
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> </label>
                        <div class="col-md-6"><!--col-md-6 starts-->
                            <input type="submit" name="update" value="Update Term" class="btn btn-primary form-control">
                        </div>  <!--col-md-6 ends-->  
                    </div><!--form-group ends-->
                </form><!--form-horizontal ends-->
            </div><!--panel-body ends-->
        </div><!--panel panel-default ends-->
    </div><!--col-lg-12 ends-->
</div><!--2 row ends-->
<?php
if(isset($_POST['update'])){
    $term_title = $_POST['term_title'];
    $term_desc = $_POST['term_desc'];
    $term_link = $_POST['term_link'];
    $update_term = "update terms set term_title='$term_title',term_link='$term_link',term_desc='$term_desc' where term_id='$term_id'";
    $run_term = mysqli_query($con, $update_term);
    if($run_term){
        echo "<script>alert('Term has been updated')</script>";
        echo "<script>window.open('index.php?view_terms','_self')</script>";
    }
}
?>


<?php } ?>





