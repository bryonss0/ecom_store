
<div class="row"><!--1 row starts-->
    <div class="col-md-2"></div><!--because offset-md-2 didn't work-->
    <div class="col-md-10"><!--col-md-10 starts-->
        <h1 class="page-header">Dashboard</h1>
        <ol class="breadcrumb"><!--breadcrumb starts-->
            <li class="active">
                <i class="fa fa-dashboard"></i>Dashboard
            </li>
        </ol><!--breadcrumb ends-->
    </div><!--col-md-10 ends-->
</div><!--1 row ends-->

<div class="row"><!--2 row starts-->
    <div class="col-md-2"></div><!--because offset-md-2 didn't work-->
    <div class="col-md-2 "><!--col-lg-3 col-md-6 starts-->
        <div class="panel panel-primary"><!--panel panel-primary starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <div class="row"><!--panel-heading row starts-->
                    <div class="col-xs-3"><!--col-xs-3 starts-->
                        <i class="fa fa-tasks fa-5x"></i>
                    </div><!--col-xs-3 ends-->
                    <div class="col-xs-9 text-right"><!--col-xs-9-text-right starts-->
                        <div class="huge"> 15 </div>
                        <div>Products</div>
                    </div><!--col-xs-9-text-right ends-->
                </div><!--panel-heading row ends-->
            </div><!--panel-heading ends-->
            <a href="index.php?view_products">
                <div class="panel-footer"><!--panel-footer starts-->
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div><!--panel-footer ends-->               
            </a>
        </div><!--panel panel-primary ends-->
    </div> <!--col-lg-3 col-md-6 ends-->
    
        <div class="col-md-2"><!--col-lg-3 col-md-6 starts-->
        <div class="panel panel-green"><!--panel panel-green starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <div class="row"><!--panel-heading row starts-->
                    <div class="col-xs-3"><!--col-xs-3 starts-->
                        <i class="fa fa-comments fa-5x"></i>
                    </div><!--col-xs-3 ends-->
                    <div class="col-xs-9 text-right"><!--col-xs-9-text-right starts-->
                        <div class="huge"> 9 </div>
                        <div>Customers</div>
                    </div><!--col-xs-9-text-right ends-->
                </div><!--panel-heading row ends-->
            </div><!--panel-heading ends-->
            <a href="index.php?view_customers">
                <div class="panel-footer"><!--panel-footer starts-->
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div><!--panel-footer ends-->               
            </a>
        </div><!--panel panel-green ends-->
    </div> <!--col-lg-3 col-md-6 ends-->
    
        <div class="col-md-2"><!--col-lg-3 col-md-6 starts-->
        <div class="panel panel-yellow"><!--panel panel-yellow starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <div class="row"><!--panel-heading row starts-->
                    <div class="col-xs-3"><!--col-xs-3 starts-->
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div><!--col-xs-3 ends-->
                    <div class="col-xs-9 text-right"><!--col-xs-9-text-right starts-->
                        <div class="huge"> 6 </div>
                        <div>Products Categories</div>
                    </div><!--col-xs-9-text-right ends-->
                </div><!--panel-heading row ends-->
            </div><!--panel-heading ends-->
            <a href="index.php?view_p__cats">
                <div class="panel-footer"><!--panel-footer starts-->
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div><!--panel-footer ends-->               
            </a>
        </div><!--panel panel-yellow ends-->
    </div> <!--col-lg-3 col-md-6 ends-->
    
        <div class="col-md-2"><!--col-lg-3 col-md-6 starts-->
        <div class="panel panel-red"><!--panel panel-red starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <div class="row"><!--panel-heading row starts-->
                    <div class="col-xs-3"><!--col-xs-3 starts-->
                        <i class="fa fa-support fa-5x"></i>
                    </div><!--col-xs-3 ends-->
                    <div class="col-xs-9 text-right"><!--col-xs-9-text-right starts-->
                        <div class="huge"> 4 </div>
                        <div>Orders</div>
                    </div><!--col-xs-9-text-right ends-->
                </div><!--panel-heading row ends-->
            </div><!--panel-heading ends-->
            <a href="index.php?view_orders">
                <div class="panel-footer"><!--panel-footer starts-->
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div><!--panel-footer ends-->               
            </a>
        </div><!--panel panel-red ends-->
    </div> <!--col-lg-3 col-md-6 ends-->  
