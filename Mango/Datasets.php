<?php
include("Database_Connection/connect.php");
$limit=8;
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$start=($page - 1) * $limit;

$result=mysqli_query($con,"select count(Did) as Did from tbl_datasets");
$papers=mysqli_fetch_array($result);
$total=$papers['Did'];
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
	<title>Home</title>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="MARTECH | Deer Creative Theme">
    <?php include("Master_Pages/Head_Links.php");?>
    <style>.blog-layout .container .row .blog-grid .row .col-md-6 .blog-block .blog-text .blog-tag a {text-decoration: none;color:white;}
            .blog-layout .container .row .blog-grid .row .col-md-6 .blog-block .blog-text .blog-tag a:hover {text-decoration: none;color:black;}
            .blog-layout .container .row .blog-grid .row .col-md-6 .blog-block .blog-text{word-wrap: break-word;}
            .blog-layout .container .row .blog-grid .row .col-md-6 .blog-block .blog-img a img{width:105%;}
    </style>
</head>
<body>
    <div id="main">
        <?php include("Master_Pages/Menu.php"); ?>



        <div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link active" href="#">Datasets</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="blog-layout">
        <div class="container">
          <div class="row">
            <div class="col-12 col-xl-9">
              <div class="blog-grid">
                <div id="show-filter-sidebar">
                  <h5> <i class="fas fa-bars"></i>Show sidebar</h5>
                </div>
                <div class="row">

              <?php if($con)
                {
                include("Database_Connection/connect.php");
                $query="select * from tbl_datasets order by Did desc limit $start,$limit";
                $res=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($res)){

              ?>
                  <div class="col-md-6">
                    <div class="blog-block"><?php if(!empty($row["Dataset_img_loc"])){?>
                      <div class="blog-img">
                        <div class="blog-title"><b><?php echo $row['title'];?></b></div><a href="blog_detail_sidebar.html"><img src="<?php echo ltrim($row["Dataset_img_loc"],'/././')?>" alt="blog image"></a></div><?php } ?>
                      <div class="blog-text">
                        
                            <?php if(!empty($row["Dataset_Description"])){?>
                            <br/><h6 class=""><?php echo $row["Dataset_Description"];?></h6><?php 
                        } ?><h5 class="blog-tag"> <?php
                          if(!isset($_SESSION["user"])){?>
                        <a href="#" data-toggle="modal" data-target="#nodownload">DOWNLOAD LINK</a><?php
                    }else{?>
                        <a href="<?php echo $row['Download_Link']?>">DOWNLOAD LINK</a><?php } ?></h5>
                      </div>
                      <hr/>
                    </div>
                  </div>
                  
                 <?php } } ?>
                </div>
              </div>
              <div class="modal fade" id="nodownload" tabindex="-1" role="dialog" aria-labelledby="nodownload" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>To download Datasets you must have to login into your account...</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
             <div class="blog-pagination">
                <ul>
                  <li>
                    <a class="no-round-btn smooth" style="padding-top:8px;" href="Datasets.php?page=<?php echo $Previous?>"><p class="text-center"> <i class="arrow_carrot-2left"></i></p></a>
                  </li>

                  <?php  for($k=($page-2);$k<=($page+2);$k++):?>
                  <li>
                    <?php if($k>=1&&$k<=$pages){?>
                      <?php  if($k==$page) { ?>
                      <a class="no-round-btn smooth active" style="padding-top:10px;" href="Datasets.php?page=<?php echo $k?>"><p class="text-center"><?php echo $k;?></p></a>
                      <?php }else {?>
                      <a class="no-round-btn smooth" style="padding-top:10px;" href="Datsets.php?page=<?php echo $k?>"><p class="text-center"><?php echo $k;?></p></a>
                      <?php } ?>
                    <?php } ?>
                  </li>
                  <?php endfor?>
                  <li>
                    <a class="no-round-btn smooth" style="padding-top:8px;" href="Datsets.php?page=<?php echo $Next?>"> <p class="text-center"> <i class="text-center arrow_carrot-2right"></i></p></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="blog-sidebar">
                <button class="no-round-btn" id="filter-sidebar--closebtn">Close sidebar</button>
                <div class="blog-sidebar_search">
                  <div class="search_block">
                    <form action="" method="get">
                      <input class="no-round-input" type="text" placeholder="Search...">
                    </form>
                  </div>
                </div>
                <div class="blog-sidebar_categories">
                  <div class="categories_top mini-tab-title underline">
                    <h2 class="title">Categories</h2>
                  </div>
                  <div class="categories_bottom">
                    <ul>
                      <li> <a class="category-link" href="shop_grid+list_3col.html">Image</a></li>
                      <li> <a class="category-link" href="shop_grid+list_3col.html">Nutrition Meal</a></li>
                      <li> <a class="category-link" href="shop_grid+list_3col.html">Organic Planting</a></li>
                      <li> <a class="category-link" href="shop_grid+list_3col.html">Recipes</a></li>
                    </ul>
                  </div>
                </div>
                <div class="blog-sidebar_recent-post">
                  <div class="recent-post_top mini-tab-title underline">
                    <h2 class="title">Recent post</h2>
                  </div>
                  <div class="recent-post_bottom">
                     <?php if($con)
                      {
                      include("Database_Connection/connect.php");
                      $query="select * from tbl_datasets order by Did desc limit 3";
                      $res=mysqli_query($con,$query);
                      while($row=mysqli_fetch_assoc($res)){

                    ?>
                    <div class="mini-post_block">
                      <div class="mini-post_img"><a href="blog_detail_sidebar.html"><img src="<?php echo ltrim($row["Dataset_img_loc"],'/././')?>" alt="blog image"></a></div>
                      <div class="mini-post_text"><a href="blog_detail_sidebar.html"><?php echo $row['title'];?></a>
                        <h5>PostedDate</h5>
                      </div>
                    </div>
                   
                    <?php
                  }}?>
                  </div>
                </div>
                <div class="blog-sidebar_tags">
                  <div class="tags_top mini-tab-title underline">
                    <h2 class="title">Search By Tags</h2>
                  </div>
                  <div class="tags_bottom"><a class="tag-btn" href="shop_grid+list_3col.html">organic</a><a class="tag-btn" href="shop_grid+list_3col.html">vegatable</a><a class="tag-btn" href="shop_grid+list_3col.html">fruits</a><a class="tag-btn" href="shop_grid+list_3col.html">fresh meat</a><a class="tag-btn" href="shop_grid+list_3col.html">fastfood</a><a class="tag-btn" href="shop_grid+list_3col.html">natural</a></div>
                </div>
              </div>
              <div class="filter-sidebar--background" style="display: none"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End blog layout-->
        <?php 
          include("Master_Pages/Footer.php"); ?>
   </div>
     <?php include("Master_Pages/Scripts.php");?>
    </script>
</body>
</html>