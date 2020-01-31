<?php
?><!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="MARTECH | Deer Creative Theme">
     <?php include("Master_Pages/Head_Links.php");?>
    <style type="text/css">
        .error{
            color: red;
        }
    </style>
</head>
<body>
	<div id="main">
		<?php include("Master_Pages/Menu.php"); 
          $mobileErr=$aadhar_cardErr=$unameErr="";
          $error=0;
          
          $valid=0;
           if(array_key_exists('sendotp', $_POST)) { 
              $mobile_no=$_POST["mobile_no"];
              $pass=$_POST["password"];
              $aadhar_card=$_POST["aadhar_card"];
               if(!empty($_POST["mobile_no"])&&!empty($_POST["aadhar_card"])&&!empty($_POST["user-name"])&&!empty($_POST["password"]))
               {
                  if(!preg_match("/^[6-9]{1,1}[0-9]{9,9}$/", $_POST["mobile_no"]))
                  {
                      $mobileErr="Mobile Number Must Be Numeric!";
                      $valid++;
                  }
                  if(!preg_match("/^[A-Za-z ]{1,}$/", $_POST["user-name"]))
                  {
                      $unameErr="Name Must Be In Alphabets!";
                      $valid++;
                  }
                   if(!preg_match("/^[0-9]{12,12}$/", $_POST["aadhar_card"]))
                  {
                      $aadhar_cardErr="Aadhar Card Must Be of 12 digit";
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
            <li> <a class="breadcrumb-link active" href="#">Register</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="account">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 mx-auto">
              <h1 class="title">Register</h1>
              <form method="POST">
               	 <label for="user-name">Name *</label>
                <input class="no-round-input" name="user-name" type="text" >
                <span class="error"><?php if(isset($unameErr)){
                    echo $unameErr;
                }?></span>
                <label for="mobile_no">Mobile number *</label>
                <input class="no-round-input" name="mobile_no" type="text" >
                <span class="error"><?php if(isset($mobileErr)){
                    echo $mobileErr;
                }?></span>
                 <label for="aadhar_card">Aadhar card number *</label>
                <input class="no-round-input" name="aadhar_card" type="text">
                <span class="error"><?php if(isset($aadhar_cardErr)){
                    echo $aadhar_cardErr;
                }?></span>
                 <label for="password">Password *</label>
	             <input class="no-round-input" name="password" type="password">
                <div class="account-function">
                  <input class="no-round-btn" type="submit" name="sendotp" value="Send OTP"></input>
                </div>
            </form>
                <?php
                	
                	if(array_key_exists('sendotp', $_POST)) { 
                		//connect server
                		include("Database_Connection/connect.php");
            				if($con)
            				{
                       $mobile_no=$_POST["mobile_no"];
                       $pass=$_POST["password"];
                        mysqli_select_db($con,'mango');
                        if($valid==0&&$error==0)
                        {
  				                //query to check user is exsistng with enetered mobile number or aadhar number
        			            $check_exsisting_user="select count(*) as id from tbl_users where mobile_no=? or aadhar_card=?";
            						
                          $stmt=mysqli_prepare($con,$check_exsisting_user);
                          mysqli_stmt_bind_param($stmt,"ss",$mobile_no,$aadhar_card);
                          mysqli_stmt_execute($stmt);
                          mysqli_stmt_bind_result($stmt,$num);
                          mysqli_stmt_fetch($stmt);
                           mysqli_stmt_close($stmt);
            							//if register then don't register..
            							if ($num>0)
            							{
            								echo "<script>alert('Given Mobile Number or Aadhar Number Is Already Registered');</script>";
            								echo "<script>window.location.href='register.php';</script>";
            							}
            							else{
            								//else send sms to verify user
            			            		sendsms();
                            }
          			         } 
        			       }
        			   } 
                	function sendsms(){
                		//adding entered values to session
        						$_SESSION["mobile_no"]=$_POST["mobile_no"];
        						$_SESSION["aadhar_card"]=$_POST["aadhar_card"];
        						$_SESSION["password"]=$_POST["password"];
        						$_SESSION["user-name"]=$_POST["user-name"];
        					  include("SMS.php");
                    //$otp=rand(100000,9999999);
                    $otp="1234";
                    Send_SMS($_POST["mobile_no"],$otp,"Otp to Verify Account is ");
                   	echo '<script>window.location.href="verify.php";</script>';
                	}
                  mysqli_close($con);
                ?>
                
            </div>
          </div>
        </div>
      </div>
      <!-- End account-->
      
		<?php include("Master_Pages/Footer.php"); ?>
	</div>
	 <?php include("Master_Pages/Scripts.php");?>
</body>
</html>