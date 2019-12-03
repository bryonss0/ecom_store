<div if="footer"><!-- footer starts  -->
    <div class="container"><!-- container starts -->
        <div class="row"><!-- row starts -->
            <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 starts -->
                <h4>Pages</h4>
                <ul><!-- ul starts -->
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="my_account.php">My Account</a></li>
                </ul><!-- ul ends -->
                <hr>
                <h4>User Section</h4>
                <ul><!-- ul starts -->
                    <li><a href="../checkout.php">Login</a></li>
                    <li><a href="../customer_register.php">Register</a></li>
                </ul><!-- ul ends -->
                <hr class="hidden-md hidden-lg hidden-sm">
            </div><!--col-md-3 col-sm-6 starts -->
            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 starts -->
                <h4>Top Products Categories</h4>
                <ul><!-- ul starts -->
                <?php
                $get_p_cats = "select * from product_categories";
                $run_p_cats = mysqli_query($con, $get_p_cats);
                while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                    $p_cat_id = $row_p_cats['p_cat_id'];
                    $p_cat_title = $row_p_cats['p_cat_title'];
                    echo "<li> <a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
                }
                ?>                 
                </ul><!-- ul ends -->
                <hr class="hidden-md hidden-lg">               
            </div><!-- col-md-3 col-sm-6 ends -->
            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 starts -->
                <h4><Where to find us</h4>
                <p><!-- p starts -->
                    <strong> Wow Deals LLC </strong>
                    <br>5000 Lake Dr
                    <br>Fort Worth, TX
                    <br>wow.deals@gmail.com                    
                </p><!-- p ends  -->
                <a href="../contact.php">Go to Contact Us page</a>
                <hr class="hidden-md hidden-lg">
            </div><!-- col-md-3 col-sm-6 ends -->
            <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 starts -->
                <h4>Get the news</h4>
                <p class="text-muted">
                    Target wrests apparel from department stores
                </p>
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=computerfever', 'popupwindow', 'scrollbars=yes,width=550, height=520'); return true"><!-- form starts -->
                    <div class="input-group"><!--input-group starts -->
                        <input type="text" class="form-control" name="email" value="email">
                        <input type="hidden" value="computerfever" name="uri"/>
                        <input type="hidden" name="loc" value="en_US"/>
                        <span class="input-group-btn"><!-- input-group-btn starts -->
                            <input type="submit" value="subscribe to Computerfever" class="btn btn-default">
                        </span><!-- input-group-btn ends  -->
                    </div><!--input-group ends -->
                </form><!-- form ends -->
                <hr>
                <h4>Share</h4>
                <p class="social"><!-- social starts -->
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                </p><!-- social ends -->
            </div><!-- col-md-3 col-sm-6 ends -->
        </div><!-- row starts -->
    </div> <!-- container ends -->
</div><!-- footer ends  -->

<div id="copyright"><!--copyright starts -->
    <div class="container"><!-- container starts -->
        <div class="col-sm-6"><!-- col-md-6 starts -->
            <p class="pull-left"> &copy; 2019 Bryon Severns</p>
            </div><!-- col-md-6 ends -->
            <div class="col-md-6"><!-- col-md-6 starts -->
                <p class="pull-right">Website by Alphabry LLC <a href="http://www.alphabry.com"></a></p>
        </div><!-- col-md-6 ends -->
    </div><!-- container ends -->
</div><!-- copyright ends -->


