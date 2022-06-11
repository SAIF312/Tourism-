<?php
include('top.php');
include('../functions.inc.php');
$Q = "SELECT * FROM users order by cnic asc";
$res = mysqli_query($con,$Q);

if(isset($_GET['type']) && $_GET['type']!= " ")
{
   $type=get_safe_value($con, $_GET['type']);

if($type == 'delete')
   {
      $cnic = get_safe_value($con , $_GET['cnic']);
      $DELETE = "DELETE FROM users where cnic = '$cnic'  ";
      mysqli_query($con , $DELETE);
   }


}
?>



         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Users </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>name</th>
                                       <th>email</th>                                      
                                       <th>cnic</th>
                                       <th>phone</th>
                                       <th>Trip</th>
                                    </tr>
                                 </thead>
                                 <tbody>

                                 <?php
                                 $i=1;
                                 while($row=mysqli_fetch_assoc($res)){ ?>
                                    <tr>
                                    <td class="serial"> <?php echo $i ?></td>           
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['cnic']?></td>
                                    <td><?php echo $row['phone']?></td>
                                    <td><?php echo $row['trip']?></td>
                                    
                                    <?php 
                                    ?>
                                    <td><?php   

                                   
                                    echo "<a href='?type=delete&cnic=".$row['cnic']."'><span class='badge badge-pending'>Delete</span> </a>";
                                  
                                              
                                    
                                    ?></td>                     
                                 </tr>
                                   <?php  $i++;} ?>                                                       
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
         <div class="clearfix"></div>
        <?php 
        include('footer.php');
        ?>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>