</div><!--2 row ends-->

<div class="row"><!-- 3 row starts-->
    <div class="col-md-2"></div><!--because offset-md-2 didn't work-->
    <div class="col-lg-6"><!--col-lg-8 starts-->
        <div class="panel panel-primary"><!--panel panel-primary starts-->
            <div class="panel-heading"><!--panel-heading starts-->
                <h3 class="panel-title"><!--panel-title starts-->
                    <i class="fa fa-money fa-fw"></i>New Orders
                </h3><!--panel-title ends-->
            </div><!--panel-heading starts-->
            <div class="panel-body"><!--panel-body starts-->
                <div class="table-responsive"><!--table-responsive starts-->
                    <table class="table table-bordered table-hover table-striped"><!--table table-bordered table-hover table-striped starts-->
                        <thead><!--thead starts-->
                            <tr>
                                <th>Order No:</th>
                                <th>Customer Email:</th>
                                <th>Invoice No:</th>
                                <th>Product ID:</th>
                                <th>Product Qty:</th>
                                <th>Product Size:</th>
                                <th>Status:</th>                      
                            </tr>
                        </thead><!--thead ends-->
                        <btody><!--tbody starts-->
                            <tr>
                                <td>1</dt>
                                <td>brock@gmail.com</dt>
                                <td>78055</dt>
                                <td>32</dt>
                                <td>2</dt> 
                                <td>Large</dt>
                                <td>Complete</dt>    
                            </tr>
                            <tr>
                                <td>1</dt>
                                <td>brock@gmail.com</dt>
                                <td>78055</dt>
                                <td>32</dt>
                                <td>2</dt> 
                                <td>Large</dt>
                                <td>Complete</dt>    
                            </tr>
                            <tr>
                                <td>1</dt>
                                <td>brock@gmail.com</dt>
                                <td>78055</dt>
                                <td>32</dt>
                                <td>2</dt> 
                                <td>Large</dt>
                                <td>Complete</dt>    
                            </tr>
                            <tr>
                                <td>1</dt>
                                <td>brock@gmail.com</dt>
                                <td>78055</dt>
                                <td>32</dt>
                                <td>2</dt> 
                                <td>Large</dt>
                                <td>Complete</dt>    
                            </tr>
                        </btody><!--tbody ends-->
                    </table><!--table table-bordered table-hover table-striped ends-->
                </div><!--table-responsive ends-->
                <div class="text-right"><!--text-right starts-->
                    <a href="index.php?view_orders">
                        View All Orders<i class='fa fa-arrow-circle-right'></i>                       
                    </a>
                </div><!--text-right ends-->
            </div><!--panel-body ends-->            
        </div><!--panel panel-primary ends-->
    </div><!--col-lg-8 ends-->
    
    <div class='col-md-4'><!--col-md-4 starts-->
        <div class='panel'><!--panel starts-->
            <div class="panel-body"><!--panel-body starts-->
                <div class="thumb-info mb-md"><!--thumb-info mb-md starts-->
                    <img src="admin_images/sohail.jpg" class="rounded img-responsive">
                    <div class="thumb-info-title"><!--thumb-info-title starts-->
                        <span class="thumb-info-inner">Haris Sohail</span>
                        <span class="thumb-info-type"> Cricket Player</span>
                    </div><!--thumb-info-title ends-->
                </div><!--thumb-info mb-md ends-->
                <div class="mb-md"><!--mb-md starts-->
                    <div class="widget-content-expanded"><!--widget-content-expanded starts-->
                        <i class="fa fa-user"></i><span>Email: </span>sohail@gmail.com <br>
                        <i class="fa fa-user"></i><span>Country: </span>Pakistan <br>
                        <i class="fa fa-user"></i><span>Phone: </span>0334678931 <br>
                    </div><!--widget-content-expanded ends-->
                    <hr class="dotted short">
                    <h5 class="text-muted">About</h5>
                    <p>Haris Sohail is a champion Cricket player in Pakistan. He loves winning and wants all of his fans to be winners. If you want to be a winner, you can follow his example and make a habit of winning.</p>
                </div><!--mb-md ends-->
            </div><!--panel-body ends-->
        </div><!--panel ends-->
    </div><!--col-md-4 ends-->
</div><!-- 3 row ends-->