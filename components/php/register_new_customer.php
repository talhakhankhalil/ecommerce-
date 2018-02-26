<?php 

   include "connection.php";
   session_start();
?>

<?php 
 
    if (isset($_POST['submit'])){
         
        $ip = getIp();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $country= $_POST['country'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $image = $_FILES['customer_image']['name'];
        $customer_images_tmp = $_FILES['customer_image']['tmp_name'];
    move_uploaded_file($customer_images_tmp,"images/$image");
        
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['country']) && !empty($_POST['city']) && !empty($_POST['contact']) && !empty($_POST['address']) && !empty($_FILES['customer_image'])){
   
         $password_has = MD5($password);
            
 $query = "insert into `customer` values ('','$ip','$name','$email','$password_has','   $country','$city','$contact','$image','$address')";
            if ($query_run = mysqli_query($connection,$query)){
                 echo "Registered Successfully";
                 
                $select_cart = "select * from cart where ip_address='$ip'";
                $select_cart_run = mysqli_query($connection,$select_cart);
                $check_cart = mysqli_num_rows($select_cart_run);
                if ($check_cart == 0){
                    $_SESSION['customer_email'] = $email;
                   echo "<script>window.open('my_account.php','_self')</script>" ;
                }else{
                   $_SESSION['customer_email'] = $email;
                   echo "<script>window.open('checkout.php','_self')</script>" ; 
                }
                
            } else {
                 echo mysqli_error($connection);
            }      
        }else {
            echo "Please fill in all fields";
        }
    
    }



?>











<h3>Create an account to register here.</h3>  
<div class="container">
            <div class="row">
                <div class="col-sm-8">
     <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
         <div class="form-group">
              <label  class="col-lg-2 control-label">Name</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="name">
              </div>
          </div>
         <div class="form-group">
              <label  class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
               <input type="email" class="form-control" name="email">
              </div>
          </div>
         <div class="form-group">
              <label  class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
               <input type="password" class="form-control"  name="password">
              </div>
          </div>
         <div class="form-group">
              <label  class="col-lg-2 control-label">Country</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="country">
              </div>
          </div>
         <div class="form-group">
              <label  class="col-lg-2 control-label">City</label>
              <div class="col-lg-10">
               <input type="text" class="form-control"  name="city">
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Contact No</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="contact">
              </div>
          </div>
          <div class="form-group">
              <label  class="col-lg-2 control-label">Image</label>
              <div class="col-lg-10">
               <input type="file" name="customer_image">
              </div>
          </div>
         <div class="form-group">
              <label class="col-lg-2 control-label">Address</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="address">
              </div>
          </div>
          <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" style="background:#87a536; border-color:#87a536;" class="btn btn-lg btn-primary" name="submit"  value="Submit">Submit</button>
              </div>
          </div>
        </form>
      </div>
                 </div>
        </div>