<style>
.dropdown {
  position: relative;
  display: block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 170px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 12px;
  text-decoration: none;
  display: block;

}
.dropdown-content li{
   border-bottom: 1px solid grey;
}

.dropdown:hover .dropdown-content {display: block;margin-top: 20%;}

</style><?php
session_start();
        include("Database_Connection/connect.php");
        if($con)
            mysqli_select_db($con,'mango');
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
            mysqli_close($con);
             ?>

 <header> 
        <div class="header-block d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="header-left d-flex flex-column flex-md-row align-items-center">
                  <p class="d-flex align-items-center"><i class="fas fa-envelope"></i><?php echo $email;?></p>
                  <p class="d-flex align-items-center"><i class="fas fa-phone"></i><?php echo $contact;?></p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="header-right d-flex flex-column flex-md-row justify-content-md-end justify-content-center align-items-center">
                  <div class="social-link d-flex"><a href="<?php echo $yt?>"><i class="fab fa-youtube"> </i></a><a href="<?php echo $it?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $li?>"><i class="fab fa-invision"> </i></a><a href="<?php echo $pt?>"><i class="fab fa-pinterest"> </i></a></div>
                  <?php
                    if(!isset($_SESSION["user"]))
                    {
                  ?><div class="login d-flex "><a href="Login.php" ><i class="fas fa-user"></i>Login</a>
                 </div>
                  
                  <?php
                    }
                    else
                    {
                  ?>
                    <div class="login d-flex dropdown">
                     <a href="#" class="dropbtn"><i class="fas fa-user"></i>Account

                     </a>
                     <div class="dropdown-content">
                      <li><a href="#">Profile</a></li>
                      <li><a href="#">Dashboard</a></li>
                      <li><a href="#">Change Password</a></li>
                      <li><a href="Logout.php">Logout</a></li>
                    </div>
                    </div>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="navigation d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-2"><a class="logo" href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
              <div class="col-8">
                <div class="navgition-menu d-flex align-items-center justify-content-center">
                  <ul class="mb-0">
                    <li class="toggleable"> <a class="menu-item active" href="index.php">Home</a></li>
                    <li class="toggleable"> <a class="menu-item" href="#">Services</a>
                       <ul class="sub-menu">
            					   <li><a href="#">Give on rent</a></li>
            					    <li><a href="#">Expert advice</a></li>
            						 <li><a href="#">Advertise</a></li>
          						 </ul>
                    </li>
                    <li class="toggleable"><a class="menu-item" href="#">Resource</a>
                      <ul class="sub-menu">
						<li><a href="Datasets.php">Datasets</a></li>
                       <li><a href="research_paper.php">Literature base</a></li>
						<li><a href="Software_and_Tools.php">Software And Tools</a></li>
                        <li><a href="#">Useful Links</a></li>
                      </ul>
                    </li>
                    <li class="toggleable"> <a class="menu-item" href="#">Knowledgebase</a>
                      <ul class="sub-menu">
                       <li><a href="#">Blog</a></li>
                            <li><a href="#">Articles</a></li>
              							<li><a href="#">Videos</a></li>
              							<li><a href="#">Images</a></li>
              							<li><a href="#">News</a></li>
                      </ul>
                    </li>
                    <li class="toggleable"><a class="menu-item" href="about_us.php">About us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-2">
                <div class="product-function d-flex align-items-center justify-content-end">
                  <div id="wishlist"><a class="function-icon icon_heart_alt" href=""></a></div>
                  <div id="cart"><a class="function-icon icon_bag_alt" href=""><span>$0.00</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div id="mobile-menu">
          <div class="container">
            <div class="row">
              <div class="col-3">
                <div class="mobile-menu_block d-flex align-items-center"><a class="mobile-menu--control" href="#"><i class="fas fa-bars"></i></a>
                  <div id="ogami-mobile-menu">
                    <button class="no-round-btn" id="mobile-menu--closebtn">Close menu</button>
                    <div class="mobile-menu_items">
                      <ul class="mb-0 d-flex flex-column">
                        <li class="toggleable"> <a class="menu-item active" href="index.php">Home</a><span class="sub-menu--expander"><i class="icon_plus"></i></span>
                         
                        </li>
                        <li class="toggleable"><a class="menu-item" href="#">Services</a><span class="sub-menu--expander"><i class="icon_plus"></i></span>
                          <ul class="sub-menu">
					   <li><a href="#">Give on rent</a></li>
					    <li><a href="#">Expert advice</a></li>
						 <li><a href="#">Advertise</a></li>
						 </ul>
                        </li>
                        <li class="toggleable"><a class="menu-item" href="#">Resource</a><span class="sub-menu--expander"><i class="icon_plus"></i></span>
                      <ul class="sub-menu">
						<li><a href="Datasets.php">Datasets</a></li>
                       <li><a href="research_paper.php">Literature base</a></li>
						<li><a href="Software_and_Tools.php">Software And Tools</a></li>
                       <li><a href="#">Useful Links</a></li>
                      </ul>
                    </li>
                        <li class="toggleable"><a class="menu-item" href="#">Knowledgebase</a><span class="sub-menu--expander"><i class="icon_plus"></i></span>
                          <ul class="sub-menu">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Articles</a></li>
							<li><a href="#">Videos</a></li>
							<li><a href="#">Images</a></li>
							<li><a href="#">News</a></li>
                          </ul>
                        </li>

                      </ul>
                      <li class="toggleable"><a class="menu-item" href="about_us.php">About us</a></li>
                   
                    <?php
                    if(!isset($_SESSION["user"])){?>
                      <li class="toggleable"><a class="menu-item" href="Login.php">Login</a></li>
                      <li class="toggleable"><a class="menu-item" href="register.php">Register</a></li>
                    <?php }else{
                      ?><li class="toggleable"><a href="" class="menu-item">Account</a><span class="sub-menu--expander"><i class="icon_plus"></i></span>
                       <ul class="sub-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="Logout.php">Logout</a></li></ul></li>
                    <?php } ?>
                     </div>
                    <div class="mobile-social"><a href=""><a href="<?php echo $yt?>"><i class="fab fa-youtube"> </i></a><a ref="<?php echo $it?>"><i class="fab fa-instagram"></i></a><a ref="<?php echo $li?>"><i class="fab fa-invision"> </i></a><a ref="<?php echo $pt?>"><i class="fab fa-pinterest"> </i></a></div>
                  </div>
                  <div class="ogamin-mobile-menu_bg"></div>
                </div>
              </div>
              <div class="col-6">
                <div class="mobile-menu_logo text-center d-flex justify-content-center align-items-center"><a href=""><img src="assets/images/logo.png" alt=""></a></div>
              </div>
              <div class="col-3">
                <div class="mobile-product_function d-flex align-items-center justify-content-end"><a class="function-icon icon_heart_alt" href="wishlist.html"></a><a class="function-icon icon_bag_alt" href="shop_cart.html"></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="navigation-filter"> 
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
                <div class="department-menu_block">
                  <div class="department-menu d-flex justify-content-between align-items-center"><i class="fas fa-bars"></i>Mango Category<span><i class="arrow_carrot-down"></i></span></div>
                  <div class="department-dropdown-menu">
                    <ul>
                      <li><a href="#"> <img src="assets/images/partner/logo1.png">&nbsp;&nbsp;&nbsp;Aafus</a></li>
                      <li><a href="#"> <img src="assets/images/partner/logo2.png">&nbsp;&nbsp;&nbsp;Badami</a></li>
                      <li><a href="#"> <img src="assets/images/partner/logo3.png">&nbsp;&nbsp;&nbsp;Dahseri</a></li>
                      <li><a href="#"> <img src="assets/images/partner/logo4.png">&nbsp;&nbsp;&nbsp;Langdo</a></li>
                      <li><a href="#"> <img src="assets/images/partner/logo5.png">&nbsp;&nbsp;&nbsp;Kesar</a></li>
                      <li><a href="#"> <img src="assets/images/partner/logo8.png">&nbsp;&nbsp;&nbsp;Payri</a></li>
                      <li><a href="#"> <img src="assets/images/partner/logo7.png">&nbsp;&nbsp;&nbsp;Rajapuri</a></li>
                      <li><a href="#"> <img src="assets/images/partner/logo6.png">&nbsp;&nbsp;&nbsp;Totapuri</a></li>
                      <li><a href="#"> Others</a></li>       
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
                <div class="website-search">
                  <div class="row no-gutters">
                    <div class="col-0 col-md-0 col-lg-4 col-xl-3">
                      <div class="filter-search">
                        <div class="categories-select d-flex align-items-center justify-content-around"><span>All Categories</span><i class="arrow_carrot-down"></i></div>
                        <div class="categories-select_box">
                          <ul>
                            <li>Fruit & Nut Gifts</li>
                            <li>Fresh Berries</li>
                            <li>Ocean Foods</li>
                            <li>Butter & Eggs</li>
                            <li>Ocean Foods</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-8 col-md-8 col-lg-5 col-xl-7">
                      <div class="search-input">
                        <input class="no-round-input no-border" type="text" placeholder="What do you need">
                      </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2">
                      <button class="no-round-btn">Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>