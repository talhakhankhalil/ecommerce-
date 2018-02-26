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
    
    <?php include "components/php/nav-header.php";?>
    <div class="container">
      <div class="row">
        
          <div class="col-sm-12">
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
          <?php 
              $query = "select * from products order by `product_id` desc";
    
    if($query_run = mysqli_query($connection,$query)){
            while ($query_rows = mysqli_fetch_assoc($query_run)){
            $product_id = $query_rows['product_id'];
            $product_title = $query_rows['product_title'];
            $product_price = $query_rows['product_price'];
            $product_image = $query_rows['product_image'];
            
            echo "
               
               <div class='single_product'>
               <h3>$product_title</h3>
               <img src='images/$product_image' width ='180' height='180'>
               <h3>Price $ $product_price</h3>
               <a href='details.php?cat_id=$product_id' class='btn btn-sm btn-primary' style='float:left;'>Details</a>
               <a href='index.php?add_cart=$product_id' <button type='submit' name='add_cart' class='btn btn-sm btn-primary' style='float:right;'>Add to cart</button></a>
               </div>
               
            ";
               
            }
    }else{
        echo mysqli_error($connection);
    }   
              ?>
          
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