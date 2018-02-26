<?php 

include "connection.php";

function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
  



// getting the Catagories
function get_cat(){
    
    global $connection;
    
    $query = "select * from catogories";
    
    if($query_run = mysqli_query($connection,$query)){
            while ($query_rows = mysqli_fetch_assoc($query_run)){
            $cat_id = $query_rows['cat_id'];
            $cat_title = $query_rows['cat_title'];
            echo "<li><a href='index.php?cat_get_id=$cat_id'>$cat_title</a></li>";
            }
    }else{
        echo mysqli_error($connection);
    }  
}

// getting the brands 
function get_brand(){
    
    global $connection;
    
    $query = "select * from brand";
    
    if($query_run = mysqli_query($connection,$query)){
            while ($query_rows = mysqli_fetch_assoc($query_run)){
            $brand_id = $query_rows['brand_id'];
            $brand_title = $query_rows['brand_title'];
            echo "<li><a href='index.php?brand_get_id=$brand_id'>$brand_title</a></li>";
            }
    }else{
        echo mysqli_error($connection);
    }  
}

function get_products(){
    
    if (!isset($_GET['cat_get_id']) && !isset($_GET['brand_get_id'])){
    global $connection;
    
    $query = "select * from products order by `product_id` desc limit 0,8";
    
    if($query_run = mysqli_query($connection,$query)){
            while ($query_rows = mysqli_fetch_assoc($query_run)){
            $product_id = $query_rows['product_id'];
            $product_title = $query_rows['product_title'];
            $product_price = $query_rows['product_price'];
            $product_image = $query_rows['product_image'];
            
            echo "
               
               <div class='single_product'>
               <h3>$product_title</h3>
               <img src='images/$product_image' width ='180' height='180'>
               <h3>Price $ $product_price</h3>
               <a href='details.php?cat_id=$product_id' class='btn btn-sm btn-primary' style='float:left;'>Details</a>
              <a href='index.php?add_cart=$product_id' <button type='submit' name='add_cart' class='btn btn-sm btn-primary' style='float:right;'>Add to cart</button></a>
               </div>
               
            ";
               
            }
    }else{
        echo mysqli_error($connection);
    }  
    }
}

function get_cat_products(){
    
    if(isset($_GET["cat_get_id"])){
        
        
        $cat_id = $_GET["cat_get_id"];
        
        global $connection;
    
    $query = "select * from products where product_cat='$cat_id'";
    
    if($query_run = mysqli_query($connection,$query)){
            while ($query_rows = mysqli_fetch_assoc($query_run)){
            $product_id = $query_rows['product_id'];
            $product_title = $query_rows['product_title'];
            $product_price = $query_rows['product_price'];
            $product_image = $query_rows['product_image'];
            
            echo "
               
               <div class='single_product'>
               <h3>$product_title</h3>
               <img src='images/$product_image' width ='180' height='180'>
               <h3>Price $ $product_price</h3>
               <a href='details.php?cat_id=$product_id' class='btn btn-sm btn-primary' style='float:left;'>Details</a>
              <a href='index.php?add_cart=$product_id' <button type='submit' name='add_cart' class='btn btn-sm btn-primary' style='float:right;'>Add to cart</button></a>
               </div>
               
            ";
               
            }
    }else{
        echo mysqli_error($connection);
    }  
    }
    
}

function get_brand_products(){
    
    
    
    if (isset($_GET['brand_get_id'])){
        
        $brand_id = $_GET['brand_get_id'];
        
        global $connection;
    $query = "select * from products where product_brand='$brand_id'";
    
    if($query_run = mysqli_query($connection,$query)){
            while ($query_rows = mysqli_fetch_assoc($query_run)){
            $product_id = $query_rows['product_id'];
            $product_title = $query_rows['product_title'];
            $product_price = $query_rows['product_price'];
            $product_image = $query_rows['product_image'];
            
            echo "
               
               <div class='single_product'>
               <h3>$product_title</h3>
               <img src='images/$product_image' width ='180' height='180'>
               <h3>Price $ $product_price</h3>
               <a href='details.php?cat_id=$product_id' class='btn btn-sm btn-primary' style='float:left;'>Details</a>
              <a href='index.php?add_cart=$product_id' <button type='submit' name='add_cart' class='btn btn-sm btn-primary' style='float:right;'>Add to cart</button></a>
               </div>
               
            ";
               
            }
    }else{
        echo mysqli_error($connection);
    } 
    }
    
}

function cart(){

    if (isset($_GET['add_cart'])){
        
        global $connection;
        
        $ip = getIp();

        $product_id = $_GET['add_cart'];
        
 $check_product = "select * from `cart` where p_id='$product_id' AND ip_address='$ip'";
        
       if ($check_pro_run = mysqli_query($connection,$check_product)){
         
           $num_rows = mysqli_num_rows($check_pro_run);
        
        if ($num_rows>0){
           echo "This is already in your cart";
           
        }else {
            $insert_product = "insert into cart values('$product_id','$ip','NULL')";
            if($insert_pro_run = mysqli_query($connection,$insert_product)){
                echo "inserted sucessfully";
            }else {
               
                echo mysqli_error($connection);
            }
        }
    }else {
            echo mysqli_error($connection);
       }
        
   }
    
}


function total_items(){
    
    if(isset($_GET['add_cart'])){
        
        global $connection;
        
        $ip = getIp();
        
        $query = "select * from cart where ip_address='$ip'";
        if ($query_run=mysqli_query($connection,$query)){
            $count = mysqli_num_rows($query_run);
        }
    }else{
        global $connection;
        
        $ip = getIp();
        
        $query = "select * from cart where ip_address='$ip'";
        if ($query_run=mysqli_query($connection,$query)){
            $count = mysqli_num_rows($query_run);
        }
    }
    
 
    echo $count;
    
}

function total_price(){
    
       $total_price = 0;
        global $connection;
        $ip = getIp();
        $query = "select * from cart where ip_address='$ip'";
        if ($query_run=mysqli_query($connection,$query)){
            while($num_rows = mysqli_fetch_assoc($query_run)){
            $product_id = $num_rows['p_id'];
     $query_product = "select `product_price` from products where product_id='$product_id'";
            $query_product_run = mysqli_query($connection,$query_product);
                $query_product_rows = mysqli_fetch_assoc($query_product_run);
                     $product_price = $query_product_rows['product_price'];
                     $total_price = $total_price + $product_price;
                
            }
        }
    
    echo "$".$total_price;
}

?>
