 <form action="" method="POST" enctype="multipart/form-data">
                  
                  <table align="center" width="700" bgcolor="skyblue">
                      <tr>
                           
                          <th>Brand Serial</th>
                           <th>Brand Tilte</th>
                          <th>Edit</th>
                           <th>Delete</th>
                      </tr>
                      <br>
                      <?php
                      $i=0;
         $query_brand = "select * from brand";
                $query_brand_run = mysqli_query($connection,$query_brand);
                    while($query_brand_rows = mysqli_fetch_assoc($query_brand_run)){
                         $brand_id = $query_brand_rows['brand_id'];
                         $brand_title = $query_brand_rows['brand_title'];
                         $i++;
                      ?>
                      <tr>
                          <td><?php echo $i;?></td>
                          <td colspan="1"><?php echo $brand_title;?></td>
                          <td><a href="admin.php?edit_brand=<?php echo $brand_id;?>" class="btn btn-xm btn-success">Edit</a></td>
                          <td><a href="admin.php?delete_brand=<?php echo $brand_id;?>" class="btn btn-xm btn-success">Delete</a></td>
                      </tr>
                      <?php  }  ?>
     </table>
</form>