<?php 

 if (isset($_GET['delete_cat'])){
     
     $cat_id = $_GET['delete_cat'];
     $delete_cat="delete from catogories where cat_id='$cat_id'";
     $delete_run = mysqli_query($connection,$delete_cat);
      echo "<script>window.open('admin.php?view_all_cats','_self')</script>";
 }




?>