<!DOCTYPE html>
<html>
<head>
	<title>Software And Tools</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="MARTECH | Deer Creative Theme">
	 <?php include("Master_Pages/Head_Links.php");?>
   
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	 <style>
	 	.blog-layout .container .row .col-12 .blog-grid  .blog-block  .blog-tag a {text-decoration: none;color:white;}
            .blog-layout .container .row .col-12 .blog-grid .blog-block  .blog-tag a:hover {text-decoration: none;color:black;}
	 </style>
</head>
<body>
	<div id="main">
		<?php include("Master_Pages/Menu.php"); ?>
		<div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link active" href="#">Software And Tools</a></li>
          </ul>
        </div>
      </div> 
      <div class="blog-layout">
        <div class="container">
       		<div class="blog-block">
                  <div class="row container">
					 <div class="blog-text">
                        <a class="blog-tag" href="http://rextools.westindia.cloudapp.azure.com/tools/Classification/Mango/Upload">Tool Link</a>
                        <br/><a class="blog-title" href="blog_detail_sidebar.html"><b>Mango classification and grading tool</b></a>
                        <p class="blog-describe">Description - online tool (upload mango image and check it's category and features based on color, shape and size)</p>
                    </div>
                  </div>
            </div>
             <hr/>
        </div>
     </div>   
               
		<?php  
          include("Master_Pages/Footer.php"); ?>
   </div>
	<?php include("Master_Pages/Scripts.php");?>
</body>
</html>