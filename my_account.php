<?php include "components/php/functions.php";?>
<?php include "components/php/connection.php";?>
<?php session_start();?>

<?php 
                         
                         if (isset($_SESSION['customer_email'])){
                         
                         $user = $_SESSION['customer_email'];
                         
                         $get_image = "select * from customer where customer_email='$user'";
                         
                         $get_run = mysqli_query($connection,$get_image);
                         
                         $get_rows = mysqli_fetch_assoc($get_run);
                         
                         $customer_image = $get_rows['customer_image'];
                             
                         $customer_name = $get_rows['customer_name']; 
                         }
                         ?>
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
          <div class="col-sm-9">
              <div class="product_box">
        
                  <div class="shopping_cart">
                  <span style="float:right; color:white; padding:15px;">
                      
                       <?php 
                      if (isset($_SESSION['customer_email'])){
                          
                          echo "<b>Welcome:  </b>".$_SESSION['customer_email'];
                          
                      }else{
                          echo "<b>Welcome guest</b>";
                      }
                      
                      ?>
                      <?php
                      
                      if (!isset($_SESSION['customer_email'])){
                          echo "<a href='checkout.php' class='btn btn-primary btn-sm'>Login in</a>";
                      }else {
                         echo "<a href='logout.php' class='btn btn-primary btn-sm' >Log out</a>";
                      }
                      
                      
                      ?>
                  </span>
                  </div>
                  <h3>Welcome: <?php if (isset($_SESSION['customer_email'])){echo $customer_name;}?></h3>
                  
                  
    <?php 

  if (isset($_GET['edit_account'])){
      
      if (isset($_SESSION['customer_email'])){
          include "components/php/edit_customer_account.php";
      }
  }

?>
              </div>
          </div>
           <div class="col-sm-3">
            <div class="sidebar">
           <div class="sidebar-header">
               <span>My Account</span>
           </div>
                 <div class="sidebar-content">
                     <ul>
                         <?php  if (isset($_SESSION['customer_email'])){
          echo "<li><img src='images/$customer_image' width='150' height='150'></li>";
}  ?>
                         <li><a href="my_account.php?my_orders">My Orders</a></li>
                         <li><a href="my_account.php?edit_account">Edit Account</a></li>
                         <?php if(isset($_SESSION['customer_email'])){
                         echo "<li><a href='logout.php' class='btn btn-lg btn-primary' style='color:white;' >logout</a></li>";}?>
                     </ul>
                 </div>
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


