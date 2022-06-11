<?php
include('top.php');
include('../functions.inc.php');
$Q = "SELECT * FROM users order by id asc";
$res = mysqli_query($con,$Q);

if(isset($_GET['type']) && $_GET['type']!= " ")
{
   $type=get_safe_value($con, $_GET['type']);

if($type == 'delete')
   {
      $idz = get_safe_value($con , $_GET['idz']);
      $DELETE = "DELETE FROM users where id = '$idz'  ";
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
                           <h4 class="box-title">Users</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>                                      
                                       <th>Name</th>                                      
                                       <th>Email</th>                                    
                                       <th>Number</th>
                                       <th>aded on</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                                       
                                 <?php
                                 $i=1;
                                 while($row=mysqli_fetch_assoc($res)){ ?>
                                    <tr>
                                    <td class="serial"> <?php echo $i ?></td>           
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['User_name']?></td>
                                    <td><?php echo $row['Email']?></td>
                                    <td><?php echo $row['Mobile']?></td>   
                                    <td><?php echo $row['aded on']?></td>
                                    <td><?php  echo "<a href='?type=delete&idz=".$row['id']."'><span class='badge badge-pending'>Delete</span> </a>"; ?> </td>                                                      
                                                                                        
                                 </tr>
                                   <?php  $i++;} ?>    
                                 </tbody>          
                                                                                                                                                  
                                    </td>               

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


