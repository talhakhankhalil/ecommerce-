<h2>Please Login to Purchase</h2>
<div class="container">
            <div class="row">
                <div class="col-sm-6">
        <form class="form-horizontal" role="form" method="POST" action="checkout.php">
         <div class="form-group">
              <label for="Email" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
               <input type="email" class="form-control" id="email"  name="email">
              </div>
          </div>
            <br />
         <div class="form-group">
              <label for="password" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
               <input type="password" class="form-control" id="password" name="password">
              </div>
          </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" style="background:#87a536; border-color:#87a536;" class="btn btn-lg btn-primary" name="submit"  value="Submit">Log in</button>
              </div>
          </div>
             <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <a href="customer_register.php" style="float:right;background:#87a536; border-color:#87a536;" class="btn btn-lg btn-primary">New Customer Register here</a>
              </div>
          </div>
        </form>
                    </div>
                </div>
        </div>


<?php 


   
   include "components/php/connection.php";
   

  if (isset($_POST['email']) && isset($_POST['password'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      
        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $password_hash = MD5($password);
      $query = "select * from `customer` where customer_email =  '".mysqli_real_escape_string($connection,$email)."' AND customer_password = '".mysqli_real_escape_string($connection,$password_hash)."'";
           
            if ($query_run = mysqli_query($connection,$query)){
                $num_rows = mysqli_num_rows($query_run);
                    if ($num_rows == 0){
                        echo mysqli_error($connection);
                        echo "Invalid email and password";
                        exit();
                    }
                  $ip = getIp();      
                $select_cart = "select * from cart where ip_address='$ip'";
                $select_cart_run = mysqli_query($connection,$select_cart);
                $check_cart = mysqli_num_rows($select_cart_run);
                
                if ($num_rows > 0 AND $check_cart==0){
                    $_SESSION['customer_email'] = $email;
                   echo "<script>window.open('my_account.php','_self')</script>" ;
                    
                }else {
                      $_SESSION['customer_email'] = $email;
                   echo "<script>window.open('checkout.php','_self')</script>" ;
                }
                
                    
            }
        }else {
            echo "Please enter your email and password";
        }
  }
?>