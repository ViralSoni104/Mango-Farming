<?php
session_start();
//checking mobile number is set in session ,if user have tried to register then it is set or else not, if user haven't eneetered details in registration page then he/she can't verify himself/herself to register
if(!isset($_SESSION["Admin"]))
    header("location: ../index.php");
include("../Database_Connection/connect.php");
$limit=10;
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$start=($page - 1) * $limit;

$result=mysqli_query($con,"select count(pid) as pid from tbl_research_paper");
$papers=mysqli_fetch_array($result);
$total=$papers['pid'];
$pages=ceil($total / $limit);
$Previous=$page - 1;
if($page<=1)
  $Previous=1;
$Next=$page - 1;
if($page>=$pages)
  $Next=$page;
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Reserach Paper</title>
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
    <style type="text/css">
         .list .ListForm table {
          border-collapse: collapse;
          border-spacing: 0;
          width: 100%;
          border: 1px solid #ddd;
        }

        .list .ListForm table th, td {
          text-align: left;
          padding: 8px;
        }
        .list table td  i{
            font-size:28px;
        }
        .list table td  button:hover{
            color: red;
            
        }
        <?php
                if((!empty($_POST["View_Paper"])||isset($_GET['page'])))
                {
                ?>
                    .row .card{display:none;}
                    table{display: ;}
                    .Add_Paper{display: block;}
                    .View_Paper{display: none;}
                    .blog-pagination{display: ;}
                <?php 
                }
                else
                {
                ?>
                    .row .card{display: block;}
                    table{display:none;}
                    .Add_Paper{display: none;}
                    .View_Paper{display: block;}
                    .blog-pagination{display: none;}
                <?php
                    }
                ?>
       
        .error{
            color: red;
        }
        
    </style>
