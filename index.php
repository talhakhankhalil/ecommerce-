<?php include "components/php/functions.php";?>
<?php include "components/php/connection.php";?>
<?php session_start();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopme</title>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
</head>
<body>
    
    <!-- Header Section -->
    
   <?php include "components/php/nav-header.php";?>
    
    <!-- Header Section -->
    <div class="container">
      <div class="row">
         <div class="col-sm-2">
            <div class="sidebar">
           <div class="sidebar-header">
               <span>CATEGORIES</span>
           </div>
                 <div class="sidebar-content">
                     <ul>
                       <?php get_cat();?>
                     </ul>
                 </div>
             <div class="sidebar-header">
               <span>BRANDS</span>
           </div>
                 <div class="sidebar-content">
                     <ul>
                       <?php get_brand();?>
                     </ul>
                 </div>
           </div>
          </div>
          <div class="col-sm-10">
              <div class="product_box">
                  <?php cart(); ?>
                  <div class="shopping_cart">
                  <span style="float:right; color:white; padding:15px;">
                      
                       <?php 
                      if (isset($_SESSION['customer_email'])){
                          
                          echo "<b>Welcome:  </b>".$_SESSION['customer_email'];
                          
                      }else{
                          echo "<b>Welcome guest</b>";
                      }
                      
                      ?>
                      
                      
         <b>Shopping Cart -</b> Total Items in the cart: <?php total_items();?> Total Price: <?php total_price();?> <a href="cart.php" class="btn btn-sm btn-success">Go to cart</a>  
                      <?php
                      
                      if (!isset($_SESSION['customer_email'])){
                          echo "<a href='checkout.php' class='btn btn-primary btn-sm'>Login in</a>";
                      }else {
                         echo "<a href='logout.php' class='btn btn-primary btn-sm' >Log out</a>";
                      }
                      
                      
                      ?>
                  </span>
                  </div>
                <?php get_products()?>
                <?php get_cat_products()?>
                <?php get_brand_products()?>
              </div>
          </div>
    </div>
    </div>
   
  <div class="container">
    
    <div class="row">
      <div class="col-sm-12">
        <footer class="footer-content">
          <p>Copyright 2016</p>
        </footer>
        </div>           
      </div>
    </div>




<!-- Enf of footer -->
 <!-- Jquery CDN link -->
   <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    </body>
</html>