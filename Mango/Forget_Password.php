<?php
?><!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="MARTECH | Deer Creative Theme">
    <?php include("Master_Pages/Head_Links.php");?>
     <style type="text/css">
        .error{
            color: red;
        }
        .Forget{display: none;
         }
    </style>
</head>
<body>
    <?php 
      include("Master_Pages/Menu.php");
      $mobileErr="";
          $error=0;
          $sms=0;
          $valid=0;
           if(array_key_exists('forget', $_POST)) { 
              $mobile_no=$_POST["mobile_no"];
             
               if(!empty($_POST["mobile_no"]))
               {
                  if(!preg_match("/^[6-9]{1,1}[0-9]{9,9}$/", $_POST["mobile_no"]))
                  {
                      $mobileErr="Mobile Number Must Be Numeric!";
                      $valid++;
                  }
               }
               else{
                echo "<script>alert('Please Enter All Details!!');</script>";
                $error=1;
              }
            } 
      ?>
       <div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index.php"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link active" href="#">Forget Password</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="account">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 mx-auto">
              <h1 class="title">Forget Password</h1>
              <form method="POST"  action="#">
                <div class="Check">
                    <label for="mobile_no">Mobile Number *</label>
                    <input class="no-round-input" name="mobile_no" type="text">
                    <span class="error"><?php if(isset($mobileErr)){
                        echo $mobileErr;
                    }?></span>
                    
                    <div class="account-function">
                      <input class="no-round-btn" type="submit" name="forget" value="Find Account"></input>
                      
                    </div>
                </div>
            </form>

          <form method="POST" action="#">
            <div class="Forget">
            <label for="OTP">Enter OTP</label>
            <input class="no-round-input" name="OTP" type="number">
            <label for="pass">New Password</label>
            <input class="no-round-input" name="pass" type="password">
            <label for="pas">Re-Enter New Password</label>
            <input class="no-round-input" name="re-pass" type="password">
            <span class="error"><?php if(isset($passErr)){
                echo $passErr;
            }?></span>
            
            <div class="account-function">
              <input class="no-round-btn" type="submit" name="forgetpass" value="Forget Password"></input>
              
            </div>
            </div>
          </form>
              <?php
             include("Database_Connection/connect.php");
             if($con)
             {
                  mysqli_select_db($con,'mango');

                  if(array_key_exists('forget', $_POST)) { 
                            //connect server
                        include("SMS.php");
                        function sendsms(){
                            
                            //$otp=rand(100000,9999999);
                            $otp="1234";
                            Send_SMS($_POST["mobile_no"],$otp,"Otp to Forget Password is ");
                        }
                       
                        if($con)
                        {
                            $mobile_no=$_POST["mobile_no"];
                            
                            if($valid==0&&$error==0)
                            {
                                $check_exsisting_user="select count(*) as id from tbl_users where mobile_no=?";
                                        
                                $stmt=mysqli_prepare($con,$check_exsisting_user);
                                mysqli_stmt_bind_param($stmt,"s",$mobile_no);
                                mysqli_stmt_execute($stmt);
                                mysqli_stmt_bind_result($stmt,$num);
                                mysqli_stmt_fetch($stmt);
                                mysqli_stmt_close($stmt);
                                //if register then don't register..
                                if ($num==0)
                                {
                                    echo "<script>alert('Account Not Found!');</script>";
                                    echo "<script>window.location.href='Forget.php';</script>";
                                }
                                else{
                                    //else send sms to verify user
                                    sendsms();
                                    //$_SESSION["mobile_no"]=$mobile_no;
                                    echo "<style>.Check{display:none;}.Forget{display:block;}</style>";
                                }
                            }
                            mysqli_close($con);
                        }
                        
                    }
                    function generateRandomString($length=32) {
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, strlen($characters) - 1)];
                        }
                        return $randomString;
                    }
                    if(isset($_POST["forgetpass"])){
                        if($_POST["OTP"]==$_SESSION["otp"])
                        {
                            if($_POST["pass"]==$_POST["re-pass"])
                            {
                                $salt=generateRandomString();
                                //encrypt password with md5 + salt
                                $pass=md5($_POST["pass"].$salt);
                                $update_password="update tbl_users set password=?,salt=? where mobile_no=?";
                                        
                                $stmt=mysqli_prepare($con,$update_password);
                                mysqli_stmt_bind_param($stmt,"sss",$pass,$salt,$mobile_no);
                                mysqli_stmt_execute($stmt);
                                mysqli_stmt_bind_result($stmt,$num);
                                mysqli_stmt_fetch($stmt);
                                mysqli_stmt_close($stmt);
                                echo "<script>alert('Password Changed Succsessfully');</script>";
                                echo "<script>window.location.href='Login.php';</script>";

                            }
                            else{
                                echo "<script>alert('Password & Re-Entered Password Not Macthed!');</script>";
                            }
                        }
                        else{
                            echo "<script>alert('Wrong OTP Entered!!');</script>";
                        }
                       
                    } 
                   
                } mysqli_close($con);
              ?>
               </div>
          </div>
        </div>
      </div>
      <!-- End account-->
     
        <?php include("Master_Pages/Footer.php"); ?>
     <?php include("Master_Pages/Scripts.php");?>
</body>
</html>