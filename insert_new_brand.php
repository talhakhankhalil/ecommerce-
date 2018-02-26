<form class="form-horizontal" role="form" method="POST">
         <div class="form-group">
              <label class="col-lg-2 control-label">Brand Name</label>
              <div class="col-lg-5">
               <input type="text" class="form-control" name="brand">
              </div>
          </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" style="background:#87a536; border-color:#87a536;" class="btn btn-lg btn-primary" name="add_brand"  value="Add New Brand">Add New Brand</button>
              </div>
          </div>
</form>

<?php 

if (isset($_POST['add_brand'])){
    $add_brand = $_POST['brand'];
    
     if (!empty($_POST['brand'])){
    $insert_brand = "insert into brand values ('','$add_brand')";
    if ($add_brand_run = mysqli_query($connection,$insert_brand)){
        echo "Inserted Successfully";
    }else {
        echo mysqli_error($connection);
    }
 }else {
         echo "Please insert Brand";
     }
}



?>