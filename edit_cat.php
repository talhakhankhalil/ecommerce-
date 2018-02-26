<?php 


  if(isset($_GET['edit_cat'])){
      
      $cat_id = $_GET['edit_cat'];
      $cat = "select * from catogories where cat_id='$cat_id'";
      $cat_run = mysqli_query($connection,$cat);
      $cat_rows = mysqli_fetch_assoc($cat_run);
      $cat_title = $cat_rows['cat_title'];
  }



?>

<?php 

if (isset($_POST['update_cat'])){
    $cat_title= $_POST['cat'];
    
     if (!empty($_POST['cat'])){
    $update_cat = "update catogories set cat_title='$cat_title' where cat_id='$cat_id'";
    if ($update_cat_run = mysqli_query($connection,$update_cat)){
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
               <input type="text" class="form-control" name="cat" value="<?php echo $cat_title;?>">
              </div>
          </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" style="background:#87a536; border-color:#87a536;" class="btn btn-lg btn-primary" name="update_cat"  value="Add New Category">Update Category</button>
              </div>
          </div>
</form>

