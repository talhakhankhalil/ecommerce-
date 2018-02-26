 <form action="" method="POST" enctype="multipart/form-data">
                  
                  <table align="center" width="700" bgcolor="skyblue">
                      <tr>
                           
                          <th>Category Serial</th>
                           <th>Category Tilte</th>
                          <th>Edit</th>
                           <th>Delete</th>
                      </tr>
                      <br>
                      <?php
                      $i=0;
         $query_cats = "select * from catogories";
                $query_cats_run = mysqli_query($connection,$query_cats);
                    while($query_cat_rows = mysqli_fetch_assoc($query_cats_run)){
                         $cat_id = $query_cat_rows['cat_id'];
                         $cat_title = $query_cat_rows['cat_title'];
                         $i++;
                      ?>
                      <tr>
                          <td><?php echo $i;?></td>
                          <td colspan="1"><?php echo $cat_title;?></td>
                          <td><a href="admin.php?edit_cat=<?php echo $cat_id;?>" class="btn btn-xm btn-success">Edit</a></td>
                          <td><a href="admin.php?delete_cat=<?php echo $cat_id;?>" class="btn btn-xm btn-success">Delete</a></td>
                      </tr>
                      <?php  }  ?>
     </table>
</form>