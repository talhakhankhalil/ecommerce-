<?php 
include "components/php/connection.php";

if (isset($_GET['edit_product'])){
    
    $product_id = $_GET['edit_product'];
    
    $get_product = "select * from products where product_id='$product_id'";
    

    if ($get_product_run = mysqli_query($connection,$get_product)){
    
            $product_rows = mysqli_fetch_assoc($get_product_run);
            $product_title =  $product_rows['product_title'];
            $product_cat =    $product_rows['product_cat'];
            $product_brand =  $product_rows['product_brand'];
            $product_price =  $product_rows['product_price'];
            $product_description = $product_rows['product_description']; 
            $product_keyword = $product_rows['product_keywords'];
    } 
}
?>

<?php
    
    if (isset($_POST['update_product'])){
        
            $product_title =  $_POST['product_title'];
            $product_cat =    $_POST['product_category'];
            $product_brand =  $_POST['product_brand'];
            $product_price =  $_POST['product_price'];
            $product_description = $_POST['product_description']; 
            $product_keyword = $_POST['product_keywords'];
        
    
    if (!empty($_POST['product_title']) && !empty($_POST['product_category']) && !empty($_POST['product_brand']) && !empty($_POST['product_price']) && !empty($_POST['product_description']) && !empty($_POST['product_keywords'])){
        
           
        $update_product = "update products set product_title='$product_title', product_cat='$product_cat', product_brand='$product_brand', product_price='$product_price', product_description='$product_description', product_keywords='$product_keyword' where product_id ='$product_id'";
            
            if ($update_products_run = mysqli_query($connection,$update_product)){
                echo "<script>window.open('admin.php?view_all_products','_self')</script>";
            }else {
               echo mysqli_error($connection);
            }
        
    }
    
     
}
    


?>

       
        <h3>Edit the product here</h3>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Title</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="product_title" value="<?php echo $product_title;?>">
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Category</label>
              <div class="col-lg-10">
               <select name="product_category">
               
                   <option><?php echo $product_cat?></option>
                   <?php
                   $query_cat = "select * from catogories";
    
    if($query_run_cat = mysqli_query($connection,$query_cat)){
            while ($query_rows = mysqli_fetch_assoc($query_run_cat)){
            $cat_id = $query_rows['cat_id'];
            $cat_title = $query_rows['cat_title'];
            echo "<option value='$cat_id'>$cat_title</option>";
            }
    }else{
        echo mysqli_error($connection);
    }    
                   ?>
              
              </select>
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Brand</label>
              <div class="col-lg-10">
               <select name="product_brand">
              
                   <option><?php echo $product_brand?></option>
                   <?php
                   
                    $query_brands = "select * from brand";
    
    if($query_run_brands = mysqli_query($connection,$query_brands)){
            while ($query_rows = mysqli_fetch_assoc($query_run_brands)){
            $brand_id = $query_rows['brand_id'];
            $brand_title = $query_rows['brand_title'];
            echo "<option value='$brand_id'>$brand_title</option>";
            }
    }else{
        echo mysqli_error($connection);
    }  
                       
                   ?>
              </select>
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Price</label>
              <div class="col-lg-10">
               <input type="text" name="product_price" class="form-control" value="<?php echo $product_price;?>">
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Description</label>
              <div class="col-lg-10">
            <textarea class="form-control"  name="product_description"><?php echo $product_description;?></textarea>
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Keywords</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="product_keywords" value="<?php echo $product_keyword;?>">
              </div>
          </div>
          <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
            <input type="submit" class="btn btn-lg btn-primary" name="update_product"  value="Update">
              </div>
          </div>
        </form>
      </div>
    </div>
        </div>     
 
<!-- query CDN-->


