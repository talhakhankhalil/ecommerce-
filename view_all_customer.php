 <form action="" method="POST" enctype="multipart/form-data">
                  
                  <table align="center" width="700" bgcolor="skyblue">
                      <tr>
                           
                          <th>Customer Serial</th>
                           <th>Customer Name</th>
                           <th>Customer Image</th> 
                          <th>Customer Email</th>
                           <th>Customer Country</th>
                      </tr>
                      
                      <?php
                      $i=0;
         $query_customer = "select * from customer";
                $query_customer_run = mysqli_query($connection,$query_customer);
                    while($query_customer_rows = mysqli_fetch_assoc($query_customer_run)){
                         $customer_id = $query_customer_rows['customer_id'];
                         $customer_name = $query_customer_rows['customer_name'];
                         $customer_image = $query_customer_rows['customer_image'];
                         $customer_email = $query_customer_rows['customer_email'];
                         $customer_country = $query_customer_rows['customer_country'];
                         $i++;
                      ?>
                      <tr>
                        
                          <td><?php echo $i;?></td>
                          <td colspan="1"><?php echo $customer_name;?></td>
                          <td><img src="images/<?php echo $customer_image;?>" width="60" height="60"></td>
                          <td><?php echo $customer_email."  ";?></td>
                          <td><?php echo $customer_country;?></td>
                          
                          
                         
                      </tr>
                      <?php  }  ?>
     </table>
</form>