<?php include"components/php/connection.php";?>
<?php include"components/php/functions.php";?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHOPME-admin panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggler hidden-sm-up pull-sm-right" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    &#9776;
                </button>
                <a class="navbar-brand" href="admin.php">SHOPME</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-nav top-nav navbar-right pull-xs-right">
                <li class="dropdown nav-item active">
                    <!-- <div class="dropdown"> -->
                        <a class="nav-link dropdown-toggle" href="javascript:;" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope"></i> <b class="caret"></b><span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="dropdown-item message-preview">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="media-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Talha Khan</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-item message-preview">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="media-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Talha Khan</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-item message-preview">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="media-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-item message-footer">
                                <a href="javascript:;">Read All New Messages</a>
                            </li>
                        </ul>
                    <!-- </div> -->
                </li>
                <li class="dropdown nav-item">
                    <!-- <div class="dropdown"> -->
                        <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i> <b class="caret"></b><span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-default"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-primary"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-success">Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-info"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-warning"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-danger"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a href="javascript:;">View All</a>
                            </li>
                        </ul>
                    <!-- </div> -->
                </li>
                <li class="dropdown nav-item">
                    <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Talha Khan  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="javascript:;"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:;"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:;"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-item">
                            <a href="javascript:;"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-toggleable-sm navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav list-group">
                    <li class="list-group-item">
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="admin.php?insert_new_product"><i class="fa fa-fw fa-bar-chart-o"></i>Insert New Product</a>
                    </li>
                    <li class="list-group-item">
                        <a href="admin.php?view_all_products"><i class="fa fa-fw fa-table"></i>View All Products</a>
                    </li>
                   
                    <li class="list-group-item">
                        <a href="admin.php?insert_cat"><i class="fa fa-fw fa-desktop"></i> Insert New Category</a>
                    </li>
                     <li class="list-group-item">
                        <a href="admin.php?view_all_cats"><i class="fa fa-fw fa-edit"></i>View All Categories</a>
                    </li>
                    <li class="list-group-item">
                        <a href="admin.php?insert_new_brand"><i class="fa fa-fw fa-wrench"></i> Insert new brand</a>
                    </li>
                    <li class="list-group-item">
                        <a href="admin.php?view_all_brands"><i class="fa fa-fw fa-wrench"></i> View all brand</a>
                    </li>
            
                    <li class="list-group-item">
                        <a href="admin.php?view_all_customer"><i class="fa fa-fw fa-file"></i> View all customer</a>
                    </li>
                    <li class="list-group-item">
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            
            <?php 
            
          if (!isset($_GET['insert_new_product']) && !isset($_GET['view_all_product'])){
              
              echo "<h2>Welcome to the Admin Panel</h2>";
          }
            
            
            
            
            ?>
            
            <?php  
            
            if (isset($_GET['insert_new_product'])){
                
               include "insert_new_product.php"; 
                
            }
            if (isset($_GET['view_all_products'])){
                
               include "view_all_products.php"; 
                
            }
             if (isset($_GET['edit_product'])){
                
               include "edit_product.php"; 
                
            }
            if (isset($_GET['delete_product'])){
                
               include "delete_products.php"; 
                
            }
            if (isset($_GET['insert_cat'])){
                
               include "insert_cat.php"; 
                
            }
            if (isset($_GET['view_all_cats'])){
                
               include "view_all_cats.php"; 
                
            }
            if (isset($_GET['delete_cat'])){
                
               include "delete_cat.php"; 
                
            }
            if (isset($_GET['edit_cat'])){
                
               include "edit_cat.php"; 
                
            }
            if (isset($_GET['view_all_brands'])){
                
               include "view_all_brands.php"; 
                
            }
            if (isset($_GET['delete_brand'])){
                
               include "delete_brand.php"; 
                
            }
            if (isset($_GET['edit_brand'])){
                
               include "edit_brand.php"; 
                
            }
            if (isset($_GET['insert_new_brand'])){
                
               include "insert_new_brand.php"; 
                
            }
            
            if (isset($_GET['view_all_customer'])){
                
               include "view_all_customer.php"; 
                
            }
            
            
            
            ?>

         
            


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
     <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</body>

</html>
