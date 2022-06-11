<?php 
session_start();
include('../connection.inc.php');
include('../functions.inc.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="login" id="login_click">
        <div class="login_box">
            <div class="login_signin">
                <div class="login_signin--heading--1">
                    <h3>Welcome Back!</h3>
                </div>
                <div class="login_signin--heading--2">
                    <h4>to get connected with us login with your personal information</h4>
                </div>
                <div class="btnmain">
                    <a href="#" class="btn btn_white">Sign in</a>
                </div>
            </div>
            <div class="caccount">
                <div class="caccount--heading">
                    <h3>Create Account</h3>
                </div>
                <form action="registeration.php" method="post" id="Signup_form">              
                    <div class="username">
                        <input type="text" id="username" name="username" placeholder="Username" required class="input">
                    </div>
                    <div class="email">
                        <input type="email" id="email" name="email" placeholder="Email" required class="input">
                    </div>
                   <div class="password">
                    <input type="password" id="password" name="password" placeholder="Choose Password" required class="input">
                   </div>
                   <div class="btnmain">           
                   <a class="btn btn_green" href="javascript:{}" onclick="document.getElementById('Signup_form').submit();">Sign up</a>     
                </div>
                </form>
                
            </div>
        </div>
    </section>
    <section class="signup" id="signup_click">
        <div class="signup_box">
            <div class="signup_signup">
                <div class="signup_signup--heading--1">
                    <h3>Create Account</h3>
                </div>
                <div class="signup_signup--heading--2">
                    <h4>to get connected with us Signup with your personal information</h4>
                </div>
                <div class="btnmain">
                    <a class="btn btn_white" id="btn_signup" href="javascript:{}" onclick="document.getElementById('my_form').submit">Sign up</a>
                </div>
            </div>
            <div class="Login2">
                <div class="Login2--heading">
                    <h3>Ready to buy</h3>
                </div>
                <form action="validation.php" method="POST" id="form2">
                    <div class="username">
                        <input type="text" id="username1" name="username1" placeholder="Username" required class="input">
                    </div>
                   <div class="password">
                    <input type="password" id="password1" name="password1" placeholder="Password" required class="input">
                   </div>
                   <div class="btnmain">
                   
                    <a class="btn btn_green" href="javascript:{}" onclick="document.getElementById('form2').submit(); return false;">Sign in</a>
                </div>
                <?php
                         
                ?>
                </form>
               
            </div>
        </div>
    </section>
    <script >

     
document.querySelector(".btn_white").addEventListener('click' , function(){
    document.querySelector("#login_click").style.opacity = 0;
    document.querySelector("#login_click").style.zindex = "0";
        document.querySelector("#signup_click").style.opacity = 1;
        document.querySelector("#signup_click").style.zIndex= "100";
})

document.querySelector("#btn_signup").addEventListener('click' , function(){
    document.querySelector("#login_click").style.opacity = 1;
    document.querySelector("#login_click").style.zIndex = "100";
        document.querySelector("#signup_click").style.opacity = 0;
        document.querySelector("#signup_click").style.zIndex = "0";
})
</script>
</body>
</html>