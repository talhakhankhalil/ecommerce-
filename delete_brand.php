<?php 

 if (isset($_GET['delete_brand'])){
     
     $brand_id = $_GET['delete_brand'];
     $delete_brand="delete from brand where brand_id='$brand_id'";
     $delete_run = mysqli_query($connection,$delete_brand);
      echo "<script>window.open('admin.php?view_all_brands','_self')</script>";
 }




?>