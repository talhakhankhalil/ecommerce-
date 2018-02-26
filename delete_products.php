<?php 

 if (isset($_GET['delete_product'])){
     
     $product_id = $_GET['delete_product'];
     $delete_product="delete from products where product_id='$product_id'";
     $delete_run = mysqli_query($connection,$delete_product);
      echo "<script>window.open('admin.php?view_all_products','_self')</script>";
 }




?>