</head>
<body class="animsition">
<div class="page-wrapper">
    <?php
        include("../Database_Connection/connect.php");
        $AbstractErr=$PdErr=$HighlightsErr=$AuthorErr=$AoaErr=$TechnologyErr="";
        $err=0;
        $valid=0;
         if(array_key_exists('upload', $_POST)) 
         { 
             if(empty($_POST["rp_yop"])||empty($_POST["rp_author"])||empty($_POST["rp_technology"])||empty($_POST["rp_aoa"])||empty($_POST["rp_abstract"])||empty($_POST["rp_title"])||empty($_POST["rp_pd"])||($_FILES['rp_pdf']['error'] == UPLOAD_ERR_NO_FILE)||($_FILES['rp_image']['error'] == UPLOAD_ERR_NO_FILE))
                {
                         echo "<script>alert('Please Enter All Details!');</script>";
                         $err=1;
                }
                else{
                        $err=0;
                    if(!preg_match("/^[1-9][0-9]{3,3}$/", $_POST["rp_yop"]))
                    {
                        $YopErr="Year Must be of numbers and 4 digits!";
                    }
                    else
                        $valid++;
                    
                    if(!preg_match("/^[A-Za-z, ]{1,}$/", $_POST["rp_technology"]))
                    {
                        $TechnologyErr="Invalid Charcters Used";
                    }
                    else
                        $valid++;
                    if(!preg_match("/^[A-Za-z, ]{1,}$/", $_POST["rp_author"]))
                    {
                        $AuthorErr="Invalid Charcters Used";
                    }
                    else
                        $valid++;
                     if(!preg_match("/^[A-Za-z, ]{1,}$/", $_POST["rp_aoa"]))
                    {
                        $AoaErr="Invalid Charcters Used";
                    }
                    else
                        $valid++;
                }
        }
        include("../Master_Pages/Menu_Admin.php");
    ?>

        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       

                        <div style="overflow-x:auto;" class="list">
                            <form action="#" method="POST" class="ListForm">
                                 <button class="btn btn-info Add_Paper" name="Add_Paper" value="Add_Paper"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add New Research Paper</button>
                                  <button class="btn btn-info View_Paper" name="View_Paper" value="View_Paper"><i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp;View All Research Paper</button><br/><br/>
                                 <table class="table table-bordered table-striped">
                                 <tr class="thead-dark"><th>Title</th><th>Author</th><th>Uploaded Date</th><th colspan="" ="2">Remove Post</th></tr><tbody>
                        <?php 
                            $query="select * from tbl_research_paper order by pid desc limit $start,$limit";
                            $res=mysqli_query($con,$query);
                            $num=mysqli_num_rows($res);
                            if($num==0)
                            {
                                ?>
                            <tr><td colspan="5"><center><h4>Research Papers Not Found</h4></center></td></tr>
                            <?php
                            }
                            else{
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    ?>

                                    <tr class=""><td><?php echo $row["title"];?></td><td><?php echo $row["author"]; ?></td><td><?php echo $row["PostedDate"];?></td>
                                        <td colspan="2">
                                           <button type="submit" name="Delete" value="<?php echo $row['pid'].",".$row['pdf_loc'].",".$row['image_loc']?>" onclick="return confirm('Are you sure you want to delete this post?')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i></button></td></tr>

                                    <?php
                                }
                            }
                        ?>
                            </tbody>
                               
                            </table>

                            <div class="blog-pagination">
                               <nav aria-label="Page navigation example">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="Research_Paper.php?page=<?php echo $Previous?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                 <?php  for($k=($page-2);$k<=($page+2);$k++):?>
                                  <?php if($k>=1&&$k<=$pages){?>
                                                 
                                <li class="page-item"><a class="page-link" href="Research_Paper.php?page=<?php echo $k?>"><?php echo $k;?></a></li>
                                
                                    <?php } ?>
                                     
                                     <?php endfor?>
                                <li class="page-item">
                                  <a class="page-link" href="Research_Paper.php?page=<?php echo $Next?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                        </form>
                        </div>
                        <?php
                            //Remove Post With Uploded Files
                            if(!empty($_POST["Delete"]))
                            {
                                $row=$_POST["Delete"];
                                $Details=explode(",", $row);
                                $flag=0;
                                if(file_exists($Details[1])&&file_exists($Details[2]))
                                {
                                    if(!unlink($Details[1])||!unlink($Details[2]))
                                    {
                                        echo "<script>alert('Unable to remove files please try again later.');</script>";
                                        $flag=1;
                                    }
                                }
                                if($flag==0)
                                {
                                    $query="delete from tbl_research_paper where pid=?";
                                    $stmt=mysqli_prepare($con,$query);
                                    mysqli_stmt_bind_param($stmt,"s",$Details[0]);
                                    //run query
                                    mysqli_stmt_execute($stmt);
                                    mysqli_stmt_close($stmt);
                                    echo "<script>window.location.href='Research_Paper.php';</script>";
                                }
                            }
                            
                        ?>
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card">
                                  
                                   
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><kbd>Add Research Paper</kbd></h3>
                                        </div>
                                        <hr>
                                        
                                        <form action="#" method="post"  enctype="multipart/form-data">
                                            <div class="row container">
                                                <span style="color: red;"><b>Note : </b><br/>Image Size Must Be of 837*820 Pixels.<br/>To Resize Image Online Go to - https://resizeimage.net/<br/>Research Paper Must Be In PDF Format.<br/>Files Must Be less than 1mb.</span>
                                            </div><br/>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Upload Research Paper</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="rp_pdf" name="rp_pdf" class="form-control-file" >
                                                </div>
                                                 <span class="error"></span>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="rp_image" name="rp_image" class="form-control-file" >
                                                </div>
                                                 <span class="error"></span>
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Title</label>
                                                <input id="cc-pament" name="rp_title" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                 <span class="error"><?php
                                                 if(isset($TitleErr))
                                                 {
                                                    echo $TitleErr;
                                                 }?></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Abstract</label>
                                                        <textarea id="cc-exp" name="rp_abstract" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="" 
                                                            autocomplete="cc-exp" rows="4" ></textarea>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                     <span class="error"><?php echo $AbstractErr;?></span>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Highlights</label>
                                                        <textarea id="cc-exp" name="rp_highlights" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="" 
                                                            autocomplete="cc-exp" rows="4" ></textarea>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                         <span class="error"><?php echo $HighlightsErr;?></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Area of Agriculture</label>
                                                <input id="cc-pament" name="rp_aoa" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                 <span class="error"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Technology</label>
                                                <input id="cc-name" name="rp_technology" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" >
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                 <span class="error"><?php if(isset($TitleErr))
                                                 {
                                                    echo $TechnologyErr;
                                                 }?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Author</label>
                                                <input id="cc-number" name="rp_author" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" />
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                 <span class="error"><?php if(isset($TitleErr))
                                                 {
                                                    echo $AuthorErr;
                                                 }?></span>
                                            </div>
                                              <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Publication Details</label>
                                                <input id="cc-number" name="rp_pd" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" />
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                 <span class="error"><?php echo $PdErr;?></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Year Of Publication</label>
                                                        <input id="cc-exp" name="rp_yop" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="YY"
                                                            autocomplete="cc-exp"  >
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                     <span class="error"><?php if(isset($YopErr))
                                                        {
                                                            echo $YopErr;
                                                        }
                                                        ?></span>
                                                </div>

                                            </div>
                                             <div class="row form-group">
                                                    <div class="col">
                                                        <label for="select" class=" form-control-label">Mango Category</label>
                                                        <br/>
                                                        <select name="mango_category" id="mango_category" class="form-control">
                                                            <option value="All">All</option>
                                                            <option value="Aafus">Aafus</option>
                                                            <option value="Badami">Badami</option>
                                                            <option value="Dahseri">Dahseri</option>
                                                            <option value="Langdo">Langdo</option>
                                                            <option value="Kesar">Kesar</option>
                                                            <option value="Payri">Payri</option>
                                                            <option value="Rajapuri">Rajapuri</option>
                                                            <option value="Totapuri">Totapuri</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div>
                                                <input id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="Upload" name="upload">
                                            </div>
                                        </form>
                                          <?php
                                              //checking sign in button is clicked or not...
                                              if(array_key_exists('upload', $_POST)) 
                                              { 
                                                
                                                if($con)
                                                {
                                                    if($err==0&&$valid==4)
                                                    {
                                                        $rp_yop=$_POST["rp_yop"];
                                                        $rp_author=$_POST["rp_author"];
                                                        $rp_technology=$_POST["rp_technology"];
                                                        $rp_aoa=$_POST["rp_aoa"];
                                                        $rp_highlights=$_POST["rp_highlights"];
                                                        $rp_abstract=$_POST["rp_abstract"];
                                                        $rp_title=$_POST["rp_title"];
                                                        $rp_pd=$_POST["rp_pd"];
                                                        $mango_category=$_POST["mango_category"];
                                                        $targetdir1 = '../assets/research_papers/'; 
                                                        $targetdir2 = '../assets/images/blog/'; 

                                                         // name of the directory where the files should be stored
                                                        $targetfile1 = $targetdir1.$_FILES['rp_pdf']['name'];
                                                         $path = pathinfo($targetfile1);
                                                         $filename = $path['filename'];
                                                         $ext = $path['extension'];
                                                         $temp_name = $_FILES['rp_pdf']['tmp_name'];
                                                         $path_filename_ext = $targetdir1.$filename.".".$ext;  
                                                         $targetfile2 = $targetdir2.$_FILES['rp_image']['name'];
                                                         $path2 = pathinfo($targetfile2);
                                                         $filename2 = $path2['filename'];
                                                         $ext2 = $path2['extension'];
                                                         $temp_name2 = $_FILES['rp_image']['tmp_name'];
                                                         list($width, $height) =getimagesize($temp_name2);
                                                         $path_filename_ext2 = $targetdir2.$filename2.".".$ext2;
                                                         $allowed = array('png', 'jpg');
                                                         if($ext=="pdf"&&in_array($ext2, $allowed))
                                                         {
                                                            if($width=="837"&&$height=="820")
                                                            {
                                                                if (file_exists($path_filename_ext)||file_exists($path_filename_ext2)) {
                                                                    echo "<script>alert('Sorry, file already exists');</script>";
                                                                }
                                                                else{
                                                                    $date=date("Y/m/d");
                                                                    if(move_uploaded_file($temp_name, $path_filename_ext)&&move_uploaded_file($temp_name2, $path_filename_ext2))
                                                                    {
                                                                        mysqli_select_db($con,'mango');
                                                                        $query="insert into tbl_research_paper(title,pdf_loc,image_loc,author,publication_details,abstract,highlights,aoa,technology,pyear,mango_category,PostedDate) values(?,?,?,?,?,?,?,?,?,?,?,?)";
                                                                        $stmt=mysqli_prepare($con,$query);
                                                                        mysqli_stmt_bind_param($stmt,"ssssssssssss",$rp_title,$path_filename_ext,$path_filename_ext2,$rp_author,$rp_pd,$rp_abstract,$rp_highlights,$rp_aoa,$rp_technology,$rp_yop,$mango_category,$date);
                                                                        mysqli_stmt_execute($stmt);
                                                                        mysqli_stmt_close($stmt);
                                                                        echo "<script>alert('Uploaded!');</script>";
                                                                    }
                                                                    else
                                                                        echo "<script>alert('Files Not Upploaded!');</script>";
                                                                }
                                                            }
                                                             else
                                                                 echo "<script>alert('Image Must Be In 837*820 Pixels.');</script>";
                                                         }
                                                         else
                                                              echo "<script>alert('Please Upload Files In Proper Format.');</script>";
                                                    }
                                                    
                                                }
                                                else
                                                {
                                                    echo "<script>alert('Something wrong!!, please try again after sometime..');</script>";
                                                }
                                            
                                            }
                                            
                                           ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                         
                            include("../Master_Pages/Footer_Admin.html");
                        ?>
                    </div>
                </div>
            </div>
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