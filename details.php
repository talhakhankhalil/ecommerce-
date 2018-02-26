<?php include "components/php/functions.php";?>
<?php include "components/php/connection.php";?>
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
                  <div class="shopping_cart">
                  <span style="float:right; color:white; padding:15px;">Welcome !!!!
         <b>Shopping Cart -</b> Total Items: Total Price: <a href="cart.php" class="btn btn-sm btn-success">Go to cart</a>      
                  </span>
                  </div>
                <?php 
                  
                  
                  if (isset($_GET['cat_id'])){
                      
                      $cat_id = $_GET['cat_id'];
                       $query = "select * from products where product_id='$cat_id'";
    
    if($query_run = mysqli_query($connection,$query)){
            while ($query_rows = mysqli_fetch_assoc($query_run)){
            $product_id = $query_rows['product_id'];
            $product_title = $query_rows['product_title'];
            $product_price = $query_rows['product_price'];
            $product_image = $query_rows['product_image'];
            
            echo "
               
               <div class='single_product'>
               <h3>$product_title</h3>
               <img src='images/$product_image' width ='300' height='300'>
               <h3>$ $product_price</h3>
               <a href='index.php' class='btn btn-sm btn-primary' style='float:left;'>Go back</a>
               <button type='submit' name='add_cart' class='btn btn-sm btn-primary' style='float:right;'>Add to cart</button>
               </div>
               
            ";
               
            }
    }else{
        echo mysqli_error($connection);
    }  
    }
                       
                  ?>
                
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