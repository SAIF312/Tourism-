<?php 
session_start() ;
include('../connection.inc.php');

$name = $_POST['username1'];
$pass = $_POST['password1'];



$command2 = "select * from admin_users where name = '$name' and password = '$pass' ";
$cmd="select * from admin_users where name = '$name' AND password = '$pass' ";

$result2 = mysqli_query($con, $cmd);

$num2 = mysqli_num_rows($result2);

if($num2<1){             
    echo("enter correct details");    
   }

   else{
    $_SESSION['ADMIN_LOGIN']='yes';
    $_SESSION['Admin_user']=$name;

    $user_data=mysqli_fetch_assoc($result2);
    if($user_data['Password']=== $pass){
        $_SESSION['User_name'] = $user_data;
        

    }
       header('location:../AdminTheme/index.php');
   }


?>