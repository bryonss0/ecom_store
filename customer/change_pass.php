<h2 align="center">Change Password</h2>
<form action="" method="post">
    <div class="form-group"><!--form-group-->
        <label>Enter Your Current Password</label>
        <input type="password" name="old_pass" class="form-control" required>
    </div>   <!--form-group--> 
        <div class="form-group"><!--form-group-->
        <label>Enter Your New Password</label>
        <input type="password" name="new_pass" class="form-control" required>
    </div>   <!--form-group--> 
        <div class="form-group"><!--form-group-->
        <label>Re-enter Your New Password</label>
        <input type="password" name="new_pass_again" class="form-control" required>
    </div>   <!--form-group--> 
    <div class="text-center"><!--text-center-->
        <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-user-md"></i>Change Password
        </button>
    </div><!--text-center-->
</form>

<?php 
if(isset($_POST['submit'])){
    $c_email = $_SESSION['customer_email'];
    
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $new_pass_again = $_POST['new_pass_again'];
    $sel_old_pass = "select * from customers where customer_pass='$old_pass'";
    $run_old_pass = mysqli_query($con, $sel_old_pass);
    $check_old_pass = mysqli_num_rows($run_old_pass);
    if($check_old_pass==0){
        echo "<script>alert('Your current password entry was not correct. Please try again.')</script>";
        exit();
    }
    if($new_pass != $new_pass_again){
        echo "<script>alert('Your new password entries do not match. Please try again.')</script>";
        exit();
    }
    if($new_pass == $new_pass_again){
    $update_pass = "update customers set customer_pass='$new_pass' where customer_email='$c_email'";
        $run_customer = mysqli_query($con, $update_pass);
        if($run_pass){
            echo "<script>alert('Your password has been changed.')</script>";
            echo "<script>window.open('my_account.php?my_orders', '_self')</script>";
        } 
    }
}
?>