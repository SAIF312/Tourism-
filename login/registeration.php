<?php 
session_start() ;
include('../connection.inc.php');




if($_SERVER['REQUEST_METHOD']== "POST")
{

    $name = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    if(!empty($name)  && !empty($pass) && !empty($email)){
        $command = "select * from admin_users where name = '$name'";
        $result = mysqli_query($con , $command);
        $num = mysqli_num_rows($result);
        
        
        
        if($num >=1)
        {
            echo("user already exist");
        }
        else{
            $reg = "insert into admin_users(name , email , password) values('$name ' , '$email' , '$pass' )";
            mysqli_query($con , $reg);
            echo("Registeration successful");
        }
    }
    else{
        echo(" fields cannot be empty");
    }
}



?>