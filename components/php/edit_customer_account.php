

<?php 
    include "connection.php";

    if (isset($_SESSION['customer_email'])){
        
         if (!empty($_SESSION['customer_email'])) {
              $query = "select * from customer where customer_email = '".$_SESSION['customer_email']."'";
              if ($query_run = mysqli_query($connection , $query)){
                  $rows_values = mysqli_fetch_assoc($query_run);
                        $c_id = $rows_values['customer_id'];
                        $c_name = $rows_values['customer_name'];
                        $c_email =$rows_values['customer_email'];
                        $c_password = $rows_values['customer_password'];
                        $c_country = $rows_values['customer_country'];
                        $c_city= $rows_values['customer_city'];
                        $c_contact = $rows_values['customer_contact'];
                        $c_address = $rows_values['customer_address'];
                        
                  
                  
                       
              }
         }
    }else {
        echo "You must logged In.";
                        $c_id = '';
                        $c_name = ' ';
                        $c_email =' ';
                        $c_password = ' ';
                        $c_country= ' ';
                        $c_city = ' ';
                        $c_contact = ' ';
                        $c_address = ' ';
    }
?>

<?php 

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['country']) && isset($_POST['city']) && isset($_POST['contact']) && isset($_POST['address'])){
        
                        $c_name = $_POST['name'];
                        $c_email = $_POST['email'];
                        $c_password = $_POST['password'];
                        $c_country= $_POST['country'];
                        $c_city = $_POST['city'];
                        $c_contact = $_POST['contact'];
                        $c_address = $_POST['address'];
                          
           
        
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['country']) && !empty($_POST['city']) && !empty($_POST['contact']) && !empty($_POST['address'])){
               
               $password_has = MD5($c_password);
            
        $query1 = "update customer set customer_name='$c_name', customer_email = '$c_email', customer_password = '$password_has', customer_country = '$c_country' , customer_city= '$c_city', customer_contact = '$c_contact', customer_address= '$c_address' where customer_id = '$c_id'";
               
            if ($query_run1 = mysqli_query($connection,$query1)){
                echo "Updated Sucessfully";
            }else{
                echo mysqli_error($connection);
            }    
           }
        
    }



?>


<h3>You can edit you account here.</h3>  
<div class="container">
            <div class="row">
                <div class="col-sm-8">
     <form action="my_account.php?edit_account=<?php echo $c_id;?>" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
         <div class="form-group">
              <label  class="col-lg-2 control-label">Name</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="name" value="<?php echo $c_name;?>">
              </div>
          </div>
         <div class="form-group">
              <label  class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
               <input type="email" class="form-control" name="email" value="<?php echo $c_email;?>">
              </div>
          </div>
         <div class="form-group">
              <label  class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
               <input type="password" class="form-control"  name="password" value="<?php echo $c_password;?>">
              </div>
          </div>
         <div class="form-group">
              <label  class="col-lg-2 control-label">Country</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="country" value="<?php echo $c_country;?>">
              </div>
          </div>
         <div class="form-group">
              <label  class="col-lg-2 control-label">City</label>
              <div class="col-lg-10">
               <input type="text" class="form-control"  name="city" value="<?php echo $c_city;?>">
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Contact No</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="contact" value="<?php echo $c_contact;?>">
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Address</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="address" value="<?php echo $c_address;?>">
              </div>
          </div>
          <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" style="background:#87a536; border-color:#87a536;" class="btn btn-lg btn-primary" name="submit"  value="update">Update</button>
              </div>
          </div>
        </form>
      </div>
                 </div>
        </div>