<?php
session_start();


?>
<!doctype html>
<html>
    <style>
        .thanku-page{
            border: 1px solid black;
            width: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .heading-1{
            color: rgb(88, 142, 241);

        }
        .u-list{
            list-style: none;
            margin-right: 5%;
            
            
        }
        .u-list li{
            font-weight: 700;
        }
    </style>
  <body>
    
      <div class="thanku-page">
          <h1 class="heading-1">THANK YOU</h1>
          <h4 class="heading-4">To complete your registration please submit----</h4>
          <h2 class="heading-2">Bank account</h2>
          <ul class="u-list">
            <li><h5>Bank Name:Meezan Bank</h5></li>
            <li><h5>Account title: Saif Ali</h5></li>
            <li><h5>Account no: 08820104424635</h5></li>
          </ul>
      </div>
      <div class="form__group">
          <a href="index.php"><button class="btn btn--green">Back to main &rarr; </button></a>
                                   
     </div>
                    
  </body>
</html>