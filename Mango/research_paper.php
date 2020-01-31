<?php
include("Database_Connection/connect.php");
$limit=3;
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$start=($page - 1) * $limit;

$result=mysqli_query($con,"select count(pid) as pid from tbl_research_paper");
$papers=mysqli_fetch_array($result);
$total=$papers['pid'];
$pages=ceil($total / $limit);
if($page<=0)
  $page=1;
$Previous=$page - 1;
if($page<=1)
  $Previous=1;
$Next=$page + 1;
if($page>=$pages)
  $Next=$page;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Research Papers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="MARTECH | Deer Creative Theme">
	 <?php include("Master_Pages/Head_Links.php");?>
   <script>
		$('#myModal').on('shown.bs.modal', function () {
  			$('#myInput').trigger('focus')
		})
	</script>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
	<div id="main">
		<?php include("Master_Pages/Menu.php"); ?>
		<div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link active" href="#">Research Paper</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="blog-layout">
        <div class="container">
          <div class="row">
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
                    <h2 class="title">Filters</h2>
                  </div>
                  <div class="categories_bottom">
                    <ul>
                      <li> <a class="category-link" href="shop_grid+list_3col.html">Year</a></li>
                      <li> <a class="category-link" href="shop_grid+list_3col.html">Author</a></li>
                      <li> <a class="category-link" href="shop_grid+list_3col.html">Area of Agriculture</a></li>
                      <li> <a class="category-link" href="shop_grid+list_3col.html">Technology</a></li>
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
                    $query="select * from tbl_research_paper order by pid desc limit 3";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){?>
                  
                    <div class="mini-post_block">
                      <div class="mini-post_img"><a href="#"><img src="<?php echo ltrim($row["image_loc"],'/././')?>" alt="blog image"></a></div>
                      <div class="mini-post_text"><a href="#"><?php echo $row['title']; ?></a>
                        <h5><b><?php 
                        $date=date_create($row['PostedDate']);
                        echo date_format($date,"F d, Y"); ?></b></h5>
                      </div>
                    </div>
                  <?php }
                  }?>
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
            <div class="col-12 col-xl-9">
              <div class="blog-list">
                <div id="show-filter-sidebar">
                  <h5> <i class="fas fa-bars"></i>Show sidebar</h5>
                </div>
                

            <?php
              
              if($con)
              {
                
                $query="select * from tbl_research_paper order by pid desc limit $start,$limit";
                $res=mysqli_query($con,$query);
                $i=0;
                $modal="pd_";
                $abs="Abstract_";
                $highlights="highlights_";
                while($row=mysqli_fetch_assoc($res)){?>
                  <div class="blog-block">
                    <div class="row">
                      <div class="col-5">
                        <div class="blog-img"><a href="#"><img src="<?php echo ltrim($row["image_loc"],'/././')?>" alt="blog image"></a></div>
                      </div>
                      <div class="col-7">
                        <div class="blog-text">
                          <?php
                          if(!isset($_SESSION["user"])){?>
                          <a data-toggle="modal" data-target="#nodownload" class="blog-tag" download>Download</a><br/>
                          <?php
                          }
                          else
                          {?>
                          <a href="<?php echo ltrim($row['pdf_loc'],'/././')?>" class="blog-tag" download>Download</a><br/>
                          <?php }?>
                          <a class="blog-title" href="#"><?php echo $row['title']; ?></a>
                          <div class="modal fade" id="nodownload" tabindex="-1" role="dialog" aria-labelledby="nodownload" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>To download research paper you must have to login into your account...</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="blog-credit">
                            <p class="credit"><?php echo $row['pyear'];?></p><br/>
                            <p class="credit "><b>Author</b> - <?php echo $row['author'];?></p><br/>
                            <p class="credit "><b>Area of Agriculture</b> - <?php echo $row['aoa'];?></p><br/>
                            <p class="credit comment"><b>Technology</b> - <?php echo $row['technology'];?></p>
                        </div>

                        <p class="blog-describe"><a class="blog-readmore" data-toggle="modal" data-target="#<?php echo $modal.$i ?>">Publication Details</span></a></p>
                        
                        <a class="blog-readmore" data-toggle="modal" data-target="#<?php echo $abs.$i ?>">
                          Read More<span> <i class="arrow_carrot-2right"></i></span>
                        </a>
                        <br/><?php 
                        if(!empty($row['highlights']))
                        {?>
                           <a class="blog-readmore" data-toggle="modal" data-target="#<?php echo $highlights.$i ?>">
                            Highlights
                          </a><?php
                        }?>
                        <div class="modal fade" id="<?php echo $modal.$i ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo 'exampleModalLongTitle'.$i ?>" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="<?php echo 'exampleModalLongTitle'.$i ?>">Publication Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p><b>Chicago</b> : <?php echo $row['publication_details'];?></p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="modal fade" id="<?php echo $abs.$i ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo 'AbstractTitle'.$i ?>" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="<?php echo 'AbstractTitle'.$i ?>">Abstract</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p><?php echo $row['abstract'];?></p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="<?php echo $highlights.$i ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo 'HighlightsTitle'.$i ?>" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="<?php echo 'HighlightsTitle'.$i ?>">Higlights</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p><?php echo $row['highlights'];?></p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                  $i=$i+1;
                }
              }
            ?>

                <div class="blog-pagination">
                <ul>
                  <li>
                    <a class="no-round-btn smooth" style="padding-top:8px;" href="research_paper.php?page=<?php echo $Previous?>"><p class="text-center"> <i class="arrow_carrot-2left"></i></p></a>
                  </li>

                  <?php  for($k=($page-2);$k<=($page+2);$k++):?>
                  <li>
                    <?php if($k>=1&&$k<=$pages){?>
                      <?php  if($k==$page) { ?>
                      <a class="no-round-btn smooth active" style="padding-top:10px;" href="research_paper.php?page=<?php echo $k?>"><p class="text-center"><?php echo $k;?></p></a>
                      <?php }else {?>
                      <a class="no-round-btn smooth" style="padding-top:10px;" href="research_paper.php?page=<?php echo $k?>"><p class="text-center"><?php echo $k;?></p></a>
                      <?php } ?>
                    <?php } ?>
                  </li>
                  <?php endfor?>
                  <li>
                    <a class="no-round-btn smooth" style="padding-top:8px;" href="research_paper.php?page=<?php echo $Next?>"> <p class="text-center"> <i class="text-center arrow_carrot-2right"></i></p></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
		<?php  mysqli_close($con);
          include("Master_Pages/Footer.php"); ?>
   </div>
	<?php include("Master_Pages/Scripts.php");?>
</body>
</html>