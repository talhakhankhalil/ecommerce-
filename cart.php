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
         <b>Shopping Cart -</b> Total Items in the cart: <?php total_items();?> Total Price: <?php total_price();?> <a href="index.php" class="btn btn-sm btn-success">Back To Shop</a>  
                      
                      <?php
                      
                      if (!isset($_SESSION['customer_email'])){
                          echo "<a href='checkout.php' class='btn btn-primary btn-sm'>Login in</a>";
                      }else {
                         echo "<a href='logout.php' class='btn btn-primary btn-sm' >Log out</a>";
                      }
                      
                      
                      ?>
                  </span>
                  </div>
                  <br/>
                 <form action="" method="POST" enctype="multipart/form-data">
                  
                  <table align="center" width="700" bgcolor="skyblue">
                      <tr>
                          <th >Remove</th>
                           <th >Product(s)</th>
                           <th >Quantity</th>
                           <th >Total Price</th>   
                      </tr>
                      
                      <?php
                      
                       $total_price = 0;
            global $connection;
            $ip = getIp();
            $query = "select * from cart where ip_address='$ip'";
            if ($query_run=mysqli_query($connection,$query)){
                while($num_rows = mysqli_fetch_assoc($query_run)){
                $product_id = $num_rows['p_id'];
         $query_product = "select * from products where product_id='$product_id'";
                $query_product_run = mysqli_query($connection,$query_product);
                    $query_product_rows = mysqli_fetch_assoc($query_product_run);
                         $product_price = $query_product_rows['product_price'];
                         $product_title = $query_product_rows['product_title'];
                         $product_image = $query_product_rows['product_image'];
                         $total_price = $total_price + $product_price;
                      ?>
                      <tr>
                        <td colspan="1"><input type="checkbox" name="remove[]" value="<?php echo $product_id;?>"></td>
                          <td colspan="1"><?php echo $product_title;?><br>
                          <img src="images/<?php echo $product_image;?>" width="60" height="60">
                          </td>
                          <td><input type="text" size="4" name="qty"></td>
                          <td><?php echo "$ ".$product_price;?></td>
                         
                      </tr>
                      <?php  } } ?>
                      <tr>
                        <td  colspan="4"><b>Sub Total Price:</b></td>
                        <td  colspan="4"><b><?php echo "$". $total_price;?></b></td>
                      </tr>
                      <tr>
                        <td><input type="submit" class="btn btn-sm btn-primary" name="update_cart" value="Update Cart"/></td>
                        <td><a href="index.php" class="btn btn-sm btn-primary">Continue Shopping</a></td>
        <td><a href="checkout.php" class="btn btn-sm btn-primary">Checkout</a></td>
                      </tr>
                  </table>
                 </form>
                  
            <?php
             
                global $connection;
                  $ip = getIp();
                  
                  if (isset($_POST['update_cart'])){
                      
                      foreach($_POST['remove'] as $remove_id){
                        $delete = "delete from cart where p_id='$remove_id' AND ip_address='$ip'"; 
                          
                          $delete_run = mysqli_query($connection,$delete);
                          if ($delete_run){
                              echo "<script>window.open('cart.php','_self')</script>";
                          }
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