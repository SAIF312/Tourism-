<?php 
session_start() ;
include('connection.inc.php');

if($_SERVER['REQUEST_METHOD']== "POST")
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $Phone = $_POST['phone'];
    $trip = $_POST['Trip'];
    
    if(!empty($name) && !empty($email) && !empty($cnic) && !empty($Phone) && !empty($trip)){

        $command = "select * from users where cnic = '$cnic'";
        $result = mysqli_query($con , $command);
        $num = mysqli_num_rows($result);
        
        
        
        if($num >0)
        {
          echo 
          "<script>
          alert('user already exist please register on different cnic')
          </script>";
        }

        else{
            $reg = "insert into users(name, email , cnic , phone , trip) values('$name' ,'$email' , '$cnic' , '$Phone' , '$trip')";
            mysqli_query($con , $reg);   
            
            $mailto = "saifalich7@gmail.com";          
            $subject = "'$name' is registered for the trip check yourt Admin page";
            $subject2 = "You have successfully registered for the trip | OUTDOOR TRAVLERS";
            $message = "Dear".$name."/n/n" . "Thank you for registering in the trip for skardu and trusting OUTDOOR TRAVLERS We'll get back to you shortly";
            $header = "From".$email;
            $header2 = "From".$mailto;
            $message2 = "ask user for clearence";
            $result = mail($email , $subject , $message2 , $header); // mail to Admin
            $result2 = mail($mailto, $subject2, $message,$header2); // mail to user 
               
            if($result){
                echo "<script> 
                alert('you have sucessfully registered | you will recieve an email shortly')
                </script>";
            }
            else{
                echo "<script> 
                alert('you have not sucessfully registered | Try again')
                </script>";
            }

        }
    }
    
    else{

        echo'<script> alert(" fields cannot be empty") </script>';
    
    }



}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>Outdoors | Exciting tours for adventurous people</title>
    </head>
 <body>   
<section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="book.php" class="form" method = "POST">
                                <div class="u-margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                        Start booking now
                                    </h2>
                                </div>

                                <div class="form__group">
                                    <input type="text" name="name" class="form__input" placeholder="Full name" id="name" required>
                                    <label for="name"  class="form__label">Full name</label>
                                </div>

                                <div class="form__group">
                                    <input type="email" name="email" class="form__input" placeholder="Email address" id="email" required>
                                    <label for="email"  class="form__label">Email address</label>
                                </div>
                                <div class="form__group">
                                    <input type="number" name="cnic" class="form__input" placeholder="CNIC" id="cnic" required>
                                    <label for="cnic"  class="form__label">CNIC</label>
                                </div>

                                <div class="form__group">
                                    <input type="number" name="phone" class="form__input" placeholder="Mobile number" id="phone" required>
                                    <label for="phone"  class="form__label">Number</label>
                                </div>
                             


                                <div class="form__group u-margin-bottom-medium">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="small" name="Trip">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            umbrella waterfall
                                        </label>
                                    </div>

                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="large" name="Trip">
                                        <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Skardu
                                        </label>
                                    </div>

                                   

                                </div>

                                <div class="form__group">
                                    <button type="submit" class="btn btn--green">Next step &rarr; </button>
                                   
                                </div>
                    
                                
                            </form>
                        </div>
                    </div>
                </div>
            </section>

</body>
</html>