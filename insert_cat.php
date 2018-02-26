<form class="form-horizontal" role="form" method="POST">
         <div class="form-group">
              <label class="col-lg-2 control-label">Category Name</label>
              <div class="col-lg-5">
               <input type="text" class="form-control" name="cat">
              </div>
          </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" style="background:#87a536; border-color:#87a536;" class="btn btn-lg btn-primary" name="add_cat"  value="Add New Category">Add New Category</button>
              </div>
          </div>
</form>

<?php 

if (isset($_POST['add_cat'])){
    $add_cat = $_POST['cat'];
    
     if (!empty($_POST['cat'])){
    $insert_cat = "insert into catogories values ('','$add_cat')";
    if ($add_cat_run = mysqli_query($connection,$insert_cat)){
        echo "Inserted Successfully";
    }else {
        echo mysqli_error($connection);
    }
 }else {
         echo "Please insert category";
     }
}



?>