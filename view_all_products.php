 <form action="" method="POST" enctype="multipart/form-data">
                  
                  <table align="center" width="700" bgcolor="skyblue">
                      <tr>
                           
                          <th>Product Serial</th>
                           <th>Product Tilte</th>
                          <th>Product Price</th>
                           <th>Product Image</th> 
                          <th>Edit</th>
                           <th>Delete</th>
                      </tr>
                      
                      <?php
                      $i=0;
         $query_product = "select * from products";
                $query_product_run = mysqli_query($connection,$query_product);
                    while($query_product_rows = mysqli_fetch_assoc($query_product_run)){
                         $product_id = $query_product_rows['product_id'];
                         $product_price = $query_product_rows['product_price'];
                         $product_title = $query_product_rows['product_title'];
                         $product_image = $query_product_rows['product_image'];
                         $i++;
                      ?>
                      <tr>
                        
                          <td><?php echo $i;?></td>
                          <td colspan="1"><?php echo $product_title;?></td>
                          <td><?php echo "$ ".$product_price;?></td>
                          <td><img src="images/<?php echo $product_image;?>" width="60" height="60"></td>
                          <td><a href="admin.php?edit_product=<?php echo $product_id;?>" class="btn btn-primary btn-success">Edit</a></td>
                          <td><a href="admin.php?delete_product=<?php echo $product_id;?>" class="btn btn-primary btn-success">Delete</a></td>
                          
                          
                         
                      </tr>
                      <?php  }  ?>
     </table>
</form>