<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{
    
?>

<div class="row"><!--1 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <ol class="breadcrumb"><!--breadcrumb starts-->
            <li>
                <i class="fa fa-dashboard"></i> Dashboard / Insert User
            </li>
        </ol> <!--breadcrumb ends-->
    </div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--2 row starts-->
    <div class="col-md-2"></div><!--to offset columns-->
    <div class="col-lg-10"><!--col-lg-12 starts-->
        <div class="panel panel-default"><!--panel panel-default starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <h3 class="panel-title"><!--panel-title starts-->
                    <i class="fa fa-money fa-fw"></i> Insert User
                </h3><!--panel-title ends-->
            </div><!--panel-heading ends-->
            <div class="panel-body"><!--panel-body starts-->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!--form-horizontal starts-->
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Name: </label>
                        <div class="col-md-6">
                            <input type="text" name="admin_name" class="form-control" required>
                        </div>
                    </div><!--form-group ends-->
                    
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Email: </label>
                        <div class="col-md-6">
                            <input type="text" name="admin_email" class="form-control" required>
                        </div>
                    </div><!--form-group ends-->
                    
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Password: </label>
                        <div class="col-md-6">
                            <input type="password" name="admin_pass" class="form-control" required>
                        </div>
                    </div><!--form-group ends-->
                    
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Country: </label>
                        <div class="col-md-6">
                            <input type="text" name="admin_country" class="form-control" required>
                        </div>
                    </div><!--form-group ends-->
                    
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Job: </label>
                        <div class="col-md-6">
                            <input type="text" name="admin_job" class="form-control" required>
                        </div>
                    </div><!--form-group ends-->
                    
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Phone: </label>
                        <div class="col-md-6">
                            <input type="text" name="admin_contact" class="form-control" required>
                        </div>
                    </div><!--form-group ends-->
                    
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User About: </label>
                        <div class="col-md-6">
                            <textarea name="admin_about" class="form-control" rows="3"></textarea>
                        </div>
                    </div><!--form-group ends-->
                    
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"> User Image: </label>
                        <div class="col-md-6">
                            <input type="file" name="admin_image" class="form-control" required>
                        </div>
                    </div><!--form-group ends-->                 
                    
                    <div class="form-group"><!--form-group starts-->
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">
                        </div>
                    </div><!--form-group ends-->
                    
                </form><!--form-horizontal ends-->
            </div><!--panel-body ends-->
        </div><!--panel panel-default ends-->
    </div><!--col-lg-12 ends-->
</div><!--2 row ends-->

<?php
if(isset($_POST['submit'])){
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_pass = $_POST['admin_pass'];
    $admin_country = $_POST['admin_country'];
    $admin_contact = $_POST['admin_contact'];
    $admin_job = $_POST['admin_job'];
    $admin_about = $_POST['admin_about'];
    $admin_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['tmp_admin_image']['name'];
    move_uploaded_file($temp_admin_image,"admin_images/$admin_image");
    $insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_image,admin_contact,admin_country,admin_job,admin_about) values ('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_contact','$admin_country','$admin_job','$admin_about')";
    $run_admin = mysqli_query($con, $insert_admin);
    if($run_admin){
        echo "<script>alert('One User has been inserted')</script>";
        echo "<script>window.open('index.php?view_users','_self')</script>";
    }
}
?>

<?php } ?>


