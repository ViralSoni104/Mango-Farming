<?php
//checking mobile number is set in session ,if user have tried to register then it is set or else not, if user haven't eneetered details in registration page then he/she can't verify himself/herself to register
if(!isset($_SESSION["mobile_no"]))
	header("location: index.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Verify Yourself</title>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="MARTECH | Deer Creative Theme">
    <link rel="stylesheet" href="assets/css/style.css">
     <?php include("Master_Pages/Head_Links.php");?>
</head>
<body>
	<div id="main">
		<?php include("Master_Pages/Menu.php"); ?>
			<div class="ogami-breadcrumb">
	 <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link active" href="#">Verify</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="account">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 mx-auto">
              <h1 class="title">Verify</h1>
              <form method="POST">
               	 <label for="otp">Enter Otp *</label>
                <input class="no-round-input" name="otp" type="text" required>
                <div class="account-function">
                  <input class="no-round-btn" type="submit" name="verify" value="Register"></input>
                </div>
            </form>
            <?php

            		//checking if registered button is clicked or not..
            		if(array_key_exists('verify', $_POST)) { 
                  if(!empty($_POST["otp"]))
			               insert();
                  else{
                    echo "<script>alert('Please Enter Otp!!');</script>";
                  } 
			        } 
			        //function to generate random string for salt
			        function generateRandomString($length=32) {
					    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
					    $randomString = '';
					    for ($i = 0; $i < $length; $i++) {
					        $randomString .= $characters[rand(0, strlen($characters) - 1)];
					    }
					    return $randomString;
					}
					//function to insert data of user into tbl_users
                	function insert(){
                		//verifying otp eneterde with sended otp
                		if($_POST["otp"]===$_SESSION["otp"])
                		{
                				//salt
                				$salt=generateRandomString();
                				//encrypt password with md5 + salt
                				$pass=md5($_SESSION["password"].$salt);
                				$name=$_SESSION["user-name"];
                				$aadhar_card=$_SESSION["aadhar_card"];
                				$mobile_no=$_SESSION["mobile_no"];
                				$role='F';
                				//connect server
                				include("Database_Connection/connect.php");
                				if($con)
                				{
                          mysqli_select_db($con,'mango');
                					$query="insert into tbl_users(name,aadhar_card,mobile_no,role,password,salt) values(?,?,?,?,?,?)";
                          $stmt=mysqli_prepare($con,$query);
                          mysqli_stmt_bind_param($stmt,"ssssss",$name,$aadhar_card,$mobile_no,$role,$pass,$salt);

                					//run query
                					mysqli_stmt_execute($stmt);
                           mysqli_stmt_close($stmt);
                					//set session for login
                					$_SESSION["user"]=$mobile_no;
									        echo "<script>window.location.href='index.php';</script>";
                				}
                				else
                				{
                					//database connection is not fullfil then this msg will be displayed...
                					echo "<script>alert('Something wrong!!, please try again after sometime..');</script>";
                				}
                				
                		}
                		else
                		{
                			//if otp not matched then this msg will be displayed..
                			echo "<script>alert('Entered OTP Is Wrong!');</script>";
                		}
                	}
                  mysqli_close($con);
               ?>
             </div>
          </div>
        </div>
      </div>
      <?php include("Master_Pages/Footer.php"); ?>
	</div>
	 <?php include("Master_Pages/Scripts.php");?>
</body>
</html>