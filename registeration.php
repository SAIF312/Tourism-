<?php 
session_start() ;
include('connection.inc.php');




if($_SERVER['REQUEST_METHOD']== "POST")
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $Phone = $_POST['phone'];
    
    if(!empty($name) && !empty($email) && !empty($cnic) && !empty($Phone)){

        $command = "select * from users where cnic = '$cnic'";
        $result = mysqli_query($con , $command);
        $num = mysqli_num_rows($result);
        
        
        
        if($num >=1)
        {
            echo("user already exist please register on different cnic");
        }
        else{

        


            $reg = "insert into users(name, email , cnic , phone) values('$name' ,'$email' , '$cnic' , '$Phone')";
            mysqli_query($con , $reg);
            header('location:checkout/checkout.php');
        }
    }
    
    else{
        echo(" fields cannot be empty");
    }
}



?>