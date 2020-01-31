<?php
 ?><!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	
		<?php 
      include("Master_Pages/Menu.php"); 
      $mobileErr="";
      $error=0;
      
      $valid=0;
       if(array_key_exists('signin', $_POST)) { 
        $mobile_no=$_POST["mobile_no"];
        $pass=$_POST["password"];
           if(!empty($_POST["mobile_no"])&&!empty($_POST["password"]))
           {
              if(!preg_match("/^[6-9][0-9]{9,9}$/", $_POST["mobile_no"]))
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
            <li> <a class="breadcrumb-link active" href="#">Login</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="account">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 mx-auto">
              <h1 class="title">Login</h1>
              <form method="POST">
                <label for="mobile_no">Mobile Number *</label>
                <input class="no-round-input" name="mobile_no" type="text">
                <span class="error"><?php if(isset($mobileErr)){
                    echo $mobileErr;
                }?></span>
                <label for="password">Password *</label>
                <input class="no-round-input" name="password" type="password">
                <div class="account-method">
                  <div class="account-save">
                    <input id="savepass" type="checkbox">
                    <label for="savepass">Save Password</label>
                  </div>
                  <div class="account-forgot"><a href="Forget_Password.php">Forget your Password</a></div>
                </div>
                <div class="account-function">
                  <input class="no-round-btn" type="submit" name="signin" value="Sign In"></input>
                  <br/><a class="create-account" href="register.php">Or create an account</a>
                </div>
              </form>
              <?php
                  //checking sign in button is clicked or not...
                  if(array_key_exists('signin', $_POST)) { 
                    include("Database_Connection/connect.php");
                    if($con)
                    {
                      if($valid==0&&$error==0)
                      {
                        //select database
                        mysqli_select_db($con,'mango');
                        //fetching eneterd data by user
                       
                        //query to check user is exsistng with enetered mobile number or not
                        $fetch_salt="select salt from tbl_users where mobile_no=?";
                        $stmt=mysqli_prepare($con,$fetch_salt);
                        mysqli_stmt_bind_param($stmt,"s",$mobile_no);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt,$num);
                        mysqli_stmt_fetch($stmt);
                        mysqli_stmt_close($stmt);
                        $salt=$num;
                        //echo $salt;
                        if(is_null($salt))
                        {
                            echo "<script>alert('User not found!');</script>";
                            
                        }
                        else
                         {
                            $pass=md5($pass.$salt);
                            $check="select count(*) as id from tbl_users where salt=? and password=?";
                            $stmt2=mysqli_prepare($con,$check);
                            mysqli_stmt_bind_param($stmt2,"ss",$salt,$pass);
                            mysqli_stmt_execute($stmt2);
                            mysqli_stmt_bind_result($stmt2,$num2);
                            mysqli_stmt_fetch($stmt2);
                             mysqli_stmt_close($stmt2);
                            if($num2===1)
                            {
                               $_SESSION["user"]=$mobile_no;
                               echo "<script>window.location.href='index.php';</script>";
                            }
                            else
                              echo "<script>alert('Mobile or password is wrong!');</script>";
                         }
                         mysqli_close($con);
                      }
                    }
                  }
                  
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