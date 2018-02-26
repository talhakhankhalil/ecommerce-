
<?php 


   session_start();
   include "components/php/connection.php";
   

  if (isset($_POST['email']) && isset($_POST['password'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      
        if (!empty($_POST['email']) && !empty($_POST['password'])){
           
      $query = "select * from `user` where user_name=  '".mysqli_real_escape_string($connection,$email)."' AND user_password = '".mysqli_real_escape_string($connection,$password)."'";
           
            if ($query_run = mysqli_query($connection,$query)){
                $num_rows = mysqli_num_rows($query_run);
                    if ($num_rows == 0){
                        echo mysqli_error($connection);
                        echo "Invalid email and password";
                    }else{
                        $_SESSION['user_name']= $email;
                        echo "<script>window.open('admin.php?login=You are successfully log in.','_self')</script>";
                    }
                    
            }
        }else {
            echo "Please enter your email and password";
        }
  }
?>




<html>
    <head>
    
    <title>Admin Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="admin_css.css"/>
        <script src="admin_javascript.js"></script>
    </head>
    <body>
        <div>
            <div class="login">
                
	<h1>LOGIN</h1>
                
    <form method="POST">
    	<input type="text" name="email" placeholder="Username" />
        <input type="password" name="password" placeholder="Password"/>
        <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Log In.</button>
    </form>
</div>
        </div>
    </body>
</html>