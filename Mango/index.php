<?php

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
    <style>
          .categories-img{
        width:170px;height:170px;
      }

      .items-category .container .row  .post-title h2.pst{
        font-size: 18px;
      }
      .items-category .container .row  .post-title{
        width:200px;height:40px;word-wrap:break-word;
      }
      .post-category{
        margin-top:10%;
      }
      .slider-text h2 b{
        color:black;font-size:28px;
      }
      .slider-text h2{
        color:gray;font-size:20px;
      }
      <?php if(isset($_SESSION["user"]))
      {
        ?>
        .normal-btn,.reg{
          display: none;
        } 
        <?php
      }?>






    </style>
</head>
<body>
	<div id="main">
		<?php include("Master_Pages/Menu.php"); ?>
		
      <div class="slider">
        <div class="full-fluid">
          <div class="slider_wrapper">
            <div class="slider-block" style="background-image: url('assets/images/homepage01/slider_background_1.png')">
              <div class="slider-content">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-5 col-xl-6">
                      <div class="slider-text d-flex flex-column align-items-center align-items-md-start">
                        <h5 data-animation="fadeInUp" data-delay=".2s">Zephyr Limns</h5>
                        <h2 data-animation="fadeInUp" data-delay=".3s">Planning your diet in summer is not easy when you have <b>mangoes</b> on hand.</h2>
                      
                        <br/><a class="normal-btn reg" href="register.php" data-animation="fadeInUp" data-delay=".4s">Join Us</a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="slider-img" data-animation="zoomIn" data-delay=".1s"><img src="assets/images/homepage01/slider_subbackground_1.png" alt="">
                        <div class="prallax-img">
                          <div id="img-block"><img class="img" src="assets/images/homepage01/slider_img_1.png" alt="" data-depth="1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-block" style="background-image: url('assets/images/homepage01/slider_background_2.jpg')">
              <div class="slider-content"> 
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-5 col-xl-6">
                      <div class="slider-text d-flex flex-column align-items-center align-items-md-start">
                        <h5 data-animation="fadeInUp" data-delay=".2s">Snidhu</h5>
                        <h2 data-animation="fadeInUp" data-delay=".3s">Mango is epitome of humility.<br/>Despite being the King of fruits, it chooses to live an 'Aam' life.<br/>Mango is awesome. <b>Be like Mango.</b></h2>
                        <br/><a class="normal-btn" href="register.php" data-animation="fadeInUp" data-delay=".4s">Join Us</a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="slider-img" data-animation="zoomIn" data-delay=".1s"><img src="assets/images/homepage01/slider_subbackground_1.png" alt=""><img class="img" src="assets/images/homepage01/slider_img_2.png" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-block" style="background-image: url('assets/images/homepage01/slider_background_1.png')">
              <div class="slider-content"> 
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-5 col-xl-6">
                      <div class="slider-text d-flex flex-column align-items-center align-items-md-start">
                        <h5 data-animation="fadeInUp" data-delay=".2s">Vartika Tripathi</h5>
                        <h2 data-animation="fadeInUp" data-delay=".3s"><b>Mango</b>  is not only a fruit, it mends eating ecstacy.</h2>
                      <br/>
                      <a class="normal-btn" href="register.php" data-animation="fadeInUp" data-delay=".4s">Join Us</a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="slider-img" data-animation="zoomIn" data-delay=".1s"><img src="assets/images/homepage01/slider_subbackground_1.png" alt=""><img class="img" src="assets/images/homepage01/slider_img_3.png" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="benefit-block">
            <div class="container">
              <div class="our-benefits">
                <div class="row">
                  <div class="col-12 col-md-4">
                    <div class="benefit-detail d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/homepage01/benefit-icon1.png" alt="">
                      <h5 class="benefit-Category">Give On Rent</h5>
                      <p class="benefit-describle">Something You Have</p>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="benefit-detail d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/homepage01/benefit-icon2.png" alt="">
                      <h5 class="benefit-Category">Expert Advice</h5>
                      <p class="benefit-describle">Solve Your Problems With Experts</p>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/homepage01/benefit-icon3.png" alt="">
                      <h5 class="benefit-Category">Advertise</h5>
                      <p class="benefit-describle">Promote Your Agriculture Product</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End slider-->
      <div class="items-category">
        <div class="container">
          <div class="row">
       <div class="col-12 text-center">
              <h1 class="title green-underline mx-auto">Latest Posts</h1>
        <br/>
            </div>
      
            <div class="col-12 col-sm-6 col-md-3 text-wrap"><a class="product-item d-flex flex-column align-items-center justify-content-center" href="shop_grid+list_3col.html" style="background-image: url(assets/images/homepage01/item_category_1.png)">
                <div class="categories-img" ><img src="assets/images/post/post3.png" alt=""></div>
                <div  class="post-title"><h2 class="pst text-center">Mango Face Packs: 5 DIY Ideas For A Healthy Skin This Summer</h2>
                </div>
        <div class="post-category" ><p>Article</p></div></a></div>
            <div class="col-12 col-sm-6 col-md-3 text-wrap"><a class="product-item d-flex flex-column align-items-center justify-content-center" href="shop_grid+list_3col.html" style="background-image: url(assets/images/homepage01/item_category_2.png)">
                <div class="categories-img" ><img src="assets/images/post/post10.jpg" alt=""></div>
                <div class="post-title" ><h2 class="pst text-center" >What is Precision Agriculture? What is the meaning of Precision Farming?</h2>
                </div><div class="post-category" ><p>Video</p></div></a></div>
            <div class="col-12 col-sm-6 col-md-3 text-wrap"><a class="product-item d-flex flex-column align-items-center justify-content-center" href="shop_grid+list_3col.html" style="background-image: url(assets/images/homepage01/item_category_3.png)">
                <div class="categories-img" ><img src="assets/images/post/post11.jpg" alt=""></div>
                <div class="post-title"><h2 class="pst text-center" >Healthy Summer Diet: 5 Healthy Mango Recipes That Combine Flavour With Nutrition</h2>
                </div><div class="post-category" ><p>Category</p></div></a></div>
            <div class="col-12 col-sm-6 col-md-3 text-wrap"><a class="product-item d-flex flex-column align-items-center justify-content-center" href="shop_grid+list_3col.html" style="background-image: url(assets/images/homepage01/item_category_4.png)">
                <div class="categories-img" ><img src="assets/images/post/post12.jpg" alt=""></div>
                <div class="post-title" ><h2 class="pst text-center">Smart Farming - Agriculture in the future</h2>
                </div><div class="post-category" ><p>Video</p></div></a></div>
          </div>
        </div>
      </div>
      <!-- End items-category-->
      <div class="feature-products">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1 class="title mx-auto">Farming Phases</h1>
            </div>
            <div class="col-12">
              <div id="tab">
                <ul class="tab-control">
                  <li><a class="active" href="#tab-1">All</a></li>
                  <li><a href="#tab-2">Pre-harvesting</a></li>
                  <li> <a href="#tab-3">Harvesting</a></li>
                  <li><a href="#tab-4">Post-harvesting</a></li>
                  <li><a href="#tab-5">Organic Farming</a></li>
          <li><a href="#tab-6">Best Practices</a></li>
                </ul>
                <div id="tab-1">
                  <div class="row no-gutters-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post1.jpeg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post2.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post4.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post5.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post6.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post7.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post8.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post9.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab-2">
                  <div class="row no-gutters-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post1.jpeg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post2.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post4.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post5.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post6.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post7.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post8.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post9.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab-3">
                  <div class="row no-gutters-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post1.jpeg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post2.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post4.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post5.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post6.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post7.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post8.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post9.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab-4">
                  <div class="row no-gutters-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post1.jpeg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post2.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post4.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post5.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post6.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post7.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post8.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post9.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab-5">
                  <div class="row no-gutters-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post1.jpeg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post2.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post4.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post5.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post6.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post7.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post8.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post9.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        <div id="tab-6">
                  <div class="row no-gutters-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post1.jpeg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post2.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post4.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post5.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post6.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post7.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post8.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                      <div class="product"><a class="product-img" href="shop_detail.html"><img src="assets/images/post/post9.jpg" alt=""></a>
                        <h5 class="product-type">Category</h5>
                        <h3 class="product-name">Title</h3>
                        
                        <div class="product-select">
                          <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                          <button class="add-to-cart round-icon-btn">  <i class="icon_bag_alt"></i></button>
                          <button class="add-to-compare round-icon-btn"><i class="fas fa-random"></i></button>
                          <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End feature-products-->
    <div class="col-12 text-center order-1">
        <h1 class="title green-underline mx-auto">Upcoming Farming Events</h1>
        </div>
      <div class="banner"> 
        <div class="full-fluid">
          <div class="banner-block">
            <div class="row no-gutters" style="background-image: url('assets/images/homepage01/slider_background_1.png')">
              <div class="col-12 col-lg-3" >
                <div class="banner-block_detail" ><img src="assets/images/homepage01/banner_img_1-1.png" alt=""><a class="banner-btn normal-btn" href="shop_grid+list_3col.html">View Event</a></div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="banner-block_detail" ><img src="assets/images/homepage01/banner_img_2-1.png" alt=""><a class="banner-btn normal-btn" href="shop_grid+list_3col.html">View Event</a></div>
              </div>
              <div class="col-12 col-lg-3">
                <div class="banner-block_detail"><img src="assets/images/homepage01/banner_img_3-1.png" alt=""><a class="banner-btn normal-btn" href="shop_grid+list_3col.html">View Event</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End banner -->
      <div class="deal-of-week">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 text-center order-1">
              <h1 class="title green-underline mx-auto">Mango - King of Fruit</h1>
            </div>
            <div class="col-10 col-md-6 col-lg-4 order-3 order-md-2 order-lg-2">
              <div class="row">
                <div class="col-12">
                  <div class="featured-use text-md-right">
                    <div class="featured-use_intro order-2 order-md-1">
                      <h5>Nutritious</h5>
                      <p>Mangoes hold more than 20 diverse vitamins and minerals</p>
                    </div>
                    <div class="featured-use_icon text-md-right order-1 order-md-2 featured-use_icon-left">
                      <div class="icon-detail"><img src="assets/images/homepage01/dow_icon_1.png" alt=""></div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="featured-use text-md-right">
                    <div class="featured-use_intro order-2 order-md-1">
                      <h5>Growth</h5>
                      <p>Mango trees start to produce fruit after four years</p>
                    </div>
                    <div class="featured-use_icon text-md-right order-1 order-md-2 featured-use_icon-left">
                      <div class="icon-detail"><img src="assets/images/homepage01/dow_icon_2.png" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-2 order-md-4 order-lg-3 text-center">
              <div class="week-product_img"><a href="https://www.youtube.com/watch?v=kURGH9RZnpo"><img class="img-fluid" src="assets/images/homepage01/dow.png" alt="">
                <p>Must<br><span>Watch</span></p></a>
              </div>
            </div>
            <div class="col-10 col-md-6 col-lg-4 order-4 order-md-3 order-lg-4">
              <div class="row">
                <div class="col-12">
                  <div class="featured-use">
                    <div class="featured-use_intro order-2">
                      <h5>Nationality</h5>
                      <p>The mango is the national fruit of India, Philippines, and Pakistan</p>
                    </div>
                    <div class="featured-use_icon order-1 ml-0">
                      <div class="icon-detail"><img src="assets/images/homepage01/dow_icon_3.png" alt=""></div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="featured-use">
                    <div class="featured-use_intro order-2">
                      <h5>Medicinal</h5>
                      <p>The leaves of Mango are filled with curative and remedial attributes</p>
                    </div>
                    <div class="featured-use_icon order-1 ml-0">
                      <div class="icon-detail"><img src="assets/images/homepage01/dow_icon_4.png" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <!-- End deak of the week-->
      <div class="partner">
        <div class="container">
          <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 6}">
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/1.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/2.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_03.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_04.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_05.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_06.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href=""><img src="assets/images/partner/partner_07.png" alt="partner logo"></a></div>
          </div>
        </div>
      </div>
      
	  <?php include("Master_Pages/Footer.php"); ?>
   </div>
	 <?php include("Master_Pages/Scripts.php");?>
</body>
</html>