<?php 


  if(isset($_GET['edit_brand'])){
      
      $brand_id = $_GET['edit_brand'];
      $brand = "select * from brand where brand_id='$brand_id'";
      $brand_run = mysqli_query($connection,$brand);
      $brand_rows = mysqli_fetch_assoc($brand_run);
      $brand_title = $brand_rows['brand_title'];
  }



?>

<?php 

if (isset($_POST['update_brand'])){
    $brand_title= $_POST['brand'];
    
     if (!empty($_POST['brand'])){
    $update_brand = "update brand set brand_title='$brand_title' where brand_id='$brand_id'";
    if ($update_brand_run = mysqli_query($connection,$update_brand)){
        echo "Updated Successfully";
    }else {
        echo mysqli_error($connection);
    }
 }
}



?>


<form class="form-horizontal" role="form" method="POST">
         <div class="form-group">
              <label class="col-lg-2 control-label">Category Name</label>
              <div class="col-lg-5">
               <input type="text" class="form-control" name="brand" value="<?php echo $brand_title;?>">
              </div>
          </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" style="background:#87a536; border-color:#87a536;" class="btn btn-lg btn-primary" name="update_brand"  value="Add New Category">Update Category</button>
              </div>
          </div>
</form>

