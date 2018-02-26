<?php 
include "components/php/connection.php";

if (isset($_POST['insert_product'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description']; 
    $product_keyword = $_POST['product_keywords'];
    $product_image = $_FILES['product_image']['name'];
    $product_images_tmp = $_FILES['product_image']['tmp_name'];
    move_uploaded_file($product_images_tmp,"images/$product_image");
    
    if (!empty($_POST['product_title']) && !empty($_POST['product_category']) && !empty($_POST['product_brand']) && !empty($_FILES['product_image']) && !empty($_POST['product_price']) && !empty($_POST['product_description']) && !empty($_POST['product_keywords'])){
        
        $query= "insert into `products` values  ('','$product_title','$product_cat','$product_brand','$product_image','$product_price' ,'$product_description','$product_keyword')";
        if ($query_run= mysqli_query($connection,$query)){
            echo "Inserted Succssfully";
        }else {                                    
            echo mysqli_error($connection);
        }
        
    }else {
        echo "Please fill all the fields";
    }
    
     
}

?>

       
        <h3>Edit the product here</h3>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <form class="form-horizontal" method="POST" action="admin.php?insert_new_product" enctype="multipart/form-data">
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Title</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="product_title">
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Category</label>
              <div class="col-lg-10">
               <select name="product_category">
               
                   <option>select a category</option>
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
              
                   <option>select a brand</option>
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
              <label class="col-lg-2 control-label">Product Image</label>
              <div class="col-lg-10">
               <input type="file" name="product_image">   
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Price</label>
              <div class="col-lg-10">
               <input type="text" name="product_price" class="form-control">
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Description</label>
              <div class="col-lg-10">
            <textarea class="form-control"  name="product_description"></textarea>
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Product Keywords</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="product_keywords">
              </div>
          </div>
          <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
            <input type="submit" class="btn btn-lg btn-primary" name="insert_product"  value="Submit">
              </div>
          </div>
        </form>
      </div>
    </div>
        </div>     
 
<!-- query CDN-->


