<?php
session_start();
//checking mobile number is set in session ,if user have tried to register then it is set or else not, if user haven't eneetered details in registration page then he/she can't verify himself/herself to register
if(!isset($_SESSION["Admin"]))
    header("location: ../index.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Social Links</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

   
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vassets/endor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
<div class="page-wrapper">
    <?php
        include("../Database_Connection/connect.php");
        include("../Master_Pages/Menu_Admin.php");
        if(array_key_exists('submit', $_POST)) 
        {
            $error=0;
            if(empty($_POST["youtube"])||empty($_POST["instagram"])||empty($_POST["linkedin"])||empty($_POST["pinterest"])||empty($_POST['contact'])||empty($_POST['email'])||empty($_POST['home']))
            {
                $error=1;
            }
        } 
        $yt=$it=$li=$pt=$home=$email=$contact="";
        $query="select * from social_links";
        $result=mysqli_query($con,$query);
        $countLinks=mysqli_num_rows($result);
        if($countLinks==1)
        {
            $row=mysqli_fetch_assoc($result);
            $yt=$row['yt'];
            $it=$row['insta'];
            $li=$row['linkedin'];
            $pt=$row['pintrest'];
            $home=$row['location'];
            $email=$row['email'];
            $contact=$row['contact'];
        }
    ?>
        <div class="page-container">
            <div class="card">
                <div class="card-header">Social Media Links</div>
                <div class="card-body card-block">
                    <form action="#" method="post" class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-youtube"></i>
                                </div>
                                <input type="text" id="youtube" name="youtube" placeholder="" class="form-control" value="<?php echo $yt?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-instagram"></i>
                                </div>
                                <input type="text" id="instagram" name="instagram" placeholder="" class="form-control" value="<?php echo $it?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-linkedin"></i>
                                </div>
                                <input type="text" id="linkedin" name="linkedin" placeholder="" class="form-control" value="<?php echo $li?>">
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pinterest-p"></i>
                                </div>
                                <input type="text" id="pinterest" name="pinterest" placeholder="" class="form-control" value="<?php echo $pt?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type="text" id="home" name="home" placeholder="" class="form-control" value="<?php echo $home?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <input type="text" id="email" name="email" placeholder="" class="form-control" value="<?php echo $email?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" id="contact" name="contact" placeholder="" class="form-control" value="<?php echo $contact?>">
                            </div>
                        </div>
                        <div class="form-actions form-group">
                            <input type="submit" class="btn btn-success btn-sm" name="submit" value="Update Links"/>
                        </div>
                    </form>
                </div>
            </div>

            <?php
                if(array_key_exists('submit', $_POST)) 
                { 
                    if($con)
                    {
                        if($error==0)
                        {
                            $youtube=$_POST["youtube"];
                            $linkedin=$_POST["linkedin"];
                            $instagram=$_POST["instagram"];
                            $location=$_POST['home'];
                            $mail=$_POST['email'];
                            $mobile=$_POST['contact'];
                            $pinterest=$_POST['pinterest'];
                            $query="update social_links set yt=?,insta=?,linkedin=?,pintrest=?,location=?,contact=?,email=?";
                            $stmt=mysqli_prepare($con,$query);
                            mysqli_stmt_bind_param($stmt,"sssssss",$youtube,$instagram,$linkedin,$pinterest,$location,$mobile,$mail);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_close($stmt);

                            echo "<script>alert('Links Updated!!!');</script>";
                            header('Location:Social_Links.php',true);
                        }
                        else
                            echo "<script>alert('Please Enter All Links!!');</script>";
                    }
                }
                include("../Master_Pages/Footer_Admin.html");
                mysqli_close($con);
            ?>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/js/main_admin.js"></script>
</body>
</html>