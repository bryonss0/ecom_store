<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{
    
?>
<?php
if(isset($_GET['user_profile'])){
    $edit_id = $_GET['user_profile'];
    $get_admin = "select * from admins where admin_id='$edit_id'";
    $run_admin = mysqli_query($con, $get_admin);
    $row_admin = mysqli_fetch_array($run_admin);
    $admin_id = $row_admin['admin_id'];
    $admin_name = $row_admin['admin_name'];
    $admin_email = $row_admin['admin_email'];
    $admin_pass = $row_admin['admin_pass'];
    $admin_image = $row_admin['admin_image'];
    $admin_country = $row_admin['admin_country'];
    $admin_job = $row_admin['admin_job'];
    $admin_contact = $row_admin['admin_contact'];
    $admin_about = $row_admin['admin_about'];
    
}
?>
<div class="row"><!--1 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <ol class="breadcrumb"><!--breadcrumb starts-->
            <i class="fa fa-dashboard"></i> Dashboard / Edit Profile
        </ol><!--breadcrumb ends-->
    </div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--2 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <div class="panel panel-default"><!--panel panel-default starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <h3 class="panel-title"><!--panel-title starts-->
                    <i class="fa fa-money fa-fw"></i> Edit Profile
                </h3><!--panel-title ends-->
            </div><!--panel-heading ends-->
            <div class="panel-body"><!--panel-body starts-->
                <form class="form-horizontal" action="" method="post"><!--form-horizontal starts-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Name</label>
                        <div class="col-md-6">
                            <input type="text" name="admin_name" class="form-control" value="<?php echo $admin_name; ?>">
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Email</label>
                        <div class="col-md-6">
                            <input type="text" name="admin_email" class="form-control" value="<?php echo $admin_email; ?>">                            
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Password</label>
                        <div class="col-md-6">
                            <input type="password" name="admin_pass" class="form-control" value="<?php echo $admin_pass; ?>">                            
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Country</label>
                        <div class="col-md-6">
                            <input type="text" name="admin_country" class="form-control" value="<?php echo $admin_country; ?>">                            
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Job</label>
                        <div class="col-md-6">
                            <input type="text" name="admin_job" class="form-control" value="<?php echo $admin_job; ?>">                            
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User About</label>
                        <div class="col-md-6">
                            <textarea type="text" name="admin_about" class="form-control">
                                <?php echo $admin_about; ?>
                            </textarea>                            
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Image</label>
                        <div class="col-md-6">
                            <input type="file" name="admin_image" class="form-control">   
                            <br>
                            <img src="admin_images/<?php echo $admin_image; ?>" width="70" height="70">
                        </div>    
                    </div><!--form-group ends-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> </label>
                        <div class="col-md-6">
                            <input type="submit" name="update" value="Update User" class="btn btn-primary form-control">
                        </div>    
                    </div><!--form-group ends-->                    
                </form><!--form-horizontal ends-->
            </div><!--panel-body ends-->
        </div><!--panel panel-default ends-->
    </div><!--col-lg-12 ends-->
</div><!--2 row ends-->
<?php
if(isset($_POST['update'])){
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_pass = $_POST['admin_pass'];
    $admin_country = $_POST['admin_country'];
    $admin_job = $_POST['admin_job'];
    $admin_about = $_POST['admin_about'];
    $admin_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];   
    move_uploaded_file($temp_admin_image,"admin_images/$admin_image");
    $update_admin = "update admins set admin_name='$admin_name', admin_email='$admin_email', admin_pass='$admin_pass', admin_image='$admin_image', admin_contact='$admin_contact', admin_country='$admin_country', admin_job='$admin_job', admin_about='$admin_about'  where admin_id='$admin_id'";
    $run_admin = mysqli_query($con, $update_admin);
    if($run_admin){
        echo "<script>alert('User has been updated')</script>";
        echo "<script>window.open('index.php?view_users','_self')</script>";
        //session_destroy();
    }
}
?>


<?php } ?>





