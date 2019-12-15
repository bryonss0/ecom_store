
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7181822bb7.js" crossorigin="anonymous"></script>
    </head>  
    <body>
        <div id="wrapper"><!--wrapper starts-->
            <?php include("includes/sidebar.php"); ?>
            <div id="page-wrapper"><!--page-wrapper starts-->
                <div class="container-fluid"><!--container-fluid starts-->
                    <?php
                    if(isset($_GET['dashboard'])){
                        include("dashboard.php");
                    }
                    ?>
                </div><!--container-fluid ends-->
            </div><!--page-wrapper ends-->
        </div><!--wrapper ends-->
        
        
      <script src="js/jquery.min.js"></script>  
      <script src="js/bootstrap.min.js"></script> 
    </body>
    
    
</html>
